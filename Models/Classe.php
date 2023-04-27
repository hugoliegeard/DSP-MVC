<?php

class Classe
{
    private $nom;
    private $specialite;
    private $capacite;
    private $professeurPrincipal;

    /**
     * @param $nom
     * @param $specialite
     * @param $capacite
     * @param $professeurPrincipal
     */
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getSpecialite()
    {
        return $this->specialite;
    }

    public function getCapacite()
    {
        return $this->capacite;
    }

    public function getProfesseurPrincipal()
    {
        return $this->professeurPrincipal;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    }

    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;
    }

    public function setProfesseurPrincipal($professeurPrincipal)
    {
        $this->professeurPrincipal = $professeurPrincipal;
    }

}