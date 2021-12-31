<?php


namespace Ozyris\Model;


use Ozyris\Exception\ModelException;

class ProfileModel extends AbstractModel
{

    /**
     * @param int $userId
     * @param int $uid
     * @param int $SharingUidPermission
     * @param int $SharingBoxPermission
     * @return bool
     * @throws ModelException
     */
    public function insertProfile(int $userId, $uid = null, int $SharingUidPermission = 1, int $SharingBoxPermission = 1):bool
    {
        $query = 'INSERT INTO profile (user_id, uid, sharing_uid_permission, sharing_box_permission)
VALUES (:userId, :uid, :sharingUidPermission, :sharingBoxPermission)';
        $stmt = $this->bdd->prepare($query);

        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':uid', $uid);
        $stmt->bindParam(':sharingUidPermission', $SharingUidPermission);
        $stmt->bindParam(':sharingBoxPermission', $SharingBoxPermission);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('BoxesModel insertProfile : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }

    /**
     * @param int $userId
     * @return array
     * @throws ModelException
     */
    public function selectProfileByUserId(int $userId):array
    {
        $query = 'SELECT uid, sharing_uid_permission, sharing_box_permission, username, email FROM profile as p 
    INNER JOIN users AS u ON p.user_id = u.id WHERE user_id = :id';
        $stmt = $this->bdd->prepare($query);

        $stmt->bindParam(':id', $userId);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('ProfileModel selectProfileByUserId : ' . $aSqlError[2]);
        }

        if (!$result = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            return [];
        }

        return $result;
    }

    public function updateProfile(int $userId, int $sharingBoxPermission, int $sharingUidPermission, $uid)
    {
        $query = 'UPDATE profile SET uid = :uid, sharing_uid_permission = :sharingUidPermission, 
        sharing_box_permission = :sharingBoxPermission WHERE user_id = :userId';

        $stmt = $this->bdd->prepare($query);
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':uid', $uid);
        $stmt->bindParam(':sharingBoxPermission', $sharingBoxPermission);
        $stmt->bindParam(':sharingUidPermission', $sharingUidPermission);

        if (!$stmt->execute()) {
            $aSqlError = $stmt->errorInfo();
            throw new ModelException('ProfileModel updateProfile : ' . $aSqlError[2]);
        }

        return $stmt->closeCursor();
    }
}