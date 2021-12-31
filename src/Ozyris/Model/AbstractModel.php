<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 26/05/16
 * Time: 16:16
 */

namespace Ozyris\Model;

use Ozyris\Exception\ModelException;

abstract class AbstractModel
{

    public $bdd;

    /**
     * ConnectionPDO constructor.
     * @throws ModelException
     */
    public function __construct()
    {
        if (!file_exists(__DIR__ . '/../../../config/db.conf.php')) {
            throw new ModelException('AbstractModel : Fichier de configuration de base de données manquant.');
        }

        $aBddConfigFile = require (__DIR__ . '/../../../config/db.conf.php');

        if (!is_array($aBddConfigFile) || empty($aBddConfigFile)) {
            throw new ModelException('AbstractModel : Le fichier de configuration de base de données est vide.');
        } elseif (!array_key_exists('dbname', $aBddConfigFile) || !is_string($aBddConfigFile['dbname']) || empty($aBddConfigFile['dbname'])) {
            throw new ModelException('AbstractModel : La clé dbname n\'est pas présente dans le fichier de configuration de base de données.');
        } elseif (!array_key_exists('host', $aBddConfigFile) || !is_string($aBddConfigFile['host']) || empty($aBddConfigFile['host'])) {
            throw new ModelException('AbstractModel : La clé host n\'est pas présente dans le fichier de configuration de base de données.');
        } elseif (!array_key_exists('user', $aBddConfigFile) || !is_string($aBddConfigFile['user']) || empty($aBddConfigFile['user'])) {
            throw new ModelException('AbstractModel : La clé user n\'est pas présente dans le fichier de configuration de base de données.');
        } elseif (!array_key_exists('password', $aBddConfigFile) || !is_string($aBddConfigFile['password']) || empty($aBddConfigFile['password'])) {
            throw new ModelException('AbstractModel : La clé password n\'est pas présente dans le fichier de configuration de base de données.');
        }

        $dsn = 'mysql:dbname=' . $aBddConfigFile['dbname'] . ';host=' . $aBddConfigFile['host'];

        $this->bdd = new \PDO($dsn, $aBddConfigFile['user'], $aBddConfigFile['password']);

        if (!$this->bdd) {
            throw new ModelException('AbstractModel : Connexion à la base de données impossible.');
        }
    }
}
