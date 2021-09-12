<?php

class Dbh {

    private $host = "localhost";
    private $dbname = "zadanie_wsk";
    private $uname = "root";
    private $pwd = "";

    protected function conn() {
        
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
        $pdo = new PDO($dsn, $this->uname, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}