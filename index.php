<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Acceuil</title>
</head>
<body>
    <?php
        session_start();

        if($_SESSION['login']=="admin" AND $_SESSION['password']=="admin"){
            header('Location: listeEtu.php');
        }
        else{
    ?>

    <style>
        #connexion{
            margin-left: auto;
            margin-right: auto;
            width: 20em
        }
    </style>
       
    
    <div class="container ">
        <div class="alert alert-success text-center">
            <p><strong>Bienvenue dans la page de connexion! veuiler saisir votre login et votre mot de passe</strong> </p>
        </div>
        
        <div class="row" >
            <form action="connexion.php" method="POST" class="form-group" id="connexion">
                <div class="col ">
                    <label for="" class="form-label"> Login: <input class="form-control" type="text" name="mail" Required ></label>
                </div>
                <div class="col">
                    <label for="" class="form-label">  password: <input class="form-control" type="password" name="password" required> </label>
                </div>
                <div class="col">
                    <label for="" class="form-label">
                        <input class="form-control btn btn-success" type="submit" value="se connecter">
                    </label>
                    
                </div>
                
            </form>
        </div>
    </div>
    <?php
     }
     ?>

</body>
</html>