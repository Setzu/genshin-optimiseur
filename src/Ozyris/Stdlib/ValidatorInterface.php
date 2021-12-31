<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 30/05/16
 * Time: 15:45
 */

namespace Ozyris\Stdlib;

interface ValidatorInterface
{

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value):bool;

}