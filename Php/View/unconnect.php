<?php

/*La session est détruite*/
session_destroy();

/*Redirection vers l'accueil*/
header("refresh:1;url=Routes.php");
?>