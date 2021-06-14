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
    <p>Bonjour voici les informations qui sont conservéés</p>

   <div><?=$_SESSION['lastname'] .' '. $_SESSION['firstname'] .' '. $_SESSION['age']?></div>
 
   <div><a href="ex2.php">Retour</a></div>
</body>
</html>