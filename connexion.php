<?php


        session_start();


        $_SESSION['login'] = $_POST['mail'];
        $_SESSION['password'] = $_POST['password'];
        
        header('Location: formulaire.php');


?>
