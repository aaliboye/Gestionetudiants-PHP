<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Inscription</title>
</head>
<body>

    <?php
        include_once('menu.php');
    ?>
    
    <form action="inscription.php" method="POST">
        nom: <input type="text" name="nom" id="nom" required>
        <span id="nomindic"></span>
        prenom: <input type="text" name="prenom" id="prenom" required>
        <span id="prenomindic"></span>
        email: <input type="text" name="email" id="email" required>
        <span id="emailindic"></span>
        pays: <input type="text" name="pays" id="pays" required>
        <span id="paysindic"></span>
        <input type="submit" value="envoyer" id="send">
    </form>
    
    

</body>
</html>