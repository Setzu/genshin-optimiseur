<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 24/06/16
 * Time: 11:50
 */

namespace Ozyris\Controller;

use Ozyris\Exception\ControllerException;
use Ozyris\Exception\ModelException;
use Ozyris\Form\Validator\EmailValidator;
use Ozyris\Form\Validator\PasswordValidator;
use Ozyris\Model\UserModel;
use Ozyris\Service\Mailer;
use Ozyris\Service\SessionManager;

class PasswordController extends AbstractController
{

    /**
     * @return mixed|PasswordController|void
     * @throws ModelException
     * @throws ControllerException
     */
    public function indexAction()
    {
        if (SessionManager::isAuth()) {
            return $this->redirect('index');
        }

        if ($_POST) {
            $sUserEmail = (string) htmlspecialchars(trim($_POST['email']));
            $oEmailValidator = new EmailValidator();
            $bEmailIsValid = $oEmailValidator->isValid($sUserEmail);

            if (!$bEmailIsValid) {
                $this->addFlashMessage($oEmailValidator->errorMessage);

                return $this->redirect('password');
            }

            $oModelUser = new UserModel();
            $aDonneesUser = $oModelUser->getUserByUsernameOrEmail($sUserEmail);

            if (!$aDonneesUser) {
                $this->addFlashMessage('Aucun compte n\'existe avec cette adresse email.');

                return $this->redirect('password');
            }

            $bIsAlreadyResetRequest = $oModelUser->isAlreadyResetRequest($sUserEmail);

            if ($bIsAlreadyResetRequest) {
                $this->addFlashMessage('Vous avez déjà fait une demande de réinitialisation de mot de passe.<br>
                Consultez votre boîte mail, ou réessayez dans 24h.');

                return $this->redirect();
            }

            $token = base64_encode($aDonneesUser['email'] . $aDonneesUser['id'] . date('Y-m-d H:i:s'));
            $oModelUser->resetPasswordByToken($aDonneesUser['id'], $aDonneesUser['email'], $token);
            $sUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/resetpassword/' . $token;

            $sMessage = 'Content-Type: text/html; charset="UTF-8"';
            $sMessage .= 'Content-Transfer-Encoding: 8bit';
            $sMessage .= "
            <html>
                <head>
                    <title>Mot de passe perdu</title>
                </head>
                <body>
                    <p>Pour réinitialiser votre mot de passe, veuillez cliquer sur le lien suivant :</p>
                    <a href='" . $sUrl . "'>Réinitialiser mon mot de passe.</a>
                    <p>Ce lien est valide jusqu'au </p>
                </body>
            </html>
            ";

            $sSujet = 'Demande de réinitialisation du mot de passe.';

            $headers  = 'MIME-Version: 1.0' . '\r\n';
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . '\r\n';
            $headers .= 'To: ' . $aDonneesUser['username'] . ' ' . $sUserEmail  . '\r\n';
            $headers .= 'From: no reply no-reply@noreply.com\r\n';

            $oMailer = new Mailer();
            $oMailer->sendMail($sUserEmail, $sSujet, $sMessage, $headers);

            $this->addFlashMessage(
                "Un lien de réinitialisation de mot de passe vous a été envoyé par mail à l'adresse $sUserEmail",
                false
            );

            return $this->redirect();
        }

        return $this->getView('password');
    }

    /**
     * @throws ModelException
     */
    public function resetPasswordAction()
    {
        if (!empty($_GET['param'])) {

            $oModelUser = new UserModel();

            $token = htmlspecialchars(trim($_GET['param']));
            $aResetPassword = $oModelUser->getResetPasswordByToken($token);

            if (empty($aResetPassword)) {
                $this->addFlashMessage("Le lien saisi n'est pas valide.");

                return $this->redirect();
            }

            $_SESSION['reset-password'] = array(
                'email' => $aResetPassword['user_email'],
                'id' => $aResetPassword['id']
            );
        }

        return $this->redirect('password', 'changepassword');
    }

    public function changeAction()
    {
        if (!SessionManager::isAuth()) {
            return $this->redirect();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['password']) || !isset($_POST['change-password']) || !isset($_POST['confirm-password'])) {
                $this->addFlashMessage('Vous devez remplir tous les champs.');

                return $this->redirect('password' ,'change');
            }

            $sPassword = (string) htmlspecialchars(trim($_POST['password']));
            $sChangePassword = (string) htmlspecialchars(trim($_POST['change-password']));
            $sConfirmPassword = (string) htmlspecialchars(trim($_POST['confirm-password']));
            $oPasswordValidator = new PasswordValidator();
            $bComparePassword = $oPasswordValidator->comparePassword($sChangePassword, $sConfirmPassword, $sPassword);

            if (!$bComparePassword) {
                $this->addFlashMessage($oPasswordValidator->errorMessage);

                return $this->redirect('password', 'change');
            }

            $sHashPassword = password_hash($sConfirmPassword, PASSWORD_BCRYPT);
            $oModelUser = new UserModel();

            $oModelUser->updatePasswordByUserId($sHashPassword, $_SESSION['user']->getId());

            $this->addFlashMessage('Votre mot de passe a été modifié avec succès', false);
            $this->destroySessionValue('reset-password');

            return $this->redirect();
        }

        return $this->getView('password', 'changepassword');
    }
}
