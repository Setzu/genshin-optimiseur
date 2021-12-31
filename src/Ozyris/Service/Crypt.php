<?php


namespace Ozyris\Service;


class Crypt
{
    const CIPHER = 'aes-128-cbc';
    const SECRET_PASS_PHASE = 'Une phrase secrète pour les gouverner toutes';
    const OPTION = 0;
    const IV = 1234567890123456;

    protected $hash;
    protected $iv;

    public function __construct(){}

    /**
     * @param string $stringToEncrypt
     */
    public function encrypt($stringToEncrypt)
    {
        if (is_string($stringToEncrypt) || !empty($stringToEncrypt)) {
            $this->setHash(openssl_encrypt($stringToEncrypt, self::CIPHER, self::SECRET_PASS_PHASE, self::OPTION, self::IV));
        }
    }

    /**
     * @param string $stringToDecrypt
     * @return false|string
     */
    public function decrypt($stringToDecrypt)
    {
        if (is_string($stringToDecrypt) || !empty($stringToDecrypt)) {
            return openssl_decrypt($stringToDecrypt, self::CIPHER, self::SECRET_PASS_PHASE, self::OPTION, self::IV);
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param mixed $hash
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
    }

    /**
     * @return false|string
     */
    public function getIv()
    {
        return $this->iv;
    }

    /**
     * @param false|string $iv
     */
    public function setIv($iv)
    {
        $this->iv = $iv;
    }


}