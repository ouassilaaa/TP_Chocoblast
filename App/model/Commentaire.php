<?php
include'./App/Manager/ManagerCommentaire.php';

class Commentaire{

    // PROPRIETES
    private $id_commentaire; 
    private $note_commentaire; 
    private $text_commentaire; 
    private $statut_commentaire; 

    //CONSTRUCTEUR

    function __construct($id_commentaire, $note_commentaire,$text_commentaire, $statut_commentaire)
    {
        $this -> id_commentaire = $id_commentaire;
        $this -> note_commentaire= $note_commentaire;
        $this -> text_commentaire = $text_commentaire;
        $this -> statut_commentaire = $statut_commentaire;
    }

    //GETTER ET SETTER

    public function getIdCommentaire(){
        return $this -> id_commentaire; 
    }

    public function getNoteCommentaire(){
        return $this -> note_commentaire;
    }

    public function getTextCommentaire(){
        return $this -> text_commentaire;
    }

    public function getStatutCommentaire(){
        return $this -> statut_commentaire;
    }

    protected function setIdCommentaire($id_commentaire){
        $this -> id_commentaire = $id_commentaire;
    }

    protected function setNoteCommentaire($note_commentaire){
        $this -> note_commentaire = $note_commentaire;
    }

    protected function setTextCommentaire($text_commentaire){
        $this -> text_commentaire = $text_commentaire;
    }

    protected function SetStatutCommentaire($statut_commentaire){
        $this -> statut_commentaire = $statut_commentaire;
    }  

    

}

?>