<?php

/**
 * $_GET : Permet de passer des paramètres dans l'URL
 * de mon navigateur. Elle est très utile pour conserver
 * ou partager les résultats d'une recherche.
 */

echo '<pre>';
print_r( $_GET );
echo '</pre>';

$controller = $_GET['controller'] ?? 'default';
$action     = $_GET['action'] ?? 'home';

# Importation manuelle des controllers
//require_once '../src/Controller/DefaultController.php';
//require_once '../src/Controller/UserController.php';
//require_once '../src/Controller/AdminController.php';

# Importation AUTOMATIQUE des controllers
spl_autoload_register(function($className) {
    print_r("Chargement de : $className<br>");
    require_once "../src/Controller/$className.php";
});

# Déclaration des controllers
$defaultCtrl = new DefaultController();
$userCtrl = new UserController();
$adminCtrl = new AdminController();

if ($controller === 'default' && $action === 'home') {
    $defaultCtrl->home();
}

if ($controller === 'default' && $action === 'contact') {
    $defaultCtrl->contact();
}

if ($controller === 'admin' && $action === 'dashboard') {
    $adminCtrl->dashboard();
}

if ($controller === 'user' && $action === 'register') {
    $userCtrl->register();
}

if ($controller === 'user' && $action === 'login') {
    $userCtrl->login();
}