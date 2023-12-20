<?php

if(isset($_GET['p'])){
    
    switch($_GET['p']){
       
        case 'form':
            $title = "contact";
            include('../Template/contact.php');
            break;
        case 'cult':
            $title="culture";
            include('../Template/culture.php');
            break;
        case 'gal':
            $title="galerie";
            include('../Template/galerie.php');
            break;
        case 'geo':
            $title="geographie";
            include('../Template/geographie.php');
            break;
        case 'hist':
            $title="histoire";
            include('../Template/histoire.php');
            break;
        case 'link':
            $title="liens";
            include('../Template/liens.php');
            break;
                                   
       
        default:
            $title="page404";
            include('../Template/page-404.php');
    }

}else{
    
    $title = "accueil"; 
    include('../Template/accueil.php');

}