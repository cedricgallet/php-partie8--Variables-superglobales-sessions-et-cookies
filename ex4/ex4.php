<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="user.php" method="POST">
        <fieldset>
            <div>
                <label for="login">identifiant:</label>
                <input type="login" name="login" id="login">
            </div>
            <div>
                <label for="password">mot de passe :</label>
                <input type="password" name="password" id="password">
            </div>
        </fieldset>
        <button type="submit">Valider</button>
    </form>

    
</body>
</html>