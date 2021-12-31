<?php


namespace Ozyris\Controller;


use Ozyris\Exception\ControllerException;

class WeaponsController extends AbstractController
{

    public function indexAction()
    {
        return $this->getView('weapons');
    }

    /**
     * @return WeaponsController|null
     * @throws ControllerException
     */
    public function weaponsDatasAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['weaponType'])) {
            $iWeaponType = (int) htmlspecialchars(trim($_POST['weaponType']));
            $aMetaDatas = $this->getConfig('metadatas');

            if (!array_key_exists($iWeaponType, $aMetaDatas['weaponTypeConfigFiles'])) {
                return null;
            }

            $sWeaponType = $aMetaDatas['weaponTypeConfigFiles'][$iWeaponType];
            $aWeaponsList = $this->getConfig($sWeaponType);

            $this->setVariables([
                'aWeaponsList' => $aWeaponsList,
                'aMetaDatas' => $aMetaDatas,
            ]);

            return $this->getView('weapons', 'weapons', false);
        }

        return null;
    }
}