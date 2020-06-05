<?php
    session_start();   
    unset(
        $_SESSION['codigo'],
        $_SESSION['nome'],
        $_SESSION['email'],
        $_SESSION['senha'],

    );   
    header("Location: login.php");
?>