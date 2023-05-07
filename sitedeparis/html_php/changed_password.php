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
    <link rel="stylesheet" href="changed_password.css">
    <title>Document</title>
</head>
<body>
<div class="conteneur_change">
        <div class="change">
            <div class="titre">
                <a href="connexion.php"><i class="fa-solid fa-left-long"></i></a>
                <h1>Definnissez un nouveau password</h1>
            </div>
            <form action="" method="post">
                <div><input type="password" name="password1" id="password1" placeholder="Saisissez un nouveau password"></div>
                <div><input type="password" name="password2" id="password2" placeholder="Confirmer le nouveau password"><i class="fa-solid fa-eye-slash"></i></div>
                <div><input type="submit" name="submit" value="VALIDER"></div>
            </form>
        </div>
        <div class="lien_inscription"><a href="">Inscription</a></div>
     </div>
     <?php
     include"../bdd/bdd.php";
     if (isset($_POST["submit"])) {
        if (isset($_POST["password1"],$_POST["password2"])&& !empty($_POST["password1"])&& !empty($_POST["password2"])) {
            $mdp1=$_POST["password1"];
            $mdp2=$_POST["password2"];
           if ($mdp1==$mdp2) {
            $mdp=password_hash($_POST["password1"],PASSWORD_ARGON2ID);
            $id_user=$_SESSION["user"];
            $update_password=mysqli_query($pdo,"UPDATE utilisateurs SET mot_de_passe='$mdp' WHERE id='$id_user'");
            header("location:acceuil.php");
           } else {
            echo"mots de passe non correspondant";
           }  
        }else {
            echo"veuillez remplir tout les formulaire";
        } 
     }
     ?>
     <script src="../js/changed_password.js"></script>
</body>
</html>