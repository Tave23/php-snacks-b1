<?php 

$basket = [
   [
     'home' => 'Olimpia Milano',
     'away' => 'Trento',
     'homePoints' => 45,
     'awayPoints' => 56
   ],
   [
      'home' => 'Bologna',
      'away' => 'Torino',
      'homePoints' => 64,
      'awayPoints' => 43
   ],
   [
      'home' => 'Bergamo',
      'away' => 'Bolzano',
      'homePoints' => 26,
      'awayPoints' => 54
   ],
   [
      'home' => 'Sassari',
      'away' => 'Napoli',
      'homePoints' => 65,
      'awayPoints' => 67
   ],
   [
      'home' => 'Palermo',
      'away' => 'Catania',
      'homePoints' => 86,
      'awayPoints' => 54
   ],
   
];

for ($i=0; $i < count($basket); $i++) { 
   echo $basket[$i]['home'] . " - " . $basket[$i]['away'] . " | " . $basket[$i]['homePoints'] . " - " . $basket[$i]['awayPoints'] . "<br>" . "<hr>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack 1</title>
</head>
<body>
   
</body>
</html>