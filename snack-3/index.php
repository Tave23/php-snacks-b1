<?php

// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Massimo Moratti',
            'text' => 'suscipit iste nobis corrupti voluptates dolorem'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Gerry Scotti',
            'text' => 'suscipit iste nobis corrupti voluptates dolorem'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Papa Francesco',
            'text' => 'Voluptas hic aspernatur optio et, molestiae voluptate laboriosam maiores! Quasi ratione consequuntur atque aliquam voluptates magnam beatae qui debitis dolorum commodi.'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michelle Hunkizer',
            'text' => 'sit amet, amet necessitatibus?'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Alberto Tomba',
            'text' => 'sit amet, consectetur adipisicing elit. Dolore corporis illum delectus deleniti officiis eum expedita ipsa iusto eligendi ducimus dolor molestias commodi repudiandae optio, amet necessitatibus?'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Sergio Mattarella',
            'text' => 'Voluptas hic aspernatur optio et, molestiae voluptate laboriosam maiores! Quasi ratione consequuntur atque aliquam voluptates magnam beatae qui debitis dolorum commodi.'
        ]
    ],
];

foreach(array_keys($posts) as $singlePost){

   for ($i=0; $i < count($posts[$singlePost]); $i++){
      
      $singlePostArray = $posts[$singlePost][$i];
      echo "<br> {$singlePost} => <br> ";

      foreach(array_keys($singlePostArray) as $keyArray){

      echo " <li> {$keyArray} => {$singlePostArray[$keyArray]} </li> ";
     }
   }

   echo "<hr>";
 };

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack 3</title>
</head>
<body>


</body>
</html>