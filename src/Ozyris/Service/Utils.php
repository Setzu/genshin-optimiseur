<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 01/06/16
 * Time: 14:36
 */

namespace Ozyris\Service;

use DateTime;

class Utils
{

    /**
     * @param string $date
     * @return string
     */
    public static function formatDayMonthToEU($date = '')
    {
        if (empty($date)) {
            return date('d/m/Y H:i:s');
        }

        $oDate = DateTime::createFromFormat('Y-m-d H:i:s', $date);

        if (!$oDate) {
            return $date;
        }

        return $oDate->format('d/m H:i');
    }

    /**
     * @param string $date
     * @return string
     */
    public static function formatDateToEu($date = '')
    {
        if (empty($date)) {
            return date('d/m/Y H:i:s');
        }

        $oDate = DateTime::createFromFormat('Y-m-d H:i:s', $date);

        if (!$oDate) {
            return $date;
        }

        return $oDate->format('d/m/Y H:i');
    }

    /**
     * Execute un var_dump de value
     *
     * @param mixed $value
     * @param bool $die
     */
    public static function vdd($value, $die = true)
    {
        echo '<pre>'; var_dump($value);
        if ($die) {
            die('Fin.');
        }
        echo '</pre>';
    }

    /**
     * Liste toutes les méthodes d'une classe
     *
     * @param object $classname
     */
    public static function getAllClassMethod($classname)
    {
        $class_methods = get_class_methods($classname);
        echo '<pre>';
        foreach ($class_methods as $method_name)
        {
            echo $method_name . '<br/>';
        }
        die('Fin.');
    }

}