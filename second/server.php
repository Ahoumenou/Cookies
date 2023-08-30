<?php

// require('./generic_functions.php');
define("MAX_SIZE", 3000000);
// l'utilisateur a uploader un fichier 
if (isset($_POST['submit']) && isset($_FILES['photo_profile'])) {

    // // récupérer les informations du fichier (nom, extension, chemin)
    $fileName = $_FILES['photo_profile']['name'];
    $tmpDir = $_FILES['photo_profile']['tmp_name'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    // echo 'file extension = $fileExtension';

    //   Les valeurs fausses en php : 0, "0", "0.0" , [], ""


    /** Fonction qui sauvegarde le fichier à l'endroit désiré */
    // img-upload-123010655456.png
    // ne accepter que les fichiers jpeg, png, jpg
    $allowedFiles = ['jpeg', 'png', 'jpg'];
    if (in_array($fileExtension, $allowedFiles)) {
        // vérifier qu'il n'y a pas d'erreurs 
        if ($_FILES['photo_profile']['error'] === 0) {
            //  Il n'y a pas d'erreur
            if ($_FILES['photo_profile']['size'] <= MAX_SIZE) {
                // la taille est inferieur à 3M
                echo "bon fichier";
                // sauvegarder le fichier sur le serveur
                move_uploaded_file($tmpDir, "./upload/img-upload-" . uniqid("img-") . "." . $fileExtension);
            } else {
                // La taille est trop élevée
                echo "Fichier trop volumineux " . "(>" . MAX_SIZE . "octets)";
            }
        } else {

            echo "Erreur de telechagement du fichier . Reessayez svp";
        }

    } else {
        echo 'Fichier $fileExtension non autorisé' . "<br>";
        echo 'Formats autorisés: ' . implode(", ", $allowedFiles);
    }
} else {
    // rediriger ce dernier sur la page du formulaire
    header('Location:/index.php?error=no_file_uploaded');
    // exit;
}