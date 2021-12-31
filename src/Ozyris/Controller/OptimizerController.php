<?php


namespace Ozyris\Controller;


use Ozyris\Exception\ControllerException;

class OptimizerController extends AbstractController
{

    const SELECT = 'select';
    const ELEVATION = 'elevation';
    const LEVEL = 'level';

    /**
     * @return mixed|OptimizerController
     * @throws ControllerException
     */
    public function indexAction()
    {
        $aMetadatas = $this->getConfig('metadatas');
        $aCharacters = $this->getConfig('characters');
        $aArtifacts = $this->getConfig('artifacts');

        $this->setVariables([
            'aMetaDatas' => $aMetadatas,
            'aArtifacts' => $aArtifacts,
            'aCharacters' => $aCharacters['characters'],
        ]);

        return $this->getView('optimizer');
    }

    /**
     * Ajax method /js/ajax/optimizer.js
     */
    public function charactersInfosAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['elevation']) && isset($_POST['characterId'])) {

            $iElevation = (int) htmlspecialchars(trim($_POST['elevation']));
            $iCharacterId = (int) htmlspecialchars(trim($_POST['characterId']));
            $aMetadatas = $this->getConfig('metadatas');
            $aCharacters = $this->getConfig('characters');

            if (!array_key_exists($iCharacterId, $aCharacters['characters']) ||
                !array_key_exists($iElevation, $aCharacters['level'])) {
                echo json_encode([]);
                exit;
            }

            $aCharacters['characters'][$iCharacterId]['subStatName'] =
                $aMetadatas['attributs'][$aCharacters['characters'][$iCharacterId]['subStatId']];
            $aCharacters['characters'][$iCharacterId]['level'] = $aCharacters['level'][$iElevation];

            echo json_encode($aCharacters['characters'][$iCharacterId]);
            exit;
        } else {
            echo json_encode([]);
            exit;
        }
    }

    /**
     * Ajax method /js/ajax/optimizer.js
     */
    public function weaponTypeAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['weaponType'])) {

            $aMetaDatas = $this->getConfig('metadatas');
            $iWeaponType = (int) htmlspecialchars(trim($_POST['weaponType']));

            if (!array_key_exists($iWeaponType, $aMetaDatas['weaponTypeConfigFiles'])) {
                echo json_encode([]);
                exit;
            }

            echo json_encode($this->getConfig($aMetaDatas['weaponTypeConfigFiles'][$iWeaponType]));
            exit;
        } else {
            echo json_encode([]);
            exit;
        }
    }

    /**
     * Ajax method /js/ajax/optimizer.js
     */
    public function weaponInfosAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['weaponName'])) {

            $iWeaponType = (int) htmlspecialchars(trim($_POST['weaponType']));
            $sWeaponName = htmlspecialchars($_POST['weaponName']);
            $aMetaDatas = $this->getConfig('metadatas');

            if (!array_key_exists($iWeaponType, $aMetaDatas['weaponTypeConfigFiles'])) {
                echo json_encode([]);
                exit;
            }

            $aWeaponsList = $this->getConfig($aMetaDatas['weaponTypeConfigFiles'][$iWeaponType]);

            if (array_key_exists('weaponElevation', $_POST)) {
                $iWeaponElevation = (int) htmlspecialchars(trim($_POST['weaponElevation']));
                $aWeaponsList[$sWeaponName]['level'] = $aWeaponsList[$sWeaponName]['level'][$iWeaponElevation];
            }

            // Ajout d'un contrôle car certaines armes n'ont pas de substatid
            if (array_key_exists('subStatId', $aWeaponsList[$sWeaponName])) {
                $aWeaponsList[$sWeaponName]['subStatName'] = $aMetaDatas['attributs'][$aWeaponsList[$sWeaponName]['subStatId']];
            }

            echo json_encode($aWeaponsList[$sWeaponName]);
            exit;
        } else {
            echo json_encode([]);
            exit;
        }
    }

    /**
     * Ajax method /js/ajax/optimizer.js
     */
    public function artifactMainStatValueAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['artifact']) && isset($_POST['level']) &&
            isset($_POST['mainStatId'])) {

            $sType = htmlspecialchars(trim($_POST['artifact']));
            $iLevel = (int) htmlspecialchars(trim($_POST['level']));
            $iMainStatId = (int) htmlspecialchars(trim($_POST['mainStatId']));
            $aArtifacts = $this->getConfig('artifacts');

            if (!array_key_exists($sType, $aArtifacts['artifacts']) || !array_key_exists($iMainStatId, $aArtifacts['mainStats'])
                || !array_key_exists($iLevel, $aArtifacts['mainStats'][$iMainStatId])) {
                echo json_encode([]);
                exit;
            }

            echo json_encode($aArtifacts['mainStats'][$iMainStatId][$iLevel]);
            exit;
        }
    }

    /**
     * Ajax method /js/ajax/optimizer.js
     */
    public function affixeValuesAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['attributeId']) && isset($_POST['level'])) {

            $iAttributeId = (int) htmlspecialchars(trim($_POST['attributeId']));
            $iLevel = (int) htmlspecialchars(trim($_POST['level']));
            $aArtifacts = $this->getConfig('artifacts');

            if (!array_key_exists($iAttributeId, $aArtifacts['affixesValues']) ||
                !array_key_exists($iLevel, $aArtifacts['affixesValues'][$iAttributeId])) {
                echo json_encode([]);
                exit;
            }

            echo json_encode([
                'min' => $aArtifacts['affixesValues'][$iAttributeId][$iLevel]['min'],
                'max' => $aArtifacts['affixesValues'][$iAttributeId][$iLevel]['max'],
                'step' => $aArtifacts['affixesValues'][$iAttributeId]['step']
            ]);
            exit;
        }
    }
}