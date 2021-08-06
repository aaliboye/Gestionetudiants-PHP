<?php

    session_start();
    
    if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['pays'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $pays = htmlspecialchars($_POST['pays']);

        $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

        $requet = $bdd->prepare('UPDATE etudiants SET nom = ? , prenom=? , email=?, pays=? WHERE id = ? ');

        $requet->execute(array($nom, $prenom, $email, $pays, $_SESSION['id']));

        $requet->closeCursor();

        header('Location: listeEtu.php');
    }

?>