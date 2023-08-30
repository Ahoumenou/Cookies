<?php

// récuperer la session
session_start();

// On test si la variable de session "login " existe
// et contient une valeur

if (empty($_SESSION["login"])) {
    // si inexistant o nulle,; on redirige vers le formulaire de logique 
    Header("HTTP/1.1 302 Found");
    Header("Location: /authenticated.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
        
</head>
<body>
    <!--  -->
    <a href="logout.php"> Se deconnecter</a>
    <h1>Bienvenu <?= $_SERVER['login'] ?? "..." ?> </h1>
   
</body>
</html>