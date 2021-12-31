<?php


namespace Ozyris\Service;


use Ozyris\Exception\ModelException;
use Ozyris\Model\BoxesModel;

class Boxes
{

    const DEFAULT_VALUE_OWNED = 0;
    const DEFAULT_VALUE_CONSTELLATIONS = 0;
    const DEFAULT_VALUE_ELEVATION = 0;
    const DEFAULT_VALUE_LEVEL = 1;

    private $boxesModel;

    public function __construct()
    {
        $this->boxesModel = new BoxesModel();
    }

    // @TODO : à définir
    public function createBoxByUserId($id)
    {
        $iUserId = (int) $id;

        if ($id === 0) {
            return false;
        }
    }

    /**
     * @TODO : vérifier si le niveau correspond à l'élévation
     * @param int $userId
     * @param int $characterId
     * @param bool $update
     * @param int $owned
     * @param int $constellation
     * @return bool
     */
    public function updateCharacter(int $userId, int $characterId, bool $update = false,
                                    int $owned = self::DEFAULT_VALUE_OWNED,
                                    int $constellation = self::DEFAULT_VALUE_CONSTELLATIONS)
    {
        $iUserId = (int) $userId;
        $iCharacterId = (int) $characterId;
        $iOwned = (int) $owned;
        $iConstellation = (int) $constellation;

        if ($iUserId === 0 || $iCharacterId < 0 || $iOwned < 0 || $iOwned > 1 || $iConstellation < 0 || $iConstellation > 6) {
            return false;
        }

        if ($iOwned === 0) {
            return $this->boxesModel->updateCharacter($iUserId, $iCharacterId, $iOwned, self::DEFAULT_VALUE_CONSTELLATIONS, $update);
        }

        return $this->boxesModel->updateCharacter($iUserId, $iCharacterId, $iOwned, $iConstellation, $update);
    }

    /**
     * @param int $id
     * @return int
     * @throws ModelException
     */
    public function getBoxIdByUserId($id): int
    {
        $iUserId = (int) $id;

        if ($id === 0) {
            return 0;
        }

        return $this->boxesModel->selectBoxIdByUserId($iUserId);
    }

    /**
     * @param int $id
     * @return array
     * @throws ModelException
     */
    public function getCharactersByUserId($id):array
    {
        $iUserId = (int) $id;

        if ($iUserId === 0) {
            return [];
        }

        $aCharacters = $this->boxesModel->selectCharactersByUserId($iUserId);

        if (!is_array($aCharacters)) {
            return [];
        }

        return $aCharacters;
    }

    /**
     * @param int $id
     * @return array
     * @throws ModelException
     */
    public function getWeaponsByUserId($id):array
    {
        $iUserId = (int) $id;

        if ($iUserId === 0) {
            return [];
        }

        $aWeapons = $this->boxesModel->selectWeaponsByUserId($iUserId);

        if (!is_array($aWeapons)) {
            return [];
        }

        return $aWeapons;
    }

    /**
     * @param int $id
     * @return array
     * @throws ModelException
     */
    public function getArtifactsByUserId($id):array
    {
        $iUserId = (int) $id;

        if ($iUserId === 0) {
            return [];
        }

        $aArtifacts = $this->boxesModel->selectArtifactsByUserId($iUserId);

        if (!is_array($aArtifacts)) {
            return [];
        }

        return $aArtifacts;
    }

    /**
     * @param int $userId
     * @param int $characterId
     */
    public function deleteCharacter(int $userId, int $characterId)
    {
        $iUserId = (int) $userId;
        $iCharacterId = (int) $characterId;

        if ($iUserId === 0 || $iCharacterId === 0) {
            return false;
        }

        return $this->boxesModel->deleteCharacters($iUserId, $iCharacterId);
    }

    /**
     * @param array $aUserBox
     * @return float
     */
    public function calculTotalBoxCompletion($aUserBox = [])
    {
        $iUserCompletion = 0;

        if (count($aUserBox) > 0) {
            foreach ($aUserBox as $character) {
                if ($character['owned'] > 0) {
                    $iUserCompletion += $character['owned'] + $character['constellations'];
                }
            }

            return round(($iUserCompletion / (count($aUserBox) * 7)) * 100, 1);
        }

        return $iUserCompletion;
    }
}