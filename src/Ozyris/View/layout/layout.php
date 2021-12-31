<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 26/05/16
 * Time: 13:54
 */

use Ozyris\Service\SessionManager;
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/../css/layout.css">
    <link rel="stylesheet" type="text/css" href="/../css/media.css">
    <link rel="stylesheet" type="text/css" href="/../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="/../css/card.css">
    <link rel="stylesheet" type="text/css" href="/../css/characters.css">
    <link rel="stylesheet" type="text/css" href="/../css/tabs.css">
    <link rel="stylesheet" type="text/css" href="/../css/themes.css">
    <link rel="stylesheet" type="text/css" href="/../css/optimizer.css">

    <!-- JS -->
    <script type="text/javascript" src="/../js/plugins/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/../js/tabs.js"></script>
</head>

<body>

<header>
    <?php include_once (__DIR__ . '/header.php'); ?>
</header>

<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <?php SessionManager::flashMessages(); ?>
        </div>
    </div>
    <?php require_once $this->content; ?>
</div>

<footer>
    <?php include_once (__DIR__ . '/footer.php'); ?>
</footer>

</body>

</html>
