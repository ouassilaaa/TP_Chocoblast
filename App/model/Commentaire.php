<?php
include'./App/Manager/ManagerCommentaire.php';

class Commentaire{

    // PROPRIETES

    private $id_commentaire; 
    private $note_commentaire; 
    private $text_commentaire; 
    private $statut_commentaire; 

    //CONSTRUCTEUR

    function __construct($note_commentaire,$text_commentaire, $statut_commentaire)
    {
        $this -> note_commentaire= $note_commentaire;
        $this -> text_commentaire = $text_commentaire;
        $this -> statut_commentaire = $statut_commentaire;
    }

    //GETTER ET SETTER

    public function getNoteCommentaire(){
        return $this -> note_commentaire;
    }
     

}

?>