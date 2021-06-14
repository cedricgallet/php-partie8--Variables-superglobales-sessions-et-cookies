

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php partie 8 variables superglobales ex1</title>
</head>
<body>
    
<!-- Faire une page HTML permettant de donner à l'utilisateur son User Agent, son adresse ip et le nom du serveur -->
<p>Vos informartions de navigation:</p>

<div><?=$_SERVER['HTTP_USER_AGENT'];?></div>
    
<div><?=$_SERVER['REMOTE_ADDR'];?></div>

<div><?=$_SERVER['SERVER_NAME'];?></div>

      
</body>
</html>