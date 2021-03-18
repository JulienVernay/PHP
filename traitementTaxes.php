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
$ht = filter_input(INPUT_POST, 'HT', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$tva = filter_input(INPUT_POST, 'TVA', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
?>
<form name="calcul" method="post">
    <fieldset style="width: 300px">
        <legend>Calcul des taxes</legend>
        <label for="HT">Prix HT :</label>
        <input  type="number" id="HT" step="0.1" name="HT" placeholder="Prix HT"
            <?php
            if($ht){
                echo ' value="'.$ht.'"';
            }
            ?>> €<br>
        <label for="TVA">Taux de TVA :</label>
        <input  type="number" id="TVA" step="0.1" name="TVA" placeholder="Taux TVA"
            <?php
            if($ht){
                echo ' value="'.$tva.'"';
            }
            ?>> %<br>
        <input type="submit" value="Calculer" name="Calculer"><br>
        <?php
        if(isset($_POST['Calculer'])){
            $montantTVA = number_format(($ht * $tva) / 100, 2, '€', ' ');
            $montantTTC = number_format((($ht * $tva) / 100) + $ht, 2, '€', ' ');

        ?>
        <label for="montantTVA">Montant de la TVA :</label>
        <input  type="text" id="montantTVA" name="montantTVA" readonly value="<?= $montantTVA ?>"><br>

        <label for="montantTTC">Montant TTC :</label>
        <input  type="text" id="montantTTC" name="montantTTC" readonly value="<?= $montantTTC ?>"><br>
        <?php } ?>
    </fieldset>
</form>

</body>
</html>