<?php

require_once(__DIR__ . "/../Model/UserModel.php");

class UserController extends UserModel {

    public function addUser($username, $password, $firstName, $lastName, $sex) {

        if ( !$this->isUsernameAvailable($username) ) {
            return "Nazwa użytkownika jest zajęta";
        }
        if ( strlen($username) < 6 ) {
            return "Nazwa użytkownika jest za krótka";
        }
        if ( strlen($password) < 8 ) {
            return "Hasło jest za krótkie";
        }

        $this->setUser($username, $password, $firstName, $lastName, $sex);

        return true;
    }

}