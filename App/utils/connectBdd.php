<?php


class BddConnect{

    
    public static function connexion(){

        //import du fichier de configuration
        include './env.php';
        return new PDO("mysql:host=$host;dbname=$database", $login, $password, 
    array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));

    }
}
   
?>