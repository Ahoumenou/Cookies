<?php
// require("../Models/AuthModel.php");
class AuthController {
    private $model;
    public function __construct(AuthModel $model){
        $this->model = $model;
    }
    public function signupAction($username, $password){
        // on demande au model d'ajouter l'utilisateur
        $this->model->addUser($username, $password);
    }

    public function loginAction($username, $password){
        // on demande au model de récuperer l'utilisateur
      return  $this->model->getUser($username);
    }
}