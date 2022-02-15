<?php

session_start();
var_dump($_SESSION);

$_SESSION['user']="test"; 

unset($_SESSION["user"]); // Supprime une des variable du tableau de la session

// Si je veux supprimer toute les sessions ?
session_destroy();

?> 