<?php

require_once __DIR__.'/models/parent.php';

$prod1 = new Category('baby feed','6','Dog','false');
$prod2 = new Category('fluffy toy','1','Cat','true');
$prod3 = new Category('food bowl','4','Dog','true');
$prod4 = new Category('scratching post','2','Cat','false');
$prod5 = new Category('catnip bag','5','Cat','true');




 //var_dump($prod1,$prod2,$prod3,$prod4,$prod5);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Pet Products</title>
 </head>
 <body>
    <ul><?php foreach ($prod1 as $key => $value):?> 
        <li><?php echo $value?></li>
        <?php endforeach;?>
    </ul>
    <ul><?php foreach ($prod2 as $key => $value):?> 
        <li><?php echo $value?></li>
        <?php endforeach;?>
    </ul>
    <ul><?php foreach ($prod3 as $key => $value):?> 
        <li><?php echo $value?></li>
        <?php endforeach;?>
    </ul>
    <ul><?php foreach ($prod4 as $key => $value):?> 
        <li><?php echo $value?></li>
        <?php endforeach;?>
    </ul>
    <ul><?php foreach ($prod5 as $key => $value):?> 
        <li><?php echo $value?></li>
        <?php endforeach;?>
    </ul>
    
 </body>
 </html>
