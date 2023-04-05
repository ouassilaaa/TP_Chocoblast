<?php

include"./App/utils/connectBdd.php";
//function nettoyage
include"./App/model/utilisateur.php";
include"./App/manager/ManagerUtilisateur.php"; 



//Analyse de l'URL avec parse_url() et retourne ses composants, on récupère l'url qu'on découpe
$url = parse_url($_SERVER['REQUEST_URI']);
//test soit l'url a une route sinon on renvoi à la racine, ici on récupère le path soit le bout de la fin, s'il est remplie on le laisse sinon on y ajoute un /
$path = isset($url['path']) ? $url['path'] : '/';
/*--------------------------ROUTER -----------------------------*/
//test de la valeur $path dans l'URL et import de la ressource
switch($path){
    //route /chocoblast/accueil -> ./App/controler/ControlerAccueil.php
case $path === "/Chocoblast/" or $path === "/Chocoblast/home" :
    include './App/Controller/ControlerAccueil.php';
    break ;
//route /chocoblast/inscription -> ./App/controler/ControlerAddUser.php
case $path === "/Chocoblast/inscription" :
    include './App/Controller/ControlerAddUser.php';
    break ;
//route /chocoblast/test -> ./App/controler/ControlerTest.php
case $path === "/Chocoblast/test":
    include './App/Controller/ControlerTest.php';
    break ;

case $path === "/Chocoblast/userAdd":
     $api -> addUtilisateur(); 
     break; 

//si rien ne correspond : route -> ./App/controler/Controler404.php
default :
    include './App/Controller/Controler404.php';
}
?>