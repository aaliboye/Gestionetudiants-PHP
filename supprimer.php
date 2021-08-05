<?php
    session_start();

    $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

    $requet = $bdd->prepare('DELETE FROM etudiants WHERE id = ?');

    $requet->execute(array($_SESSION['id']));

    $requet->closeCursor();

    header('Location: listeEtu.php');

?>