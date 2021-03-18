<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
<?php
if(isset($_POST['mail']) && !empty($_POST['mail'])){
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
}else if (empty($_POST['mail'])){
    echo '<script>window.alert("Mail manquant")</script>';
}

echo $mail;
echo $_SERVER['HTTP_USER_AGENT'];
?>
<br>
<a href="indexMail.php">Retourner au formulaire</a>
</body>
</html>
