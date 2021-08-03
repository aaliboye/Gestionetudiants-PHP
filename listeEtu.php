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

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>email</th>
                    <th>pays</th>
                </tr>
            </thead>
    <?php

        $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');
        $reponse = $bdd->query('SELECT id, nom, prenom, email, pays FROM etudiants');
        while($donnee = $reponse->fetch()){
    ?>
       
                <tbody>
                    <tr>
                        <td> <?php echo $donnee['id']; ?> </td>
                        <td> <?php echo $donnee['nom']; ?> </td>
                        <td> <?php echo $donnee['prenom']; ?> </td>
                        <td> <?php echo $donnee['email']; ?> </td>
                        <td> <?php echo $donnee['pays']; ?> </td>
                    </tr>
                    
                </tbody>
            
        

    <?php
        }
    ?>
    </table>
</body>
</html>   