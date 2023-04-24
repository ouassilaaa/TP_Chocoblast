<?php
include './App/Manager/ManagerRoles.php'; 

class Roles{

    // PROPRIETES
    private $nom_role; 

    // CONSTRUCTEUR

    function __construct($nom_role){

        $this -> nom_role = $nom_role; 

    }

    //GETTER SETTER 

    public function getNomRole(){
        return $this -> nom_role;
    }

    protected function setNomRole($nom_role){
        $this -> nom_role = $nom_role; 
    }


}

?>