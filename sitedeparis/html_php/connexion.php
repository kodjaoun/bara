<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&family=Exo+2:wght@300&family=Outfit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/connexion.css">
    <title>Document</title>
</head>
<body>
     <div class="conteneur_connexion">
        <div class="connexion">
            <div class="titre">
                <a href=""><i class="fa-solid fa-left-long"></i></a>
                <h1>Se connecter</h1>
            </div>
            <form action="" method="post">
                <div><input type="text" name="id" id="email_numero" placeholder="Email ou numero de telephone"><i class="fa-solid fa-mobile"></i></div>
                <div><input type="password" name="password" id="password" placeholder="Mot de passe"><i class="fa-solid fa-eye-slash"></i></div>
                <div><input type="submit" value="SE CONNECTER"></div>
                <div><a href="email.php">Mot de passe oublié ?</a></div>
            </form>
        </div>
        <div class="lien_inscription"><a href="">Inscription</a></div>
     </div>
     <script src="../js/connexion.js"></script>
</body>
</html>