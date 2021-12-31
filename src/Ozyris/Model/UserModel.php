<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 26/05/16
 * Time: 14:52
 */

namespace Ozyris\Model;

use Ozyris\Exception\ModelException;
use Ozyris\Service\Users;

class UserModel extends AbstractModel
{

    const SQL_ERROR = "Une erreur s'est produite, veuillez réessayer ultérieurement.";

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param Users $aInfosUser
     * @return bool
     * @throws ModelException
     */
    public function insertUserByInfosUser(Users $aInfosUser)
    {
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $this->bdd->prepare($sql);

        $sUsername = $aInfosUser->getUsername();
        $sEmail = $aInfosUser->getEmail();
        $sPassword = $aInfosUser->getPassword();

        $stmt->bindParam(':username', $sUsername);
        $stmt->bindParam(':email', $sEmail);
        $stmt->bindParam(':password', $sPassword);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel insertUserByInfosUser : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

    /**
     * @param string $value
     * @return array
     * @throws ModelException
     */
    public function getUserByUsernameOrEmail($value)
    {
        $sql = "SELECT id, username, email, password FROM users WHERE username = :username OR email = :username";
        $stmt = $this->bdd->prepare($sql);
        $stmt->bindParam(':username', $value);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel getUserByUsernameOrEmail : ' . $aSqlError[2]);
        }

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * @param string $username
     * @return mixed
     * @throws \Exception
     */
    public function getIdUserByUsername($username)
    {
        $sql = "SELECT id FROM users WHERE username = :username";
        $stmt = $this->bdd->prepare($sql);
        $stmt->bindParam(':username', $username);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel getIdUserByUsername : ' . $aSqlError[2]);
        }

        return $stmt->fetchColumn();
    }

    /**
     * @param int $userId
     * @return mixed
     * @throws ModelException
     */
    public function getUsernameById(int $userId)
    {
        $sql = "SELECT username FROM users WHERE id = :id";
        $stmt = $this->bdd->prepare($sql);
        $stmt->bindParam(':id', $userId);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel getUsernameById : ' . $aSqlError[2]);
        }

        return $stmt->fetchColumn();
    }

    /**
     * @param string $value
     * @return bool
     * @throws \Exception
     */
    public function isUserAlreadyExist($value)
    {
        $sql = "SELECT COUNT(username) FROM users WHERE username = :username OR email = :email";
        $stmt = $this->bdd->prepare($sql);

        $sValue = (string) $value;
        $stmt->bindParam(':username', $sValue);
        $stmt->bindParam(':email', $sValue);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel isUserAlreadyExist : ' . $aSqlError[2]);
        }

        $iResult = $stmt->fetchColumn();
        $stmt->closeCursor();

        return (!empty($iResult));
    }

    /**
     * @param integer $id
     * @param string $useremail
     * @param string $token
     * @return bool
     * @throws ModelException
     */
    public function resetPasswordByToken($id, $useremail, $token)
    {
        $sql = "INSERT INTO password (user_id, user_email, token)
                VALUES (:user_id, :user_email, :token)";
        $stmt = $this->bdd->prepare($sql);
        $stmt->bindParam(':user_id', $id);
        $stmt->bindParam(':user_email', $useremail);
        $stmt->bindParam(':token', $token);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel resetPasswordByToken : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

    /**
     * @param string $token
     * @return array
     * @throws ModelException
     */
    public function getResetPasswordByToken($token)
    {
        $sql = "SELECT id, user_email FROM password WHERE token = :token AND validated != 1";
        $stmt = $this->bdd->prepare($sql);
        $token = (string) $token;
        $stmt->bindParam(':token', $token);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel getResetPasswordByToken : ' . $aSqlError[2]);
        }

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * @param string $email
     * @return bool
     * @throws ModelException
     */
    public function isAlreadyResetRequest($email):bool
    {
        $sql = "SELECT count(*) FROM password WHERE user_email = :email AND request_date >= :date AND validated = 0";
        $stmt = $this->bdd->prepare($sql);

        $date = date('Y-m-d H:i:s', strtotime('- 1 day'));
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':date', $date);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel isAlreadyResetRequest : ' . $aSqlError[2]);
        }

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $password
     * @param integer $userId
     * @return bool
     * @throws ModelException
     */
    public function updatePasswordByUserId($password, $userId)
    {
        $sql = "UPDATE users SET password = :password WHERE id = :userId";
        $stmt = $this->bdd->prepare($sql);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':userId', $userId);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel updatePasswordByUserId : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

    /**
     * @param string $password
     * @param string $email
     * @param integer|null $id
     * @return bool
     * @throws ModelException
     */
    public function updatePasswordByEmail($password, $email, $id = null)
    {
        $sql = "UPDATE users SET password = :password WHERE email = :email";
        $stmt = $this->bdd->prepare($sql);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel updatePasswordByEmail : ' . $aSqlError[2]);
        }

        if (!is_null($id)) {
            return $this->updateResetPasswordById($id);
        }

        return $stmt->closeCursor();
    }

    /**
     * @param integer $id
     * @return bool
     * @throws ModelException
     */
    public function updateResetPasswordById($id)
    {
        $sql = "UPDATE reset_password SET date_modification = NOW(), validated = 1 WHERE id = :id AND validated != 1";
        $stmt = $this->bdd->prepare($sql);
        $stmt->bindParam(':id', $id);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel updateResetPasswordById : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

    /**
     * @param int $userId
     * @return bool
     * @throws ModelException
     */
    public function updateConnectionByIdUser(int $userId)
    {
        $sql = "UPDATE users SET last_connection = NOW() WHERE id = :id";
        $stmt = $this->bdd->prepare($sql);
        $stmt->bindParam(':id', $userId);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel addConnection : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

    public function deleteUserById($userId)
    {
        $sql = 'DELETE FROM users WHERE id = :id';
        $stmt = $this->bdd->prepare($sql);
        $stmt->bindParam(':id', $userId);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('UserModel deleteUserById : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }
}