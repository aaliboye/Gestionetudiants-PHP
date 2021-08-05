<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Inscription</title>
</head>
<body>

    <?php
        include_once('menu.php');

        session_start();

        if($_SESSION['login']=="admin" AND $_SESSION['password']=="admin"){
    ?>
        <div class="container">
            <form action="inscription.php" method="POST" class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label"> nom: <input class="form-control" type="text" name="nom" id="nom" required></label>
                        <span id="nomindic"></span>
                    </div>
                </div> 
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label"> prenom: <input class="form-control" type="text" name="prenom" id="prenom" required></label>
                        <span id="nomindic"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label"> email: <input class="form-control" type="text" name="email" id="email" required></label>
                        <span id="nomindic"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label"> pays: <input class="form-control" type="text" name="pays" id="pays" required></label>
                        <span id="nomindic"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">
                            <input class="form-control btn btn-success" type="submit" value="envoyer" id="send">
                        </label>
                    </div>
                </div>
                
            </form>
        </div>
    <?php      
        }
        else{
    ?>
                <p> votre mot de passe et votre login est incorrect!</p>
                <a href="index.php"> se connecter</a>
    <?php

        }
    ?>  
    

</body>
</html>