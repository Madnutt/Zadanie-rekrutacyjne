<?php

session_start();

require_once(__DIR__ . "/../Classes/View/UserView.php");

$username = $_POST['username'];
$password = $_POST['password'];

$userView = new UserView();
$user = $userView->logUserIn($username, $password);

unset($_POST['username'], $_POST['password']);

if ( is_string($user) ) {
    $msg = $user;
    header("Location: ../index.php?msg=" . urlencode($msg) . "&msg_type=danger");
}
else {
    $_SESSION['user'] = $user;

    $msg = "Pomyślnie zalogowano użytkownika";
    header("Location: ../index.php?msg=" . urlencode($msg) . "&msg_type=success");
}