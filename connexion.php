<?php


session_start();


$_SESSION['login'] = $_POST['mail'];
$_SESSION['password'] = $_POST['password'];


        if($_SESSION['login'] =="admin" AND $_SESSION['password']=="admin"){
                
                header('Locatin : formulaire.php');
        }
        else{
?>
            <p> vs n'avez pas acces a ce site </p>
            <a href="index.php"> se connecter</a>

<?php
        }


?>