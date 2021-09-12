<?php

require_once(__DIR__ . "/../Classes/Controller/UserController.php");

$username = $_POST['username'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$sex = $_POST['sex'];

$userCtrl = new UserController();
$user = $userCtrl->addUser($username, $password, $firstName, $lastName, $sex);

unset($_POST['username'], $_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['sex']);

if ( is_string($user) ) {
    $msg = $user;
    header("Location: ../index.php?msg=" . urlencode($msg) . "&msg_type=warning");
}
else {
    $msg = "Pomyślnie zarejestrowano użytkownika";
    header("Location: ../index.php?msg=" . urlencode($msg) . "&msg_type=success");
}