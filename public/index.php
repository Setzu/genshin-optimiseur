<?php
/**
 * Created by PhpStorm.
 * User: david blanchard
 * Date: 26/05/16
 * Time: 12:07
 */

use Ozyris\Service\Router;

/**
 * Appel au fichier de conf et du layout dans un bloc try catch pour récupérer toutes les exceptions
 */
try {
    include_once __DIR__ . '/../config/config.php';
    $oRouter = new Router();
    $oRouter->run();
} catch(\Exception $e) { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-not-found">
                    <h3>
                        <!-- @TODO : à commenter sur environnement de dev -->
                        <!-- Une erreur s'est produite, merci de réessayer ultérieurement. -->
                        <!-- @TODO : à commenter sur environnement de prod -->
                        <?php echo 'Une exception a été générée : ' . $e->getMessage(); ?>
                    </h3>
                </div>
                <a href="" class="btn btn-danger btn-retour" style="float: right;">Retour</a>
            </div>
        </div>
    </div>
<?php } ?>