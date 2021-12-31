<?php


namespace Ozyris\Model;


use Ozyris\Exception\ModelException;

class BoxesModel extends AbstractModel
{

    /**
     * @param int $userId
     * @param int $characterId
     * @param int $owned
     * @param int $constellations
     * @param bool $update
     * @return bool
     * @throws ModelException
     */
    public function updateCharacter(int $userId, int $characterId, int $owned, int $constellations, bool $update = false):bool
    {
        if ($update) {
            $query = 'UPDATE characters SET owned = :owned, constellations = :constellations WHERE user_id = :userId 
AND character_id = :characterId';
        } else {
            $query = 'INSERT INTO characters (user_id, character_id, owned, constellations) 
VALUES (:userId, :characterId, :owned, :constellations)';
        }

        $stmt = $this->bdd->prepare($query);
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':characterId', $characterId);
        $stmt->bindParam(':owned', $owned);
        $stmt->bindParam(':constellations', $constellations);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel updateCharacter : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

    /**
     * @param int $userId
     * @param int $weaponId
     * @param int $refinement
     * @param int $elevation
     * @param int $level
     * @return bool
     * @throws ModelException
     */
    public function insertWeapon(int $userId, int $weaponId, int $refinement, int $elevation, int $level):bool
    {
        $query = 'INSERT INTO weapons (user_id, weaponId, refinement, elevation, weapon_level)
VALUES (:userId, :weaponId, :refinement, :elevation, :level)';
        $stmt = $this->bdd->prepare($query);

        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':weaponId', $weaponId);
        $stmt->bindParam(':refinement', $refinement);
        $stmt->bindParam(':elevation', $elevation);
        $stmt->bindParam(':level', $level);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel insertWeapon : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

    // @TODO : implémenter méthode insertArtifacts

    /**
     * @param int $id
     * @return array
     * @throws ModelException
     */
    public function selectBoxByUserId(int $id):array
    {
        $query = 'SELECT * FROM boxes WHERE user_id = :id';
        $stmt = $this->bdd->prepare($query);

        $stmt->bindParam(':id', $id);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel selectBoxByUserId : ' . $aSqlError[2]);
        }

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @return int
     * @throws ModelException
     */
    public function selectBoxIdByUserId(int $id):int
    {
        $query = 'SELECT id FROM boxes WHERE user_id = :id';
        $stmt = $this->bdd->prepare($query);

        $stmt->bindParam(':id', $id);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel selectBoxIdByUserId : ' . $aSqlError[2]);
        }

        return $stmt->fetchColumn();
    }

    /**
     * @param int $id
     * @return array
     * @throws ModelException
     */
    public function selectCharactersByUserId(int $id):array
    {
        $query = 'SELECT * FROM characters WHERE user_id = :id';
        $stmt = $this->bdd->prepare($query);

        $stmt->bindParam(':id', $id);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel selectCharactersByUserId : ' . $aSqlError[2]);
        }

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @return array
     * @throws ModelException
     */
    public function selectWeaponsByUserId(int $id):array
    {
        $query = 'SELECT * FROM weapons WHERE user_id = :id';
        $stmt = $this->bdd->prepare($query);

        $stmt->bindParam(':id', $id);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel selectWeaponsByUserId : ' . $aSqlError[2]);
        }

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @return array
     * @throws ModelException
     */
    public function selectArtifactsByUserId(int $id):array
    {
        $query = 'SELECT * FROM artifacts WHERE user_id = :id';
        $stmt = $this->bdd->prepare($query);

        $stmt->bindParam(':id', $id);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel selectArtifactsByUserId : ' . $aSqlError[2]);
        }

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @param int $userId
     * @return bool
     * @throws ModelException
     */
    public function deleteBoxByUserId($userId):bool
    {
        $sql = 'DELETE FROM boxes WHERE user_id = :userId';
        $stmt = $this->bdd->prepare($sql);

        $stmt->bindParam(':userId', $userId);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel deleteBoxesByUserId : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

    /**
     * @param int $userId
     * @return bool
     * @throws ModelException
     */
    public function deleteAllCharactersByUserId($userId):bool
    {
        $sql = 'DELETE FROM characters WHERE user_id = :userId';
        $stmt = $this->bdd->prepare($sql);

        $stmt->bindParam(':userId', $userId);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel deleteAllCharactersByUserId : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

    /**
     * @param int $userId
     * @return bool
     * @throws ModelException
     */
    public function deleteAllWeaponsByUserId($userId):bool
    {
        $sql = 'DELETE FROM weapons WHERE user_id = :userId';
        $stmt = $this->bdd->prepare($sql);

        $stmt->bindParam(':userId', $userId);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel deleteAllWeaponsByUserId : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

    /**
     * @param int $userId
     * @return bool
     * @throws ModelException
     */
    public function deleteAllArtifactsByUserId(int $userId):bool
    {
        $sql = 'DELETE FROM artifacts WHERE user_id = :userId';
        $stmt = $this->bdd->prepare($sql);

        $stmt->bindParam(':userId', $userId);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel deleteAllArtifactsByUserId : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

    /**
     * @param int $userId
     * @param int $artifactId
     * @return bool
     * @throws ModelException
     */
    public function deleteArtifact(int $userId, int $artifactId):bool
    {
        $sql = 'DELETE FROM artifacts WHERE user_id = :userId AND artifact_id = :artifactId';
        $stmt = $this->bdd->prepare($sql);

        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':artifactId', $artifactId);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel deleteArtifact : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

}