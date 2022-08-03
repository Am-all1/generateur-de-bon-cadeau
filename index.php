<?php
?>

<!DOCTYPE html>
<html lang="fr" style="margin-top: 6.5%; background-color:floralwhite;">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Generateur bon cadeau</title>
</head>

<body>
    <div>
        <h1 class="titre">Bon cadeau</h1>
    </div>
    <div> <img src="./logo cadeau.png" class="logo" height="200px" ;> </div>

    <div id="formulaire" style="background-color: rosybrown">
        <form action="bon-cadeau.php" method="POST" id="formula">

            <input type="text" name="montant" placeholder="montant">
            <br>
            <br>
            <input type="text" name="nomBeneficiaire" placeholder="nom du beneficiare">
            <br>
            <br>
            <input type="text" name="prenomBeneficiaire" placeholder="prenom du beneficiare">
            <br>
            <br>
            <input type="text" name="nomAcheteur" placeholder="nom de l'acheteur">
            <br>
            <br>
            <input type="text" name="prenomAcheteur" placeholder="prenom de l'acheteur">
            <br>
            <br>

            <select name="mois">

                <option value="01"> 01</option>
                <option value="02"> 02</option>
                <option value="03"> 03</option>
                <option value="04"> 04</option>
                <option value="05"> 05</option>
                <option value="06"> 06</option>
                <option value="07"> 07</option>
                <option value="08"> 08</option>
                <option value="09"> 09</option>
                <option value="10"> 10</option>
                <option value="11"> 11</option>
                <option value="12"> 12</option>
            </select>

            <select name="annee">
                <option value="<?php echo date("Y") ?>"><?php echo date("Y") ?></option>
                <option value="<?php echo date("Y") + 1 ?>"><?php echo date("Y") + 1 ?></option>
            </select>
            <br>
            <br>

            <input classe="btn" type="submit" value="creer" placeholder="creer" style=" width: 20%" </form>
    </div>