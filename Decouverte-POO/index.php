<?php

# Importation de notre classe Ecole
use Models\Classe;
use Models\Ecole;
use Models\Eleve;

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
        $nom
        <small>{$ecole->getDirecteur()}</small>
     </h1>";
echo "<h1>{$ecole2->getNom()}</h1>";

$ecole2->setNom('D.S.P');
echo "<h1>{$ecole2->getNom()}</h1>";

# Création d'objets élèves
$eleve1 = new Eleve('Patrick', 'DELVOYE', 21);
$eleve2 = new Eleve('Madjoula', 'TOURE', 24);
$eleve3 = new Eleve('William', 'DEGHESELLE', 21);
$eleve4 = new Eleve('Fouad', 'MOUTAIROU', 21);

# Création d'objets classes
$classeFront = new Classe('Front');
$classeBack = new Classe('Back');
$classeFullstack = new Classe('Fullstack');

# Comment faire pour affecter des élèves a une classe, et des classes à une école ?

$classeFullstack->ajouterUnEleve($eleve1);
$classeFullstack->ajouterUnEleve($eleve2);
$classeFront->ajouterUnEleve($eleve3);
$classeFront->ajouterUnEleve($eleve4);

$ecole->ajouterUneClasse($classeFront);
$ecole->ajouterUneClasse($classeBack);
$ecole2->ajouterUneClasse($classeFullstack);

echo '<pre>';
print_r( $ecole );
print_r( $ecole2 );
echo '</pre>';