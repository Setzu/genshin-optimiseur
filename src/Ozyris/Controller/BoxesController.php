<?php


namespace Ozyris\Controller;


use Ozyris\Exception\ControllerException;
use Ozyris\Exception\ModelException;
use Ozyris\Model\UserModel;
use Ozyris\Service\Boxes;
use Ozyris\Service\Crypt;
use Ozyris\Service\Profile;
use Ozyris\Service\SessionManager;
use Ozyris\Service\Users;

class BoxesController extends AbstractController
{

    public function indexAction()
    {
        if (!SessionManager::isAuth()) {
            $this->addFlashMessage(SessionManager::LOGIN_REQUIRED);
            return $this->redirect('authentication');
        }

        if (!array_key_exists('user', $_SESSION) || !$_SESSION['user'] instanceof Users) {
            throw new \Exception('BoxesController indexAction La clé user n\'existe pas en session ou n\'est pas
            un objet Users');
        }

        $aCharactersList = $this->getConfig('characters', 'characters');

        /**
         * @var Users $oUser
         */
        $oUser = $_SESSION['user'];
        $oBoxes = new Boxes();
        $aUserCharacters = $oBoxes->getCharactersByUserId($oUser->getId());

        $this->setVariables([
            'aCharacters' => $aUserCharacters,
            'aCharactersList' => $aCharactersList,
            'fTotalBoxCompletion' => $oBoxes->calculTotalBoxCompletion($aUserCharacters)
        ]);

        return $this->getView('boxes');
    }

    /**
     * Ajax method /js/ajax/boxes.js
     * @return BoxesController|null
     * @throws ControllerException
     */
    public function characterAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['characterName']) && isset($_POST['constellations'])) {

            $sCharacterName = htmlspecialchars(trim($_POST['characterName']));
            $iConstellations = (int) htmlspecialchars(trim($_POST['constellations']));

            $this->setVariables([
                'sCharacterName' => $sCharacterName,
                'iConstellations' => $iConstellations
            ]);

            return $this->getView('boxes', 'character', false);
        } else {
            return null;
        }
    }

    /**
     * @return BoxesController|void
     * @throws ControllerException
     * @throws ModelException
     */
    public function updateAction()
    {
        if (!SessionManager::isAuth()) {
            return $this->redirect();
        }

        /**
         * @var Users $oUser
         */
        $oUser = $_SESSION['user'];
        $oBoxes = new Boxes();
        $aUserCharacters = $oBoxes->getCharactersByUserId($oUser->getId());
        $aCharactersList = $this->getConfig('characters','characters');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (empty($aUserCharacters)) {
                $this->addFlashMessage(SessionManager::ERROR_OCCURED);
                throw new \Exception('BoxesController updateAction : $aUserCharacter est vide.');
            }

            foreach ($aUserCharacters as $id => $character) {
                if (!isset($_POST['constellations-' . $id])) {
                    $this->addFlashMessage(SessionManager::ERROR_OCCURED);

                    return $this->redirect('boxes', 'update');
                }

                $iConstellations = (int) htmlspecialchars(trim($_POST['constellations-' . $id]));

                if (isset($_POST['owned-' . $id])) {
                    $iOwned = 1;
                } else {
                    $iOwned = 0;
                }

                if (!$oBoxes->updateCharacter($oUser->getId(), $id, true, $iOwned, $iConstellations)) {
                    $this->addFlashMessage(SessionManager::ERROR_OCCURED);

                    return $this->redirect('boxes', 'update');
                }
            }

            $this->addFlashMessage('Vos modifications ont bien été enregistrées.', false);

            return $this->redirect('boxes');
        } else {
            $aUserWeapons = $oBoxes->getWeaponsByUserId($oUser->getId());
            $aUserArtifacts = $oBoxes->getArtifactsByUserId($oUser->getId());
            $aWeaponsList = $this->getConfig('weapons');
            $aArtifactsList = $this->getConfig('artifacts','sets');

            // Si l'utilisateur n'a pas de personnage, on ajoute les infos des personnages dans la table characters
            if (empty($aUserCharacters)) {
                foreach ($aCharactersList as $id => $character) {
                    if (!$oBoxes->updateCharacter($oUser->getId(), $id, false)) {
                        $this->addFlashMessage(SessionManager::ERROR_OCCURED);

                        return $this->redirect('boxes');
                    }

                    $aUserCharacters[$id]['owned'] = Boxes::DEFAULT_VALUE_OWNED;
                    $aUserCharacters[$id]['constellations'] = Boxes::DEFAULT_VALUE_CONSTELLATIONS;
                }
            }

            $this->setVariables([
                'aWeapons' => $aUserWeapons,
                'aArtifacts' => $aUserArtifacts,
                'aCharacters' => $aUserCharacters,
                'aCharactersList' => $aCharactersList,
                'aWeaponsList' => $aWeaponsList,
                'aArtifactsList' => $aArtifactsList
            ]);

            return $this->getView('boxes', 'update');
        }
    }

    public function shareAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['boxLink'])) {
            $sBoxLink = htmlspecialchars(trim($_POST['boxLink']));
            $oCrypt = new Crypt();
            $userId = $oCrypt->decrypt($sBoxLink);
            $oProfile = new Profile();
            $aProfileDatas = $oProfile->getProfileByUserId($userId);

            if (!$aProfileDatas) {
                $this->addFlashMessage('Aucune box n\'a été trouvée avec ce lien.');
                return $this->redirect('boxes', 'share');
            } elseif (!$aProfileDatas['sharing_box_permission']) {
                $this->addFlashMessage('Cet utilisateur n\'a pas autorisé le partage de sa box.');
                return $this->redirect('boxes', 'share');
            }

            $oBoxes = new Boxes();
            $aUserCharacters = $oBoxes->getCharactersByUserId($userId);
            $aCharactersConfig = $this->getConfig('characters', 'characters');

            $this->setVariables([
                'aUserCharacters' => $aUserCharacters,
                'fTotalBoxCompletion' => $oBoxes->calculTotalBoxCompletion($aUserCharacters),
                'aCharactersList' => $aCharactersConfig,
                'username' => $aProfileDatas['username'],
                'uid' => ($aProfileDatas['sharing_uid_permission']) ? $aProfileDatas['uid'] : null
            ]);

            return $this->getView('boxes', 'share');
        }
        // GET, récupérer box en BDD et l'afficher
        return $this->getView('boxes', 'share');
    }
}