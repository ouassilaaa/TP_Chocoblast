<?php
class Connexion {
    public function __construct() {

    }

    public static function connexion() {
        return new PDO('mysql:host=localhost;dbname=chocoblast', 'root','',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }
}
?>