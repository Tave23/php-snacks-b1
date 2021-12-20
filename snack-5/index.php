<?php 

// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$mainParag = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores deleniti at itaque magni ex rerum nam temporibus voluptatum rem totam facilis quia, est, dicta voluptate ipsum mollitia, nesciunt excepturi vero error. Perferendis quod delectus quis minima illo inventore nihil aut hic iste eum harum, porro nemo sequi tenetur ipsa commodi unde eligendi nostrum odit, quo soluta reiciendis voluptatibus aspernatur suscipit? Sit adipisci fuga suscipit nam quaerat quasi libero sapiente nemo. Blanditiis facere molestias minus magni, sapiente magnam enim. Omnis reiciendis blanditiis minus aspernatur? Nostrum voluptatibus sed obcaecati nam porro, repellendus sunt doloribus sapiente magni repudiandae aut accusamus necessitatibus laboriosam placeat esse incidunt aperiam itaque dolor earum ratione? Omnis, fugit. Minus, veritatis! Officiis, ea laudantium corrupti repellendus sit magnam molestiae praesentium quidem velit at, eaque sunt veniam id nobis labore illo sed veritatis rem perspiciatis! Asperiores nisi sint amet dignissimos repellendus perferendis laudantium quam explicabo ab? Aut eveniet nam eligendi voluptatem.';

echo $mainParag . "<hr>";

print_r (explode(".",$mainParag));

var_dump((explode(".",$mainParag)));

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack-5</title>
</head>
<body>
   
</body>
</html>