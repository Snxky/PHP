<?php

class Utilisateur {

    public static $annee = 2024;
    protected $nom;
    protected $prenom;

    public function __construct($nom,$prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    //Encapsulation
    //Getters
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    //Setters
    public function setNom($nom){
        return $this->nom=$nom;
    }
    public function setPrenom($prenom){
        return $this->prenom=$prenom;
    }

    public function presentez_vous(){
        return 'I am'.' '.$this->nom;
    }
}

class Etudiant extends Utilisateur{
    public $branche;
    public $groupe;

    public function __construct($nom,$prenom,$branche,$groupe){
        parent::__construct($nom,$prenom);
        $this->branche = $branche;
        $this->groupe = $groupe;
    }

    public function presentez_vous(){
        return parent::presentez_vous().' and I am a student';
    }

}

$utilisateur1 = new Utilisateur("Adibia","Mo");
$utilisateur1->setNom("Ahmed");
//$utilisateur1->prenom = "Mo";

$utilisateur2 = new Utilisateur("Hanafi","Zaak");
//$utilisateur2->nom = "Hanafi";
//$utilisateur2->prenom = "Zaak";

$etudiant1 = new Etudiant("Idryssi","Aymen","DD",105);


var_dump($utilisateur1);
echo '<pre>';
var_dump($utilisateur2);
echo '<pre>';
var_dump($etudiant1);
echo($etudiant1->presentez_vous());
echo '<pre>';
var_dump(Utilisateur::$annee);
echo '<pre>';

