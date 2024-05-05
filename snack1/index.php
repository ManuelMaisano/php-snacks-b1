<?php

//Snack 1
//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
//Olimpia Milano - Cantù | 55-60

$matches = [
    [
      "squadraCasa" => "Milano",
      "squadraOspite" => "Milazzo",
      "puntiCasa" => 85,
      "puntiOspite" => 68
    ],
    [
      "squadraCasa" => "Clippers",
      "squadraOspite" => "lakers",
      "puntiCasa" => 78,
      "puntiOspite" => 83
    ],
    [
      "squadraCasa" => "Boston Celtic",
      "squadraOspite" => "Los Angeles",
      "puntiCasa" => 63,
      "puntiOspite" => 82
    ],
    [
      "squadraCasa" => "Cleveland",
      "squadraOspite" => "Raptors",
      "puntiCasa" => 82,
      "puntiOspite" => 102
    ],
    [
      "squadraCasa" => "ChichagoBulls",
      "squadraOspite" => "Sacramento",
      "puntiCasa" => 66,
      "puntiOspite" => 89
    ],
    [
      "squadraCasa" => "Boolean",
      "squadraOspite" => "Epicode",
      "puntiCasa" => 55,
      "puntiOspite" => 78
    ]
  ];

  function getMatches($matches) {
    foreach($matches as $match) {
        echo $match["squadraCasa"] . " - " . $match["squadraOspite"] . " | " . $match["puntiCasa"] . " - " . $match["puntiOspite"] . "<br>";
      }
  }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js" type="module"></script>
    <title>Snack1</title>

</head>


<body>
    <h1>Snack1</h1>
<div class="container text-center my-4 ">
    <?php  getMatches($matches) ?>
    <br>

</div>


</body>
</html>