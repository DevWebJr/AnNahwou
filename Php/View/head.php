<!DOCTYPE html>
<html lang="en" dir="auto">
<head>
	<?php
		/*Cet autoload est propre au Pattern MVC utilisé*/
		function chargerClasse($classe)
		{
			if (file_exists(adresseRoot . "Php/Controller/" . $classe . ".Class.php")) {
				require adresseRoot . "Php/Controller/" . $classe . ".Class.php";
			}

			if (file_exists(adresseRoot . "Php/Model/" . $classe . ".Class.php")) {
				require adresseRoot . "Php/Model/" . $classe . ".Class.php";
			}
		}
		spl_autoload_register("chargerClasse");

		/*Initialisation de la connexion avec la Base De Données*/
		DataBaseConnection::init();
    ?>
    
    <!-- Inclusion des Meta Tags -->
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=0, maximum-scale=1, initial-scale=1.0, maximum-scale=1">
    <meta name="author" content="<?= WEBSITE_AUTHOR?>">
    <meta name="description" content="<?= WEBSITE_DESCRIPTION?>" />
    <meta name=”keywords” content="<?= WEBSITE_KEYWORDS?>"/>
    <meta name="Reply-to" content="<?= WEBSITE_AUTHOR_MAIL?>">
    <meta name="Copyright" content="<?= WEBSITE_AUTHOR?>">
    <meta name="Language" content="<?= WEBSITE_LANGUAGE?>">

    <!-- Inclusion des Open Graph tags,   concernant la visibilité sur FaceBook -->
    <meta property="og:type"              content="website" />
    <meta property="og:url"               content="<?= WEBSITE_FACEBOOK_URL?>" />
    <meta property="og:title"             content="<?= WEBSITE_FACEBOOK_NAME?>" />
    <meta property="og:description"       content="<?= WEBSITE_FACEBOOK_DESCRIPTION?>" />
    <meta property="og:image"             content="<?= WEBSITE_FACEBOOK_IMAGE?>" />

    <!-- Titre de la page courante -->
    <title><?php echo $titre ?></title>
    
    <!-- Inclusion des pages de style Css, en mode classique et en mode Responsive -->
  <link rel="stylesheet" type="text/css" href="<?php echo Parameters::getAdresseRoot(); ?>/Css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Parameters::getAdresseRoot(); ?>/Css/mediaQuerries.css">
</head>
<body>