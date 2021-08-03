<?php

        if($_POST['mail']=="admin" AND $_POST['password']=="admin"){
            header('Location: formulaire.php');
        }
        else{
?>
            <p> vs n'avez pas acces a ce site </p>
            <a href="index.php"> se connecter</a>

<?php
        }

?>