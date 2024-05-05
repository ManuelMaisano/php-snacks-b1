<?php 


//Snack 4
//Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta


             function getRandNumb($min, $max, $nItems){
                $newArray = [];
                while(count($newArray)< $nItems){
                    $number = rand($min, $max);
                    if(!in_array($number, $newArray)){
                        $newArray[] = $number;
                    }
                }
            return $newArray;
            }







?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js" type="module"></script>
    <title>Snack4</title>

</head>


<body>
<h1>snack 4</h1>
        <?php
         $randNums = getRandNumb(1,100,15);
         foreach($randNums as $number){
            echo "$number  ";
         }
        ?>

</body>

</html>