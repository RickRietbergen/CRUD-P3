<?php
    session_start(); 

    if (!isset($_SESSION["loggedin"]))
    {
        header("location: PHP/inlog.php");
        exit();
    }
?>