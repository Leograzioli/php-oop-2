<?php
require_once __DIR__ . "/models/Prodotti.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Toy.php";
require_once __DIR__ . "/models/Kennel.php";
require_once __DIR__ . "/database/Products.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row row-cols-3 g-3 text-center">
            <?php foreach ($products as $prod) { ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $prod->name ?></h2>
                            <p class="card-text">Price: <?php echo $prod->getPrice() ?></p>
                            <p class="card-text">Category: <?php echo $prod->category->type ?></p>

                            <?php if(get_class($prod) === "Food") { ?>
                                <p class="card-text">Ingredients: <?php echo $prod->ingredients?></p>
                                <p class="card-text">Weight: <?php echo $prod->kg?>/pack</p>
                            <?php } elseif (get_class($prod) === "Toy") { ?> 
                                <p class="card-text">Color:  <?php echo $prod->color ?></p>
                                <p class="card-text">Size:  <?php echo $prod->size ?></p>
                            <?php } elseif (get_class($prod) === "Kennel") {?>
                                <p class="card-text">Material: <?php echo $prod->material ?></p>
                                <p class="card-text">Size:  <?php echo $prod->size ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


</body>

</html>