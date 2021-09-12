<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
        <link rel="stylesheet" href="Assets/CSS/style.css" />
    </head>
    <body>
        <?php
            if (isset($_GET["msg"])) {
                echo("<div class='alert alert-" . $_GET["msg_type"] . "'>" . urldecode($_GET["msg"]) . "</div>");
            }

            if ( isset($_SESSION['user']) ) {
                include("Includes/welcome.php");
            }
            else {
                include("Includes/noUser.php");
            }
        ?>
    </body>
</html>