<?php

namespace Models;

/**
 * Une classe PHP est une entitée regroupant
 * par thème des variables appelée "propriétés",
 * et des fonctions appelées "méthodes".
 */
class Ecole
{

    /* --
        Déclaration des propriétés de notre classe Ecole.
        "private" nous permet d'interdire l'accès direct
        aux propriétés par les objets. En "private" les
        propriétés sont accessibles UNIQUEMENT depuis
        l'intérieur de la classe.
    -- */
    private $nom;

    private $directeur;

    private $type;

    private $adresse;

    private $classes = [];

    /**
     * Alors, pour permettre l'attribution
     * de valeurs à mes propriétés, je vais
     * mettre en place un CONSTRUCTEUR.
     * ---------------------------------
     * L'objectif du constructeur c'est
     * de remplir / d'initialiser / hydrater
     * les propriétés de la classe avec des valeurs.
     * IL DOIT ETRE ACCESSIBLE PUBLIQUEMENT !!!
     * ---------------------------------
     * Cette fonction est executée AUTOMATIQUEMENT
     * par PHP au moment de l'instanciation de la classe.
     */
    public function __construct($nom, $directeur)
    {
        $this->nom = $nom;
        $this->directeur = $directeur;
    }

    /*  -- ~ ° ~ --| Getters |-- ~ ° ~ -- */
    public function getNom()
    {
        return $this->nom;
    }

    public function getDirecteur()
    {
        return $this->directeur;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function getClasses()
    {
        return $this->classes;
    }

    /*  -- ~ ° ~ --| Setters |-- ~ ° ~ -- */

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setDirecteur($directeur)
    {
        $this->directeur = $directeur;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function ajouterUneClasse(Classe $classe)
    {
        if (!in_array($classe, $this->classes)) {
            $this->classes[] = $classe;
        }
    }

}
