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

        <h1 class="p-2">Animal Shop</h1>

        <div class="d-flex d-row gap-5 flex-wrap">

            <?php
                foreach ($products as $product) {
            ?>

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= $product->img ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-info">
                                <?= $product->name ?>
                            </h5>
                            <strong>
                                <i><?= $product->brand ?></i>
                            </strong>
                                <br>
                            <small>
                                <i class="fa-solid <?= $product->getCategory()->getIcon() ?> my-3"></i>
                            </small>

                            <p>
                                <?php

                                    switch(get_class($product)) {

                                        case 'Food':
                                        echo "<strong>Composition</strong>: " . $product->getFoodType();
                                        break;

                                        case 'Toy':
                                        echo "<strong>Material</strong>: " .  $product->getMaterial();
                                        break;

                                        case 'Medicine':
                                        echo "<strong>Type</strong>: " .  $product->getType() . "<br> <strong>Prescription</strong>: " . $product->getPrescription();
                                        break;

                                        default: 
                                        echo "<br>";
                                        break;
                                    }

                                ?>
                                </p>

                            <p class="card-text">
                                <?= $product->description ?>
                            </p>
                            <p class="card-text">
                                <?= $product->getPrice() ?>
                            </p>
                            
                            <a href="#" class="btn btn-info text-white">Add to Chart</a>
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