<?php


namespace Ozyris\Service;


use Ozyris\Exception\ModelException;
use Ozyris\Model\ProfileModel;

class Profile
{

    protected $profileModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
    }

    /**
     * @param int $id
     * @param int $uid
     * @return bool
     * @throws ModelException
     */
    public function createProfileByUserId(int $id, $uid = null):bool
    {
        $iUserId = (int) $id;

        if ($uid) {
            $iUid = (int) $uid;

            if ($iUserId && $iUid > 0 && strlen($iUid) === 9) {
                return $this->profileModel->insertProfile($iUserId, $iUid);
            } else {
                return false;
            }

        } elseif ($iUserId) {
            return $this->profileModel->insertProfile($iUserId);
        } else {
            return false;
        }
    }

    /**
     * @param int $id
     * @return array
     * @throws ModelException
     */
    public function getProfileByUserId(int $id):array
    {
        $userId = (int) $id;

        if ($userId) {
            return $this->profileModel->selectProfileByUserId($userId);
        } else {
            return [];
        }
    }

    /**
     * @param int $userId
     * @param int $sharingBoxPermission
     * @param int $sharingUidPermission
     * @param int $uid
     * @return bool
     */
    public function updateProfile(int $userId, int $sharingBoxPermission, int $sharingUidPermission, $uid):bool
    {
        if (!is_int($userId) || !$userId || !is_int($sharingBoxPermission) || $sharingBoxPermission > 1 || $sharingBoxPermission < 0
            || !is_int($sharingUidPermission) || $sharingUidPermission > 1 || $sharingUidPermission < 0
            || (is_int($uid) && (strlen($uid) !== 9 || $uid < 0))) {
            return false;
        }

        return $this->profileModel->updateProfile($userId, $sharingBoxPermission, $sharingUidPermission, $uid);
    }
}