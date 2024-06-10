<?php
class Personne{
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom,$prenom,$age){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    // public function GetNom(){
    //     return $this-> nom;
    // }

    // public function setNOm($nom){
    //     return $this->nom =$nom;
    // }

    
//Getter
    public function __get($property){
    if(property_exists($this,$property)){
        return $this->$property;
    }
    return $this;
}
//Setter
public function __set($property,$value){
     if(property_exists($this,$property)){
         $this->$property = $value ;
     }
 }

 public function __toString(){
    return 'You called the object '.$this->nom.' '.$this->prenom;
 }

 public function __destruct(){
    echo 'destruct ran';
 }

}

$personne1 = new Personne('DIDAT','Ahmed',93);

// $personne1-> __set('nom','DON');

// $personne1-> __set('prenom','Good');

// $personne1->nom = 'ELKHADILI';

echo $personne1;

$peronne2 = new Personne('Aria','Stark',25);



?>