<?php 

// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

echo $name;
echo "<br>";
echo $mail;
echo "<br>";
echo $age;


if (strlen($name) > 1 && strpos($mail, "@") && strpos($mail, ".") && is_numeric($age)) {
   echo "<h1>Accesso consentito</h1>";
} else{
   echo "<h1>Accesso negato</h1>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack PHP</title>
</head>
<body>
   
   <h5>Inserisci in get un nome, una mail (con "@" e ".") e la tua età</h5>
   
</body>
</html>