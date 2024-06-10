<?php
   
class Utilisateur {
    // public static $annee = 20246548562058520 ;
    protected $nom;
    protected $prenom;

    public function __construct($nom, $prenom){
        $this ->nom = $nom;
        $this ->prenom = $prenom;
    }


//encapsulation
    //getters
    public function GetNom(){
        return $this-> nom;
    }
    public function GetPremom(){
        return $this-> prenom;
    }
    //setters
    public function setNOm($nom){
        return $this->nom =$nom;
    }
    public function setPrenom($prenom){
        return $this->prenom =$prenom;
    }

    
    public function Presentez_vous()  {
        return ' I am '. $this-> nom.' '. $this-> prenom;
        
    }
}
class Etudiants extends Utilisateur {
    public $branche ;
    public $groupe;

    public function __construct($nom, $prenom,$branche, $groupe){
        parent :: __construct($nom, $prenom);
        $this ->branche = $branche;
        $this ->groupe = $groupe;

    }
    public function Presentez_vous(){
        return parent::Presentez_vous().'and i am a student';
    }

}


$utilisateur1 = new Utilisateur("mohimi","yousra");
$utilisateur1  -> setNOm("ZAk") ;
// $utilisateur1 ->nom ="MOHIMI";
// $utilisateur1 ->prenom ="YOURSA";

$utilisateur2 = new Utilisateur("el idrysy","aymen");
// $utilisateur2 ->nom ="EL IDRYSY";
// $utilisateur2 ->prenom ="AYMEN"; 
$etudiants1 = new Etudiants("ayyyyyyyy","yousra","DD",105);

echo "<pre>";
var_dump($utilisateur1);
echo "<pre>";
var_dump($utilisateur2);
echo "<pre>";
var_dump($etudiants1);
echo "<pre>";
var_dump($etudiants1 -> Presentez_vous());


// var_dump(Utilisateur::$annee);

