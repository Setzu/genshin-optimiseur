<?php


namespace Ozyris\Controller;


use Ozyris\Exception\ControllerException;

class CharactersController extends AbstractController
{

    /**
     * @return mixed|CharactersController
     * @throws ControllerException
     */
    public function indexAction()
    {
        $aCharacters = $this->getConfig('characters');
        $aMetadatas = $this->getConfig('metadatas');

        $this->setVariables([
            'aCharacters' => $aCharacters['characters'],
            'aElements' => $aMetadatas['éléments'],
            'aArmes' => $aMetadatas['armes'],
            'aWeapons' => $aMetadatas['weapons']
        ]);

        return $this->getView('characters');
    }

    /**
     * @return CharactersController|null
     * @throws ControllerException
     */
    public function constellationsAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['characterId'])) {

            $aConstellations = $this->getConfig('constellations');
            $iCharacterId = (int) htmlspecialchars(trim($_POST['characterId']));

            if (!array_key_exists($iCharacterId, $aConstellations)) {
                return null;
            }

            $this->setVariables([
                'aConstellations' => $aConstellations[$iCharacterId]
            ]);

            return $this->getView('characters', 'constellations', false);
        } else {
            return null;
        }
    }

    /**
     * @return CharactersController|null
     * @throws ControllerException
     */
    public function skillsAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['characterId'])) {

            $aSkills = $this->getConfig('skills');
            $iCharacterId = (int) htmlspecialchars(trim($_POST['characterId']));

            if (!array_key_exists($iCharacterId, $aSkills)) {
                return null;
            }

            $this->setVariables([
                'aSkills' => $aSkills[$iCharacterId]
            ]);

            return $this->getView('characters', 'skills', false);
        } else {
            return null;
        }
    }

    public function materialsAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['characterId'])) {

            $aMaterials = $this->getConfig('materials');
            $aCharacters = $this->getConfig('characters');
            $iCharacterId = (int) htmlspecialchars(trim($_POST['characterId']));

            if (!array_key_exists($iCharacterId, $aCharacters['characters']) ||
                !array_key_exists('skill', $aCharacters['characters'][$iCharacterId]) ||
                !array_key_exists('materials', $aCharacters['characters'][$iCharacterId])) {
                return null;
            }

            $this->setVariables([
                'aMaterials' => $aMaterials,
                'aElevation' => $aCharacters['characters'][$iCharacterId]['materials'],
                'aSkillMaterials' => $aCharacters['characters'][$iCharacterId]['skill'],
            ]);

            return $this->getView('characters', 'materials', false);
        } else {
            return null;
        }

    }
}