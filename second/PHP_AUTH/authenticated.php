<?php
  // Définition des constantes
define("LOGIN", "toto");
define("PASSWORD", "emilos");
// Variable qui stocke les erreurs
$errorMesage = "";
/**
 * S_SERVER contient les informations sur 
 * le serveur WEB,
 * l'environnement d'exécutioin et 
 * les requêtes HTTP
 */

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

// Test de l'envoi du formulaire
if (!empty($_POST)) {
    // Les identifiants sont transmis
    if ( !empty($_POST['login']) && !empty($_POST["pwd"])) {
        // Sont-ils les mêmes que ceux enregistrés dans la BDD
         if ($_POST["login"] !== LOGIN) {
            $errorMesage =  "Mauvais login !";
         }else if ($_POST['pwd'] !== PASSWORD){
            $errorMesage = "Mauvait Mot de Passe !";
         }else {
            // ouvrir une session
            session_start();
            // ON enrégistre le login de session
            $_SESSION["login"] = LOGIN;
            // On redirige vers le fichier admin.php
            Header("HTTP/1.1 302 Found");
            Header("Location: /admin.php");
            exit();
         }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'authentification </title>
</head>

<body>


    <div class="container">
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"> 
            <fieldset>
                <legend>Identifiez-vous</legend>
                <?php 
                // if (!empty($errorMessage)) : ?>
                <p> <?= $errorMesage  ?> </p>
                <p>
                    <label for="">Login</label>
                    <input type="text" name="login" id="login">
                </p>
                <p>
                    <label for="">Mot de Passe</label>
                    <input type="password" name="pwd" id="password">
                </p>
                <p><button type="submit" name="submit">S'authentifier</button></p>
            </fieldset>
        </form>
    </div>
</body>

</html>