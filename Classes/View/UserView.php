<?php

require_once(__DIR__ . "/../Model/UserModel.php");

class UserView extends UserModel {
    
    public function logUserIn($username, $password) {
        $user = $this->getUser($username, $password);

        if ( !$user ) {
            return "Nie znaleziono użytkownika z podaną nazwą oraz hasłem";
        }

        return $user;
    }

}