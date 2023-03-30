<?php

include '.App/model/utilisateur.php';
include '.App/controler/addUser.php'; 
include './App/utils/connectBdd.php'; 
include './App/vue/view_add_user.php';


//tester si le formulaire est submit
if(isset($_POST['submit'])){
    //tester si les champs sont remplis
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND
    !empty($_POST['mail'])AND !empty($_POST['image']) AND !empty($_POST['password'])){
        //nettoyage nom via function
        $nom_utilisateur = Fonction::cleandata($_POST['nom_utilisateur']);
        //stocker le contenu du formulaire
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $image = $_POST['image'];
        $password = $_POST['password'];
    }
    else{
        'Erreur formulaire.'; 
    }

}

?>