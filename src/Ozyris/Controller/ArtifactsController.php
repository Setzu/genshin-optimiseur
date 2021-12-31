<?php


namespace Ozyris\Controller;


use Ozyris\Exception\ControllerException;

class ArtifactsController extends AbstractController
{

    public function indexAction()
    {
        return $this->getView('artifacts');
    }

    /**
     * @return ArtifactsController|null
     * @throws ControllerException
     */
    public function artifactsDatasAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rank'])) {
            $iRank = (int) htmlspecialchars(trim($_POST['rank']));
            $aArtifactsConf = $this->getConfig('artifacts');

            if (!array_key_exists($iRank, $aArtifactsConf['sets'])) {
                return null;
            }

            $this->setVariables([
                'aArtifactsList' => $aArtifactsConf['sets'][$iRank],
            ]);

            return $this->getView('artifacts', 'artifacts', false);
        }

        return null;
    }
}