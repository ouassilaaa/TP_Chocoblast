<?php

include"./App/model/apiUtilisateur.php"; 
include"./App/utils/connectBdd.php";
include"./App/manager/ManagerUtilisateur.php"; 
include"./App/model/utilisateur.php";


//Analyse de l'URL avec parse_url() et retourne ses composants, on récupère l'url qu'on découpe
$url = parse_url($_SERVER['REQUEST_URI']);
//test soit l'url a une route sinon on renvoi à la racine, ici on récupère le path soit le bout de la fin, s'il est remplie on le laisse sinon on y ajoute un /
$path = isset($url['path']) ? $url['path'] : '/';
/*--------------------------ROUTER -----------------------------*/
//test de la valeur $path dans l'URL et import de la ressource
switch($path){
    //route /chocoblast/accueil -> ./App/controler/ControlerAccueil.php
case $path === "/Chocoblast/" or $path === "/Chocoblast/accueil" :
    include './App/controler/ControlerAccueil.php';
    break ;
//route /chocoblast/inscription -> ./App/controler/ControlerAddUser.php
case $path === "/Chocoblast/inscription" :
    include './App/controler/ControlerAddUser.php';
    break ;
//route /chocoblast/test -> ./App/controler/ControlerTest.php
case $path === "/Chocoblast/test":
    include './App/controler/ControlerTest.php';
    break ;

case $path === "/Chocoblast/userAdd":
     $api -> addUtilisateur(); 
     break; 

//si rien ne correspond : route -> ./App/controler/Controler404.php
default :
    include './App/controler/Controler404.php';
}
?>