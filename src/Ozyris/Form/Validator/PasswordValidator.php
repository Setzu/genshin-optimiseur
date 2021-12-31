<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 30/05/16
 * Time: 15:32
 */

namespace Ozyris\Form\Validator;

use Ozyris\Stdlib\ValidatorInterface;

class PasswordValidator implements ValidatorInterface
{
    const PASSWORD_PATTERN = '/^[a-zA-Z0-9]{8,255}$/';
    const IS_EMPTY = 'Veuillez saisir un mot de passe et le confirmer.';
    const PASSWORD_INVALID = 'Le mot de passe n\'est pas valide. Il doit contenir entre 8 et 50 caractères alphanumériques.';
    const DO_NOT_MATCH = 'Le mot de passe et la confirmation doivent être identiques.';
    const NOT_CHANGE = 'Le nouveau mot de passe doit être différent de l\'ancien.';

    public $errorMessage = '';

    /**
     * @param string $password
     * @return bool
     */
    public function isValid($password):bool
    {
        if (empty($password)) {
            $this->errorMessage = self::IS_EMPTY;

            return false;
        } elseif (!preg_match(self::PASSWORD_PATTERN, $password)) {
            $this->errorMessage = self::PASSWORD_INVALID;

            return false;
        }

        return true;
    }

    /**
     * @param string $password
     * @param string $confirmPassword
     * @param string $oldPassword
     * @return bool
     */
    public function comparePassword($password, $confirmPassword, $oldPassword = ''):bool
    {
        if (!empty($oldPassword)) {
            if (!$this->isValid($oldPassword)) {
                return false;
            } elseif ($oldPassword === $password) {
                $this->errorMessage = self::NOT_CHANGE;

                return false;
            }
        }

        if (!$this->isValid($password)) {
            return false;
        } elseif (!$this->isValid($confirmPassword)) {
            return false;
        } elseif ($password !== $confirmPassword) {
            $this->errorMessage = self::DO_NOT_MATCH;

            return false;
        }

        return true;
    }
}