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
if(isset($_POST['nom']) && !empty($_POST['nom'])){
    //$nom = $_POST['nom'];
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
}else if (empty($_POST['nom'])){
    echo '<script>window.alert("Nom manquant")</script>';
    }

if(isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    //$prenom = $_POST['prenom'];
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
}else if (empty($_POST['prenom'])){
    echo '<script>window.alert("Prenom manquant")</script>';
}

if(isset($_POST['adresse']) && !empty($_POST['adresse'])) {
    //$adresse = $_POST['adresse'];
    $adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_STRING);
}else if (empty($_POST['adresse'])){
    echo '<script>window.alert("Adresse manquante")</script>';
}

if(isset($_POST['cp']) && !empty($_POST['cp'])) {
    //$cp = $_POST['cp'];
    $cp = filter_input(INPUT_POST, 'cp', FILTER_SANITIZE_STRING);
}else if (empty($_POST['cp'])){
    echo '<script>window.alert("Code Postal manquant")</script>';
}

if(isset($_POST['ville']) && !empty($_POST['ville'])) {
    //$ville = $_POST['ville'];
    $ville = filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_STRING);
}else if (empty($_POST['ville'])){
    echo '<script>window.alert("Ville manquante")</script>';
}

$tab = [$nom, $prenom, $adresse, $cp, $ville];

echo '<table style="border-collapse: collapse">
<tr><th style="border: 1px black solid">Nom</th>
<th style="border: 1px black solid">Prénom</th>
<th style="border: 1px black solid">Adresse</th>
<th style="border: 1px black solid">Code Postal</th>
<th style="border: 1px black solid">Ville</th></tr>';
foreach ($tab as $val){
    echo '<td style="border: 1px black solid">'.$val.'</td>';
}
echo '</table>';
?>
<br>
<a href="index.php">Retourner au formulaire</a>
</body>
</html>
