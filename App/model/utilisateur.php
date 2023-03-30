<?php

class Utilisateur {

    //PROPRIETES

    private $id; 
    private $nom; 
    private $prenom; 
    private $mail; 
    private $password; 
    private $image; 
    private $statut; 
    private $role; 

    //CONSTRUCTEUR

    function __construct($nom, $prenom, $mail, $password)
    {
        $this-> nom = $nom; 
        $this-> prenom = $prenom; 
        $this-> mail = $mail; 
        $this-> password = $password; 

    }

    //METHODES : GETTER ET SETTER

    public function getId(){
        return $this -> id; 
    }

    public function getNom(){
        return $this -> nom; 
    }
    
    public function getPrenom(){
        return $this -> prenom; 
    }

    public function getMail(){
        return $this -> mail; 
    } 

    public function getPassword(){
        return $this -> password; 
    }

    public function getImage(){
        return $this -> image; 
    }

    public function getStatut(){
        return $this -> statut; 
    }

    public function getRole(){
        return $this -> role; 
    }

    protected function setNom($nom){
        $this -> nom = $nom; 
    }

    protected function setPrenom($prenom){
        $this -> prenom = $prenom; 
    }

    protected function setMail($mail){
        $this -> mail = $mail; 
    }

    protected function setPasseword($password) {
        $this -> password = $password;
    }

    protected function setImage($image){
        $this -> image = $image;

    }

    protected function setStatut($statut){
        $this -> statut = $statut; 
    }

    protected function setRole($role){
        $this -> role = $role; 
    }

 
}





?>