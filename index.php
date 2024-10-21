<?php
// Inclure les fichiers nécessaires
require_once 'Router.php';
require_once 'Controllers/ContactController.php';

// Initialiser le routeur
$router = new Router();
$router->run();
