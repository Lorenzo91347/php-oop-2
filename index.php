<?php
require_once __DIR__."/models/product.php";
require_once __DIR__."/models/category.php";
require_once __DIR__."/models/type.php";

$toy = new Type('Toy');
$food = new Type('Food');

$cat = new Category('Cat');
$dog = new Category('Dog');

$prod1 = new Product('Red Ball','yes', 50 , 6,$dog,$toy);
$prod2 = new Product('Cat Food','no', 60 , 2,$cat,$food);

var_dump($prod1,$prod2)






 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Pet Products</title>
 </head>
 <body>
   
    
 </body>
 </html>
