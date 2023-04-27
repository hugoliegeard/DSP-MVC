<?php

# Importation de notre classe Ecole
require_once './Models/Ecole.php';

# Importation de notre classe Classe
require_once './Models/Classe.php';

# Importation de notre classe Eleve
require_once './Models/Eleve.php';

/* --
    Création d'une instance de la classe Ecole.
    Ici, notre variable $ecole est un objet de
    la classe Ecole. Elle à accès à l'ensemble
    des propriétés et méthodes qui la compose.
-- */
//$ecole = new Ecole();
//$ecole->nom = "Institut F2i";
//$ecole->adresse = "22 rue des vignerons 92960 Vincennes";
//$ecole->type= "CFA";
//$ecole->directeur = "Chantal BERDAA";
//
//$ecole2 = new Ecole();
//$ecole2->nom = "Digital School of Paris";
//$ecole2->adresse = "22 rue des vignerons 92960 Vincennes";
//$ecole2->type= "CFA";
//$ecole2->directeur = "Chantal BERDAA";

$ecole = new Ecole('Institut F2i', 'Chantal BERDAA');
$ecole2 = new Ecole('Digital School of Paris', 'Chantal BERDAA');

echo '<pre>';
print_r( $ecole );
print_r( $ecole2 );
echo '</pre>';

$nom = $ecole->getNom();
echo "<h1>
        {$ecole->getNom()}
        <small>{$ecole->getDirecteur()}</small>
     </h1>";
echo "<h1>{$ecole2->getNom()}</h1>";

$ecole2->setNom('D.S.P');

echo "<h1>{$ecole2->getNom()}</h1>";
