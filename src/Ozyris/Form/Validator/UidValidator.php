<?php


namespace Ozyris\Form\Validator;


use Ozyris\Stdlib\ValidatorInterface;

class UidValidator implements ValidatorInterface
{
    const INVALID = "L'UID saisi n'est pas valide. Il doit comporter 9 chiffres.";

    public $errorMessage = '';

    /**
     * @param string $value
     * @return bool
     */
    public function isValid($value):bool
    {
        $iUid = (int) htmlspecialchars(trim($value));

        if (strlen($iUid) !== 9) {
            $this->errorMessage = self::INVALID;

            return false;
        }

        return true;
    }
}