<?php

session_unset();
session_write_close();
setcookie(session_name(),'',0,'/');

$msg = "Pomyślnie wylogowano użytkownika";
header("Location: ../index.php?msg=" . urlencode($msg) . "&msg_type=success");