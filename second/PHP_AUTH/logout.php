<?php

// script de déconnexion

// récupère la session actuelles
session_start();
// supprime toutes les variables de sessions
session_unset();
session_destroy();
// redirection 
header("Location: /authenticated.php");
exit();