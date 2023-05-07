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
    <link rel="stylesheet" href="lien.css">
    <title>Document</title>
</head>
<body>
<?php
    include"../bdd/bdd.php";
    if (isset($_POST["mail"])&& !empty($_POST["mail"])) {
        $email=$_POST["mail"];
        $verify_user=mysqli_query($pdo,"SELECT*FROM utilisateurs WHERE email='$email'");
        $answer_user=mysqli_fetch_assoc($verify_user);
        if (mysqli_num_rows($verify_user)>0) {
            $u=bin2hex(openssl_random_pseudo_bytes(24));
            $token=$answer_user["token"];
            $user=$answer_user["id"];
            $insert_token=mysqli_query($pdo,"INSERT INTO token(user,token_user,token_generate)values('$user','$token','$u')");
            //$lien="<a href='changed.php?u="'.base64_encode($u).'"&t='".base64_encode($token).'>lien</a>";
            $href='verify_token.php?u='.base64_encode($u).'&t='.base64_encode($token);
            $lien="<a href='$href'>lien</a>";
            echo $lien;   
        } else {
           echo"utilisateur inexistant";
        } 
    }else {
        header("location:email.php");
    }
    ?>
    
</body>
</html>