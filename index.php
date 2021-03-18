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
<fieldset style="width: 300px"><legend>Adresse client</legend>
<form action="traitement_donnees.php" method="post">
    <label>Nom :</label>
        <input  type="text" name="nom"><br>

    <label>Prénom :</label>
        <input  type="text" name="prenom"><br>

    <label>Adresse :</label>
        <input  type="text" name="adresse"><br>

    <label>CP :</label>
        <input  type="text" name="cp"><br>

    <label>Ville :</label>
        <input  type="text" name="ville"><br>

    <input type="submit" value="Envoyer le formulaire">
</form>
</fieldset>
</body>
</html>
