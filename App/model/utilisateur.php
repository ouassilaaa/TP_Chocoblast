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

    //METHODE : LES AUTRES

    //RECUPERER LE MAIL
    public function getUserByMail($bdd){

        try {
            //récuperer le mail
             $mail=$this ->getMail();
             //requête SELECT
             $req = $bdd->prepare('SELECT id_utilisateur, nom_utilisateur, prenom_utilisateur, image_utilisateur, password_utilisateur, mail_utilisateur, statut_utilisateur  
             FROM utilisateur WHERE mail_utilisateur = ?');
             //injecter le mail dans bindParam
             $req->bindParam(1, $mail, PDO::PARAM_STR);
             //exécuter la requête
             $req->execute(); 
             //récupérer réponses de la BDD
             $data = $req->fetchAll(PDO::FETCH_ASSOC);
             //retourner $data
             return $data; 

        }
        //gestion des erreurs (Exception)
        catch(Exception $e){
            die('Error: '.$e->getMessage());
        }   
    }

    //NREGISTRER UN UTILISATEUR EN BDD

    public function insertUSer($bdd) {
        try{
            //récupérer des paramètres
            $nom=$this->getNom(); 
            $prenom=$this->getPrenom(); 
            $mail=$this->getMail(); 
            $password=$this->getPassword(); 
            $image=$this->getImage(); 
            $statut=$this->getStatut(); 
            $role=$this->getRole();  
            //préparation de la requête
            $req=  $bdd->prepare('INSERT INTO utilisateur(nom_utilisateur, prenom_utilisateur,mail_utilisateur,password_utilisateur, image_utilisateur, statut_utilisateur, id_role) 
            VALUES (?, ?, ?, ? , ? , ? , ?)');
            ///affectation des variables
            $req->bindParam(1, $nom, PDO::PARAM_STR);
            $req->bindParam(2, $prenom, PDO::PARAM_STR);
            $req->bindParam(3, $mail, PDO::PARAM_STR);
            $req->bindParam(4, $password, PDO::PARAM_STR);
            $req->bindParam(5, $image, PDO::PARAM_STR);
            $req->bindParam(6, $statut, PDO::PARAM_STR);
            $req->bindParam(7, $role, PDO::PARAM_STR);
            //exécution de la requête
            $req-> execute(); 
        }
        catch(Exception $e){
            die('Error: '.$e->getMessage());
        }

    }

    //MODIFIER LE STATUT USER

    public function activeUser($bdd){
        try{
            //récupération des paramètres
            $id=$this->getId(); 
            //préparation de la requête
            $req= $bdd -> prepare ('UPDATE utilisateur SET id_utilisateur = ? where id_utilisateur = ?');


        }
        catch(Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
}



?>