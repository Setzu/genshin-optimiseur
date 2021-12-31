<?php


namespace Ozyris\Controller;


use Ozyris\Form\Validator\UidValidator;
use Ozyris\Model\BoxesModel;
use Ozyris\Model\UserModel;
use Ozyris\Service\Crypt;
use Ozyris\Service\Profile;
use Ozyris\Service\SessionManager;
use Ozyris\Service\Users;

class ProfileController extends AbstractController
{

    public function indexAction()
    {
        if (!SessionManager::isAuth()) {
            $this->addFlashMessage(SessionManager::LOGIN_REQUIRED);
            return $this->redirect();
        }

        /**
         * @var Users $oUser
         */
        $oUser = $_SESSION['user'];
        $oProfile = new Profile();
        $aProfileDatas = $oProfile->getProfileByUserId($oUser->getId());

        $oCrypt = new Crypt();
        $oCrypt->encrypt($oUser->getId());
        $sBoxUrl = 'https://genshin-optimizer.fr/boxes/share?box=';

        $this->setVariables([
            'sBoxUrl' => $sBoxUrl,
            'sHash' => $oCrypt->getHash(),
            'aProfileDatas' => $aProfileDatas
        ]);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['profileToken']) || !isset($_SESSION['profileToken']) || $_POST['profileToken'] !=
                $_SESSION['profileToken']) {
                return $this->redirect('profile');
            } else {
                $this->destroySessionValue('profileToken');

                if (isset($_POST['uid'])) {
                    if (empty($_POST['uid'])) {
                        $uid = null;
                    } else {
                        $uid = (int)htmlspecialchars(trim($_POST['uid']));
                        $uidValidator = new UidValidator();

                        if (!$uidValidator->isValid($uid)) {
                            $this->addFlashMessage($uidValidator->errorMessage);
                            return $this->redirect('profile');
                        }
                    }
                } else {
                    $uid = $aProfileDatas['uid'];
                }

                if (isset($_POST['boxChecked'])) {
                    $checkBoxPermission = htmlspecialchars(trim($_POST['boxChecked']));
                    ($checkBoxPermission === 'on') ? $checkBoxPermission = 1 : $checkBoxPermission = 0;
                } else {
                    $checkBoxPermission = 0;
                }

                if (isset($_POST['uidChecked'])) {
                    $checkUidPermission = htmlspecialchars(trim($_POST['uidChecked']));
                    ($checkUidPermission === 'on') ? $checkUidPermission = 1 : $checkUidPermission = 0;
                } else {
                    $checkUidPermission = 0;
                }

                if ($oProfile->updateProfile($oUser->getId(), $checkBoxPermission, $checkUidPermission, $uid)) {
                    $this->addFlashMessage('Votre profil a été mis à jour avec succès.', false);
                } else {
                    $this->addFlashMessage(SessionManager::ERROR_OCCURED);
                }
            }

            return $this->redirect('profile');
        }

        $this->setSessionValues([
            'profileToken' => uniqid()
        ]);

        return $this->getView('profile');
    }

    public function deleteAction()
    {
        if (!SessionManager::isAuth()) {
            return $this->redirect();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteToken']) && $_POST['deleteToken'] === $_SESSION['deleteToken']) {

            $this->destroySessionValue('deleteToken');
            /**
             * @var Users $oUser
             */
            $oUser = $_SESSION['user'];
            $oUserModel = new UserModel();
            $oBoxesModel = new BoxesModel();
            $oBoxesModel->deleteBoxByUserId($oUser->getId());
            $oBoxesModel->deleteAllCharactersByUserId($oUser->getId());
            $oBoxesModel->deleteAllWeaponsByUserId($oUser->getId());
            $oBoxesModel->deleteAllArtifactsByUserId($oUser->getId());
            $oUserModel->deleteUserById($oUser->getId());
            $this->destroySessionValue('user');

            $this->addFlashMessage('Compte supprimé avec succès', false);
            return $this->redirect();
        } else {
            $this->setSessionValues([
                'deleteToken' => uniqid()
            ]);

            return $this->getView('profile', 'delete');
        }

    }
}