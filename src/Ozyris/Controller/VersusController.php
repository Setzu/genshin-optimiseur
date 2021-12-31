<?php


namespace Ozyris\Controller;


use Ozyris\Model\CharactersModel;
use Ozyris\Model\VersusModel;

class VersusController extends AbstractController
{

    public function indexAction()
    {
        // @TODO : à retirer lorsque la fonction sera oppérationnelle
        return $this->redirect();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['token']) && isset($_POST['token'])
            && $_POST['token'] === md5($_SESSION['token'])) {

            if (isset($_POST['firstSubmit'])) {
                $sWinner = $_SESSION['firstCharacter'];
                $sLoser = $_SESSION['secondCharacter'];
            } elseif (isset($_POST['secondSubmit'])) {
                $sWinner = $_SESSION['secondCharacter'];
                $sLoser = $_SESSION['firstCharacter'];
            } else {
                return $this->redirect('versus');
            }

            unset($_SESSION['token']);
            unset($_SESSION['firstCharacter']);
            unset($_SESSION['secondCharacter']);

            $oCharacterModel = new CharactersModel();
            $oCharacterModel->updateCharacterVictoriesByName($sWinner);
            $oCharacterModel->updateCharacterDefeatsByName($sLoser);

            return $this->redirect('versus');
        } else {

        $token = uniqid();
        $aCharactersList = $this->getConfig('characters');

        // Génération aléatoire des 2 personnages pour le versus
        $firstNumber = rand(1, count($aCharactersList['characters']) -1);
        $secondNumber = rand(1, count($aCharactersList['characters']) -1);

        while ($firstNumber == $secondNumber) {
            $secondNumber = rand(1 , count($aCharactersList['characters']) -1);
        }

        $this->setSessionValues([
            'token' => $token,
            'firstCharacter' => $aCharactersList['characters'][$firstNumber]['name'],
            'secondCharacter' => $aCharactersList['characters'][$secondNumber]['name'],
        ]);

        $this->setVariables([
            'token' => md5($token),
            'firstDescription' => $aCharactersList['characters'][$firstNumber]['description'],
            'secondDescription' => $aCharactersList['characters'][$secondNumber]['description']
        ]);

        return $this->getView('versus');
        }
    }

    public function classementAction()
    {
        // @TODO : à retirer lorsque la fonction sera oppérationnelle
        return $this->redirect();

        $oCharacterModel = new CharactersModel();
        $aCharacters = $oCharacterModel->selectCharactersVictories();

        $this->setVariables([
            'aCharacters' => $aCharacters
        ]);

        return $this->getView('versus', 'classement');
    }
}