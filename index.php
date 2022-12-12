<?php

class Category
{
    public $type;

    public function __construct(String $type)
    {
        $this->type = $type;
    }
}

class Prodotti
{
    public $name;
    private $price;
    public $type;
    public $category;

    public function __construct(String $name, String $price, String $type, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->category = $category;
    }

    public function getPrice() {
        return $this->price ;
    }
}

class Food extends Prodotti
{
    public $ingredients;
    public $kg;

    public function __construct(String $name, String $price, String $type, Category $category, String $ingredients, String $kg)
    {
        parent::__construct($name, $price, $type, $category);
        $this->ingredients = $ingredients;
        $this->kg = $kg;
    }
}

class Toy extends Prodotti
{
    public $color;
    public $size;

    public function __construct(String $name, String $price, String $type, Category $category, String $color, String $size)
    {
        parent::__construct($name, $price, $type, $category);
        $this->color = $color;
        $this->size = $size;
    }
}

class Kennel extends Prodotti
{
    public $material;
    public $size;

    public function __construct(String $name, String $price, String $type, Category $category, String $material, String $size)
    {
        parent::__construct($name, $price, $type, $category);
        $this->material = $material;
        $this->size = $size;
    }
}

$products = [
    $pistacchio = new Food("pistacchio", "10€/kg", "food", new Category("dog"), "salt, pistacchio", "1kg"),
    $cat_food = new Food("whiskas", "30€/kg", "food", new Category("cat"), "salt, other stuff", "20kg"),
    $ball = new Toy("ball", "20€", "toy", new Category("dog"), "red", "medium"),
    $Peluche = new Toy("Fish peluche", "25€", "toy", new Category("cat"), "orange and white", "small"),
    $dog_kennel = new Kennel("kennel for dog", "120€", "kennel", new Category("dog"), "wood", "large"),
    $cat_kennel = new Kennel("kennel for cat", "100€", "kennel", new Category("cat"), "cardboard", "small")
];
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

                            <?php if($prod->type === "food") { ?>
                                <p class="card-text">Ingredients: <?php echo $prod->ingredients?></p>
                                <p class="card-text">Weight: <?php echo $prod->kg?>/pack</p>
                            <?php } elseif ($prod->type === "toy") { ?> 
                                <p class="card-text">Color:  <?php echo $prod->color ?></p>
                                <p class="card-text">Size:  <?php echo $prod->size ?></p>
                            <?php } else {?>
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