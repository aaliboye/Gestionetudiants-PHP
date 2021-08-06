<?php
    session_start();

    if($_SESSION['login']=="admin" AND $_SESSION['password']=="admin"){

        $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

        $requet = $bdd->prepare('DELETE FROM etudiants WHERE id = ?');

        $requet->execute(array($_SESSION['id']));

        $requet->closeCursor();

        header('Location: listeEtu.php');
    }
    else{  
?>
        <p> vous ne pouver pas supprimer l'etudiant il faut d'abord se connecter</p>
        <a href="index.php"> se connecter</a>
<?php
    }
?>