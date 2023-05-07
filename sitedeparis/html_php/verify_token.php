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

    <title>Document</title>
</head>
<body>
<?php
    include"../bdd/bdd.php";
    if (isset($_GET["u"],$_GET["t"])&& !empty($_GET["u"])&& !empty($_GET["t"])) {
        $u=base64_decode($_GET["u"]);
        $token=base64_decode($_GET["t"]);
        $verify_token=mysqli_query($pdo,"SELECT*FROM token WHERE token_user='$token' AND token_generate='$u'");
        if (mysqli_num_rows($verify_token)>0) {
            $verify_user=mysqli_query($pdo,"SELECT*FROM utilisateurs WHERE token='$token'"); 
            header("location:changed_password.php");
        }else {
            echo"compte non valide";  
        }
    }else {
        echo"compte non valide";
    }
    ?>
    
</body>
</html>