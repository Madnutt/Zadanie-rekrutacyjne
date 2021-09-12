<?php

require_once(__DIR__ . "/../Dbh.php");

class UserModel extends Dbh {

    protected function setUser($username, $password, $firstName, $lastName, $sex) {
        $db = $this->conn();

        $query = "INSERT INTO users (first_name, last_name, sex) VALUES (?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$firstName, $lastName, $sex]);

        $id = $db->lastInsertId();

        $query = "INSERT INTO user_credentials (users_id, username, password) VALUES (?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$id, $username, md5($password)]);
    }

    protected function getUser($username, $password) {
        $query = "SELECT users.* FROM users 
                  JOIN user_credentials ON users.id = user_credentials.users_id
                  WHERE user_credentials.username = ? AND user_credentials.password = ?";
        $stmt = $this->conn()->prepare($query);
        $stmt->execute([$username, md5($password)]);

        $result = $stmt->fetch();
        return $result;
    }

    protected function isUsernameAvailable($username) {
        $query = "SELECT COUNT(*) as `count` FROM user_credentials WHERE username = ?";
        $stmt = $this->conn()->prepare($query);
        $stmt->execute([$username]);

        $result = $stmt->fetch();
        return $result['count'] == 0 ? true : false;
    }
}