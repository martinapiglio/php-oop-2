<?php

    require_once './Models/Product.php';
    require_once 'db.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>

<?php 
    foreach($products as $product) echo $product->price
?>

</body>
</html>