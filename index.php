<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <p> <strong>Bienvenue dans la page de connexion! veuiler saisir votre login et votre mot de passe</strong> </p>
    <form action="connexion.php" method="POST">
        admin: <input type="text" name="mail" Required>
        password: <input type="password" name="password" required>
        <input type="submit">
    </form>
    
</body>
</html>