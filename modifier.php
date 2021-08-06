<?php

    session_start();

    $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

    $requet = $bdd->prepare('SELECT nom, prenom, email, pays FROM etudiants WHERE id = ?');

    $requet->execute(array($_SESSION['id']));

    while($donnee = $requet->fetch()){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>modification</title>
</head>
<body>

        <div class="container">
            <div class="alert alert-info text-center">
                <p>
                    Vous etes dans la page de modification !:)
                </p>
            </div>
            <form action="ValidModif.php" method="POST" class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label"> nom: <input class="form-control" type="text" name="nom" id="nom" required value="<?php echo $donnee['nom'] ?>"></label>
                        <span id="nomindic"></span>
                    </div>
                </div> 
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label"> prenom: <input class="form-control" type="text" name="prenom" id="prenom" required value="<?php echo $donnee['prenom'] ?>"></label>
                        <span id="nomindic"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label"> email: <input class="form-control" type="text" name="email" id="email" required value="<?php echo $donnee['email'] ?>"></label>
                        <span id="nomindic"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label"> pays: <input class="form-control" type="text" name="pays" id="pays" required value="<?php echo $donnee['pays'] ?>"></label>
                        <span id="nomindic"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">
                            <input class="form-control btn btn-success" type="submit" value="Modifier" id="send">
                        </label>
                    </div>
                </div>
                
            </form>
        </div>

</body>
</html>
<?php
    }


    $requet->closeCursor();

?>

<?php



?>