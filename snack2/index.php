
<?php 

//Snack 2
//Con un form passare come parametri GET name, mail e age e verificare 
//(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
//che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


function getData(){
    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        if (empty($name) || empty($email) || empty($age)) {
            echo 'Inserire dei valori nei campi';
        } else {
            control($name, $email, $age);
        }
    }
}
function control($name,$email,$age){
    if (strlen($name) > 2 && strpos($email, '.') !== false && strpos($email, '@') && is_numeric($age)) {
        //echo "nome: $name email: $email età: $age";
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
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
    <title>Snack2</title>

</head>


<body>
  
<h2>Snack 2</h2>
        <form action="index.php" method="GET">
            <input type="text" placeholder="Inserisci nome" name="name">
            <input type="email" placeholder="Inserisci una email" name="email">
            <input type="number" placeholder="Inserisci la tua età" name="age">
            <button type="submit">Invia</button>
        </form>
            <?php
           getData();
            ?>

</body>
</html>