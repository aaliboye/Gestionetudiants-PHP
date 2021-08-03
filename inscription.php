<?php

    if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['pays'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $pays = htmlspecialchars($_POST['pays']);

        $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

        $requet = $bdd->prepare('INSERT INTO etudiants(nom, prenom, email, pays) VALUES(?, ?, ?, ?)');

        $requet->execute(array($nom, $prenom, $email, $pays));

        $requet->closeCursor();



        header('Location: formulaire.php');
    }
?>