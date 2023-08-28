<?php

// require('./generic_functions.php');

// l'utilisateur a uploader un fichier 
if (isset($_POST['submit']) && isset($_FILES['photo_profile'])) {
    # code...
    // // récupérer les informations du fichier (nom, extension, chemin)
    print_r($_FILES['photo_profile']);
    $fileName = $_FILES['photo_profile']['name'];
    $tmpDir = $_FILES['photo_profile']['tmp_name'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    // echo 'file extension = $fileExtension';


    /** Fonction qui sauvegarde le fichier à l'endroit désiré */
    // img-upload-123010655456.png
    move_uploaded_file($tmpDir, "./upload/img-upload-" . time() .".". $fileExtension);
    // sauvegarder le fichier sur le serveur
}else {
    // rediriger ce dernier sur la page du formulaire
    header('Location:/index.php?error=no_file_uploaded ');
    // exit;
}
