<?php

class ManagerCommentaire extends Commentaire {

    public function getCommentaireById(){
        try {
            //récuperer l
             $id=$this ->getIdCommentaire();
             $bdd= BddConnect::connexion();
             //requête SELECT
             $req = $bdd->prepare('SELECT id_commentaire, note_commentaire, text_commentaire, statut_commentaire,   
             FROM commentaire WHERE id_commentaire = ?');
             //injecter le mail dans bindParam
             $req->bindParam(1, $id_commentaire, PDO::PARAM_STR);
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

    public function insertCommentaire(){
        try{
            $bdd= BddConnect::connexion();

            //récupérer des paramètres
            $note_commentaire=$this->getNoteCommentaire();
            $text_commentaire = $this -> getTextCommentaire();
            $statut_commentaire = $this -> getStatutCommentaire();  
           
            //préparation de la requête
            $req=  $bdd->prepare('INSERT INTO commentaire(id_commentaire, note_commentaire, text_commentaire, statut_commentaire,) 
            VALUES (?, ?, ?, ? , ? , ? , ?)');
            ///affectation des variables
            $req->bindParam(1, $id_commentaire, PDO::PARAM_STR);
            $req->bindParam(2, $note_commentaire, PDO::PARAM_STR);
            $req->bindParam(3, $text_commentaire, PDO::PARAM_STR);
            $req->bindParam(4, $statut_commentaire, PDO::PARAM_STR);
            //exécution de la requête
            $req-> execute(); 
        }
        catch(Exception $e){
            die('Error: '.$e->getMessage());
        }

    }

    public function activeCommentaire(){
        try{
            $bdd= BddConnect::connexion();

            //récupération des paramètres
            $id=$this->getIdCommentaire(); 
            //préparation de la requête
            $req= $bdd -> prepare ('UPDATE commentaire SET statut_commentaire = 1 where id_utilisateur = ?');
            // affectation des variables
            $req -> bindParam(1, $id_commentaire, PDO::PARAM_STR); 
            //exécution de la requête
            $req-> execute(); 

        }
        catch(Exception $e){
            die('Error: '.$e->getMessage());
        }
    }


}





?>