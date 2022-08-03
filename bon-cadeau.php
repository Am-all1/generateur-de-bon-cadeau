 <!DOCTYPE html>
 <html lang="fr">

 <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style2.css" />
     <title>Bon cadeau</title>
 </head>

 <body>

 </body>

 </html>
 <?php

    require_once __DIR__ . "/BonCadeau.class.php";
    require_once __DIR__ . "/bon-cadeau.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bonGenere = new BonCadeau($_POST["nomBeneficiaire"],  $_POST["prenomBeneficiaire"], $_POST["nomAcheteur"], $_POST["prenomAcheteur"], $_POST["mois"], $_POST["annee"]);
    }
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>
     <div><?= $bonGenere->affichage() ?></div>
 </body>

 </html>