<?php

    /**  Le fichier Routes permet de gérer toutes les ouvertures de pages. **/

/*Cookies*/
/*ini_set('session.cookie_lifetime', false);*/

// Ouverture de la session
session_start();
require "../View/MetaTags.php";

// Recherche du fichier Paramètre qui sera utilisé pour définir les chemins.
if (!class_exists("Parameters")) require "../Model/Parameters.Class.php";
Parameters::initialize();
Define("serverRoot", Parameters::getServerRoot());
Define("adresseRoot", $_SERVER['DOCUMENT_ROOT'].Parameters::getAdresseRoot());


/*
La fonction afficherPage récupère 3 paramètres :
    -Le chemin où trouver les pages.
    -Le nom de la partie contenue à afficher.
    -Le titre à donner à la page.
*/

/*Chaque page sera composée du Head, du Header, du Body ($page), et du footer*/
function afficherPage($chemin, $page, $titre)
{
	require $chemin . 'Head.php';
	require $chemin . 'Header.php';
    require $chemin . $page;
    require $chemin . 'Footer.php';
}

// Si la variable $_GET existe et contient une option, l'affichage d'une page s'effectuera.
if (isset($_GET['action']))
{
    // L'action contenue dans la variable $_GET correspond à une page définie par un switch.
    switch ($_GET['action']) 
    {
        
          /********/
         /***  ***/
        /********/

        case 'home': 
        {
            afficherPage(adresseRoot . 'Php/View/', 'Home.php', "Accueil");
            break;
        }

          /**************/
         /*** Autres ***/
        /**************/

        /*Le bouton de déconnexion*/
        case 'unconnect': 
        {
            afficherPage(adresseRoot . 'Php/View/', 'Unconnect.php', "Déconnexion");
            break;
        }
    }
}
else
{
    afficherPage(adresseRoot . 'PHP/View/', 'Home.php', "Accueil");
}
?>