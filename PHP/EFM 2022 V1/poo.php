<?php

class Vehicule{
    protected $nom;
    protected $color;
    static $prix;

    public function __construct($nom, $color){
      $this->nom = $nom;
      $this->color = $color;
      self::$prix =+ 1 ;
    }
}