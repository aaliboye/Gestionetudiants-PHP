<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Etudiants</title>
</head>
<body>
    <?php
        include_once('menu.php');
    ?>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">email</th>
                    <th scope="col">pays</th>
                    <th scope="col">modifier</th>
                    <th scope="col">supprimer</th>
                </tr>
            </thead>
    <?php

        $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');
        $reponse = $bdd->query('SELECT id, nom, prenom, email, pays FROM etudiants');
        while($donnee = $reponse->fetch()){
            $_SESSION['id'] = $donnee['id'];
    ?>
       
                <tbody>
                    <tr>
                        <th scope="row"> <?php echo $donnee['id']; ?> </th>
                        <td> <?php echo $donnee['nom']; ?> </td>
                        <td> <?php echo $donnee['prenom']; ?> </td>
                        <td> <?php echo $donnee['email']; ?> </td>
                        <td> <?php echo $donnee['pays']; ?> </td>
                        <td> <button class="btn btn-primary">Modifier</button> </td>
                        <td> <a href="supprimer.php"> <div class="btn btn-danger">Supprimer</div> </a> </td>
                    </tr>
                    
                </tbody>   

    <?php
        }
    ?>
    </table>
</body>
</html>   