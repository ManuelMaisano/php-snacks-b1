<?php

//Snack 3
//Creare un array di array. 
//Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
//e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

$posts = [

    '10/01/2024' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'ciao'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'come stai?'
        ],
    ],
    '10/02/2024' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'ci 6?'
        ]
    ],
    '15/05/2024' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'buondì'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'tutto ok?'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'ok...'
        ]
    ],
];



function getPosts($posts)
{
    foreach ($posts as $date => $post) {
        echo $date . "<br>";
        foreach ($post as $posts) {
            echo $posts["title"] . " : " . "<br>";
            echo $posts["author"] . " - ";
            echo $posts["text"] . "<br><br>";
        }
    }
};






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
    <title>Snack3</title>

</head>

<h1>Snack 3</h1>
<div> <?php getPosts($posts)  ?></div>

<body>


</body>

</html>