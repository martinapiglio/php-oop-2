<?php

    require_once './Models/Product.php';
    require_once './Models/Products/Food.php';
    require_once './Models/Products/Toy.php';
    require_once './Models/Products/Medicine.php';
    require_once 'db.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="container py-3">

        <h1 class="p-2">Food</h1>

        <div class="d-flex d-row justify-content-between">

            <?php
                foreach ($food as $foodProd) {
            ?>

            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?= $foodProd->img ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $foodProd->name ?></h5>
                <p><strong><i><?= $foodProd->brand ?></i></strong></p>
                <p class="card-text"> <small><?= $foodProd->type ?></small> </p>
                
                <?php 
                    if($foodProd->category == 'dog'){
                ?>
                        <i class="fa-solid fa-dog pb-3"></i>
                <?php
                    } else if($foodProd->category == 'cat') {
                ?>
                        <i class="fa-solid fa-cat pb-3"></i>
                <?php
                    }
                ?>

                <p class="card-text"><?= $foodProd->description ?></p>
                <p class="card-text"><?= $foodProd->price ?> €</p>
                
                <a href="#" class="btn btn-dark">Add to Chart</a>
            </div>
            </div>
                
            <?php
                }
            ?>

        </div>

        <h1 class="p-2">Toys</h1>

        <div class="d-flex d-row justify-content-between">

            <?php
                foreach ($toys as $toy) {
            ?>

            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?= $toy->img ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $toy->name ?></h5>
                <p><strong><i><?= $toy->brand ?></i></strong></p>

                <?php 
                    if($toy->category == 'dog'){
                ?>
                        <i class="fa-solid fa-dog pb-3"></i>
                <?php
                    } else if($toy->category == 'cat') {
                ?>
                        <i class="fa-solid fa-cat pb-3"></i>
                <?php
                    }
                ?>

                <p> <strong>Color:</strong> <?= $toy->color ?> </p>
                <p> <strong>Material:</strong> <?= $toy->material ?> </p>
                <p class="card-text"><?= $toy->description ?></p>
                <p class="card-text"><?= $toy->price ?> €</p>
                
                <a href="#" class="btn btn-dark">Add to Chart</a>
            </div>
            </div>
                
            <?php
                }
            ?>

        </div>

        <h1 class="p-2">Medicine</h1>

        <div class="d-flex d-row gap-5">

            <?php
                foreach ($medicine as $medProd) {
            ?>

            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?= $medProd->img ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $medProd->name ?></h5>
                <p><strong><i><?= $medProd->brand ?></i></strong></p>

                <?php 
                    if($medProd->category == 'dog'){
                ?>
                        <i class="fa-solid fa-dog pb-3"></i>
                <?php
                    } else if($medProd->category == 'cat') {
                ?>
                        <i class="fa-solid fa-cat pb-3"></i>
                <?php
                    }
                ?>

                <p> <strong>Type:</strong> <?= $medProd->type ?> </p>
                <p class="card-text"><?= $medProd->description ?></p>
                <p class="card-text"><?= $medProd->price ?> €</p>
                
                <a href="#" class="btn btn-dark">Add to Chart</a>
            </div>
            </div>
                
            <?php
                }
            ?>

        </div>

    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>