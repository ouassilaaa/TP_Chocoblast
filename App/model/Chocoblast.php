<?php
include'./App/Manager/ManagerChocoblast.php';

class Chocoblast{

    //PROPRIETES

    private $slogan; 
    private $date_chocoblast; 
    private $cible_chocoblast; 
    private $auteur_chocoblast;

    //CONSTRUCTEUR

    function __construct($slogan,$date_chocoblast,$cible_chocoblast,$auteur_chocoblast)
    {
        $this-> slogan= $slogan; 
        $this -> date_chocoblast = $date_chocoblast; 
        $this -> auteur_chocoblast = $auteur_chocoblast;
        $this -> cible_chocoblast = $cible_chocoblast; 

    }

    //METHODE GETTER SETTER 

    public function getSlogan() {
        return $this -> slogan; 
    }

    public function getDate() {
        return $this -> date_chocoblast; 
    }

    public function getCibleChocoblast(){
        return $this -> cible_chocoblast;
    }

    public function getAuteur() {
        return $this -> auteur_chocoblast;
    }

    protected function setSlogan($slogan){
         $this -> slogan = $slogan;
    }

    protected function setDateChocoblast($date_chocoblast){
         $this -> date_chocoblast =$date_chocoblast;
    }

    protected function setCibleChocoblast($cible_chocoblast){
         $this -> cible_chocoblast= $cible_chocoblast;
    }

    protected function setAuteur_chocoblast($auteur_chocoblast){
         $this -> auteur_chocoblast= $auteur_chocoblast;
    }

}





?>

