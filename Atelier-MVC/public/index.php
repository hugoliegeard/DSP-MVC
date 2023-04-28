<?php

# Importation de l'autoload du dossier vendor.
# Il permet d'importer automatiquement nos classes chargées via composer
require_once '../../vendor/autoload.php';

# Configuration du templating avec twig
$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

/**
 * $_GET : Permet de passer des paramètres dans l'URL
 * de mon navigateur. Elle est très utile pour conserver
 * ou partager les résultats d'une recherche.
 */

# echo '<pre>';
# print_r( $_GET );
# echo '</pre>';

# dump( $_GET )

# Récupération des paramètres de l'URL
$controller = isset($_GET['controller']) ? ucfirst($_GET['controller']).'Controller' : 'DefaultController';
$action     = $_GET['action'] ?? 'home';

# Importation manuelle des controllers
# require_once '../src/Controller/DefaultController.php';
# require_once '../src/Controller/UserController.php';
# require_once '../src/Controller/AdminController.php';

# Importation AUTOMATIQUE des controllers
spl_autoload_register(function($className) {
#     print_r("Chargement de : $className<br>");
    require_once "..".DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."Controller".DIRECTORY_SEPARATOR."$className.php";
});

# Appel AUTOMATIQUE du controller et de l'action !
# $objet = new $controller();
# $objet->$action();

# OU
# $objet = (new $controller())->$action();

# OU
$response = call_user_func_array([new $controller(), $action], []);
$response->send();

# Les variables dynamiques
# cf. https://www.php.net/manual/fr/language.variables.variable.php
# $$controller = new $controller();
# ${$controller}->$action();