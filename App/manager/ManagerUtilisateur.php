<?php
include'./App/model/utilisateur.php';

class ManagerUtilisateur extends Utilisateur {

    public function getUserByMail(){
        try {
            //récuperer le mail
             $mail=$this ->getMail();
             $bdd= BddConnect::connexion();
             //requête SELECT
             $req = $bdd->prepare('SELECT id_utilisateur, nom_utilisateur, prenom_utilisateur, image_utilisateur, password_utilisateur, mail_utilisateur, statut_utilisateur,  
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

    public function insertUser(){
        try{
            $bdd= BddConnect::connexion();
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

    public function activeUser(){
        try{
            $bdd= BddConnect::connexion();
            //récupération des paramètres
            $id=$this->getId(); 
            //préparation de la requête
            $req= $bdd -> prepare ('UPDATE utilisateur SET statut_utilisateur = 1 where id_utilisateur = ?');
            // affectation des variables
            $req -> bindParam(1, $id, PDO::PARAM_STR); 
            //exécution de la requête
            $req-> execute(); 

        }
        catch(Exception $e){
            die('Error: '.$e->getMessage());
        }
    }


}





?>