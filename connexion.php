<?php

session_start();




        if($_POST['mail']=="admin" AND $_POST['password']=="admin"){
                $_SESSION['login'] = 'admin';
                $_SESSION['password'] = 'admin';

                header('Locatin : formulaire.php');
        }
        else{
?>
            <p> vs n'avez pas acces a ce site </p>
            <a href="index.php"> se connecter</a>

<?php
        }

?>