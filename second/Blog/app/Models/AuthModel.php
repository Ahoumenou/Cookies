<?php

class AuthModel
{
    public $users = [];
    /** Fonction qui ajoute un utilisateur dans notre tableau */
    public function addUser($username, $password)
    {
        // PASSWORD_BCRYPT
        $this->users[$username] = password_hash($password, PASSWORD_DEFAULT);
    }
    /** 
     * Fonction qui recherche un utilisateur dans notre tableau
     */
    public function getUser($username): null | string
    {
        // echo "<pre>";
        // print_r($this->users);
        // echo "</pre>";
        // exit;
        return $this->users[$username] ?? null;
    }
}