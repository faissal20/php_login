<?php

session_start();
if(!isset($_SESSION['user'])){
    header('Location: ../index.php');
} else {
    session_destroy();
    header('Location: ../login.php');
}

?>