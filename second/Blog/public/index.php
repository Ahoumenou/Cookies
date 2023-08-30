<?php

require("../app/Views/AuthView.php");
require("../app/Models/AuthModel.php");
require("../app/Controllers/AuthController.php");

$view = new AuthView;
$model = new AuthModel;
$controller = new AuthController($model);

// $model -> addUser("JohnDoe", "1");
// echo $model -> getUser("");
  /** 
   * Le point d'entrée (également front controller)  est un
   * fichier PhP unique qui agit comme le point de départ de votre
   * app web. Il reçoit toutes les requêtes HTTP entrantes et dirige
   * le flux de controle vers les composants appropriés 
   * (contrôleurs, vues , modèles) en fonction de l'URL ou
   *  d'autres paramètres
   */

$view = new AuthView();

var_dump($_GET);

if ($_GET["action"]){
    // L'utilisateur veut s'incrire 
    if ($_GET["action"] === "signup") {
        // appeler le contrôleur approprié
        $controller->signupAction($_POST['username'], $_POST["password"]);
        echo "<pre>";
        print_r($model->users);
        echo "</pre>";
    }
    
    // L'utilisateur  veut se connecter
    if ($_GET["action"] === "login") {
        // appeler le contrôleur approprié
        $controller->loginAction($_POST['username'], $_POST["password"]);
    }
    
    
}else {
    $view->showLoginForm();
    $view->showSignForm();
    # code...
}

?>