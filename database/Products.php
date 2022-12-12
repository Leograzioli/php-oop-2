<?php 

require_once __DIR__ . "/../models/Prodotti.php";
require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/Food.php";
require_once __DIR__ . "/../models/Toy.php";
require_once __DIR__ . "/../models/Kennel.php";

$products = [
    new Food("pistacchio", "10€/kg", "food", new Category("dog"), "salt, pistacchio", "1kg"),
    new Food("whiskas", "30€/kg", "food", new Category("cat"), "salt, other stuff", "20kg"),
    new Toy("ball", "20€", "toy", new Category("dog"), "red", "medium"),
    new Toy("Fish peluche", "25€", "toy", new Category("cat"), "orange and white", "small"),
    new Kennel("kennel for dog", "120€", "kennel", new Category("dog"), "wood", "large"),
    new Kennel("kennel for cat", "100€", "kennel", new Category("cat"), "cardboard", "small")
];