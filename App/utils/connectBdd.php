<?php

class BddConnect{

    function __construct()
    {
        
    }

    public function connexion(){

        $bdd = new PDO('mysql:host=localhost;dbname=chocoblast', 'root','', 
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }
}
   
?>