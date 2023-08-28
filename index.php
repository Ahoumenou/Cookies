<?php
// require('generic_function.php');
# Fonction qui demarre une section côté serveur
session_save_path("C:/_programmes/laragon-6.0.0/tmp");

// créer une nouvelle session si on en avait pas ou récuperer l'ancienne session
session_start();
// if(empty($_SESSION["nom"])){
//     $_SESSION["nom"] = "John Doe";
// }


// dd($_SESSION);
// echo "<p> Hello {$_SESSION["nom"]} </p>";


// fonction permettant de cr&er un cookie

// setcookie(clé, valeur, date_expiration);
setcookie("school", "Highfive", time() + 60*60) ;
// $_COOKIE est la superglobale permettant d'acceder au  coodie côté client
/** 
 *  Une suoperglobale une variable pr&(d&finie qui stocke des infos 
 *  et des données importantes accessibles depuis n'importe où dans 
 *  le script PHP sans avoir besoin de la déclarer explicitement comme une variable classique */
// fonction qui nous dis où sont stochés les sessions côté seveur
echo "Session Path =" . session_save_path();
echo '<br>';
echo session_id(); // fonction qui renvoie l'id de la session actuelle
echo '<br>';
print_r($_COOKIE);

$_SESSION["firstname"] = 'John';
$_SESSION["lastname"] = 'Doe';
$_SESSION["age"] = 24;

// donnée 
$serializedData = 'firstname|s:4:"John";lastname|s:3:"Doe";age|i:24;';

$data = unserialize($serializedData);

print_r($data);

print_r($_SESSION);






