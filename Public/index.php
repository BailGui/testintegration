<?php

if(isset($_GET['p'])){
    
    switch($_GET['p']){
        case 'accueil':
           
            include('../Template/accueil.php');
            break;
        case 'form':
            include('../Template/contact.php');
            break;
        case 'cult':
            include('../Template/culture.php');
            break;
        case 'gal':
            include('../Template/galerie.php');
            break;
        case 'geo':
            include('../Template/geographie.php');
            break;
        case 'hist':
            include('../Template/histoire.php');
            break;
        case 'link':
            include('../Template/liens.php');
            break;
                                   
       
        default:
            include('../Template/page-404.php');
    }

}else{
    
    include('../Template/accueil.php');

}