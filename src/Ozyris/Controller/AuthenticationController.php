<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 26/05/16
 * Time: 14:52
 */

namespace Ozyris\Controller;

use Ozyris\Form\Validator\UidValidator;
use Ozyris\Model\UserModel;
use Ozyris\Form\Validator\EmailValidator;
use Ozyris\Form\Validator\PasswordValidator;
use Ozyris\Form\Validator\StandardValidator;
use Ozyris\Service\Boxes;
use Ozyris\Service\Profile;
use Ozyris\Service\SessionManager;
use Ozyris\Service\Users;

class AuthenticationController extends AbstractController
{

    /**
     * Connecte l'utilisateur, stocke l'objet Users en session, puis redirige sur l'accueil
     */
    public function indexAction()
    {
        if (SessionManager::isAuth()) {
            return $this->redirect();
        }

        if (!empty($_POST)) {

            if (!array_key_exists('username', $_POST) || !array_key_exists('password', $_POST) ||
                !array_key_exists('connectToken', $_POST)) {
                return $this->redirect('authentication');
            }

            $iToken = (int) htmlspecialchars(trim($_POST['connectToken']));

            if ($this->getSessionValue('connectToken') != $iToken) {
                return $this->redirect();
            } else {
                $this->destroySessionValue('connectToken');
            }

            $sUsername = (string) htmlspecialchars(trim($_POST['username']));

            $oModelUser = new UserModel();
            $aDonneesUser = $oModelUser->getUserByUsernameOrEmail($sUsername);

            $sPassword = (string) htmlspecialchars(trim($_POST['password']));

            if (count($aDonneesUser) == 0 || !password_verify($sPassword, $aDonneesUser['password'])) {
                $this->addFlashMessage('Identifiant ou mot de passe incorrect.');

                return $this->redirect('authentication');
            }

            $oUser = new Users($aDonneesUser);

            $this->setSessionValues(['user' => $oUser]);

            $oModelUser->updateConnectionByIdUser($oUser->getId());
            $this->addFlashMessage('Connexion réussie ! Bonjour ' . $oUser->getUsername(), false);

            return $this->redirect();
        }

        $token = random_int(100, 1000);
        $this->setSessionValues(['connectToken' => $token]);

        $this->setVariables([
            'connectToken' => $token
        ]);

        return $this->getView('authentication', 'index');
    }

    /**
     * Création d'un nouvel utilisateur et redirige sur l'action index pour le connecter
     */
    public function registrationAction()
    {
        if (SessionManager::isAuth()) {
            return $this->redirect('index');
        }

        if (!empty($_POST)) {

            if (!array_key_exists('email', $_POST) || !array_key_exists('username', $_POST) ||
                !array_key_exists('password', $_POST) || !array_key_exists('confirm-password', $_POST) ||
                !array_key_exists('registrationToken', $_POST)) {
                return $this->redirect('authentication', 'registration');
            }

            $iToken = (int) htmlspecialchars(trim($_POST['registrationToken']));

            if ($this->getSessionValue('registrationToken') != $iToken) {
                return $this->redirect('registration');
            } else {
                $this->destroySessionValue('registrationToken');
            }

            $sUserEmail = (string) htmlspecialchars(trim($_POST['email']));
            $oEmailValidator = new EmailValidator();
            $bEmailIsValid = $oEmailValidator->isValid($sUserEmail);

            if (!$bEmailIsValid) {
                $this->addFlashMessage($oEmailValidator->errorMessage);

                return $this->redirect('authentication', 'registration');
            }

            $oModelUser = new UserModel();

            if ($oModelUser->isUserAlreadyExist($sUserEmail)) {
                $this->addFlashMessage("Un compte a déjà été crée avec cette adresse email.");

                return $this->redirect('authentication', 'registration');
            }

            $sUsername = (string) htmlspecialchars(trim($_POST['username']));
            $oStandarValidator = new StandardValidator();
            $bUsernameIsValid = $oStandarValidator->stringLenght($sUsername, 3, 50);

            if (!$bUsernameIsValid) {
                $this->addFlashMessage($oStandarValidator->errorMessage);

                return $this->redirect('authentication', 'registration');
            }

            if ($oModelUser->getUserByUsernameOrEmail($sUsername)) {
                $this->addFlashMessage("Ce nom d'utilisateur est déjà utilisé, veuillez en choisir un autre.");

                return $this->redirect('authentication', 'registration');
            }

            $sPassword = (string) htmlspecialchars(trim($_POST['password']));
            $sConfirmPassword = (string) htmlspecialchars(trim($_POST['confirm-password']));
            $oPasswordValidator = new PasswordValidator();
            $bPasswordIsValid = $oPasswordValidator->comparePassword($sPassword, $sConfirmPassword);

            if (!$bPasswordIsValid) {
                $this->addFlashMessage($oPasswordValidator->errorMessage);

                return $this->redirect('authentication', 'registration');
            }

            $aInfosUser['email'] = $sUserEmail;
            $aInfosUser['username'] = $sUsername;
            $aInfosUser['password'] = password_hash($sPassword, PASSWORD_BCRYPT);

            $oUser = new Users($aInfosUser);

            if (!$oModelUser->insertUserByInfosUser($oUser)) {
                throw new \Exception(SessionManager::ERROR_OCCURED);
            }

            $oUser->setId($oModelUser->getIdUserByUsername($oUser->getUsername()));
            $oProfile = new Profile();

            // Vérification de l'uid si renseigné et création du profil
            if (isset($_POST['uid']) && $_POST['uid']) {
                $oUidValidator = new UidValidator();

                if (!$oUidValidator->isValid($_POST['uid'])) {
                    $this->addFlashMessage($oUidValidator->errorMessage);

                    return $this->redirect('authentication', 'registration');
                }

                if(!$oProfile->createProfileByUserId($oUser->getId(), $_POST['uid'])) {
                    throw new \Exception(SessionManager::ERROR_OCCURED);
                }
            } else {
                if(!$oProfile->createProfileByUserId($oUser->getId())) {
                    throw new \Exception(SessionManager::ERROR_OCCURED);
                }
            }

            $this->addFlashMessage('Votre compte a été crée avec succès.', false);

            $this->setSessionValues([
                'user' => $oUser,
                'username' => $oUser->getUsername()
            ]);

            return $this->redirect('index');
        }

        $token = random_int(100, 1000);
        $this->setSessionValues(['registrationToken' => $token]);

        $this->setVariables(
            ['registrationToken' => $token]
        );

        return $this->getView('authentication', 'registration');
    }

    /**
     * Détruit la session puis redirige sur l'accueil
     * @return void
     */
    public function disconnectAction()
    {
        if (SessionManager::isAuth()) {
            $this->destroySessionValue('user');
        }

        $this->addFlashMessage('Déconnexion réussie, à bientôt !', false);

        return $this->redirect();
    }

}