<?php
include '.App/model/utilisateur.php'; 
include './App/utils/connectBdd.php'; 
include './App/view/view_add_user.php';

$message = "message d'information";

//tester si le formulaire est submit
if(isset($_POST['submit'])){
    //tester si les champs sont remplis
    if(!empty($_POST['nom_utilisateur']) AND !empty($_POST['prenom_utilisateur']) AND
    !empty($_POST['mail_utilisateur'])AND !empty($_POST['image_utilisateur']) AND !empty($_POST['password_utilisateur'])){
        //nettoyage nom via function
        $nom_utilisateur = Fonction::cleandata($_POST['nom_utilisateur']);
        //stocker le contenu du formulaire
        $nom = $_POST['nom_utilisateur'];
        $prenom = $_POST['prenom_utilisateur'];
        $mail = $_POST['mail_utilisateur'];
        $image = $_POST['image_utilisateur'];
        $password = $_POST['password_utilisateur'];
    }
    else{
        'Erreur formulaire.'; 
    }

}

?>