<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');

echo json_encode([
    [
        "id" => 1,
        "name" => "Classic White T-Shirt",
        "price" => 29.99,
        "description" => "Premium cotton t-shirt perfect for everyday wear",
        "image" => "https://i.pinimg.com/1200x/dc/3e/b4/dc3eb40f49b8823f27320ab75fecc969.jpg"
    ],
    [
        "id" => 2,
        "name" => "Blue Denim Jacket",
        "price" => 79.99,
        "description" => "Stylish denim jacket for casual wear",
        "image" => "https://i.pinimg.com/736x/4e/b4/26/4eb426d7351e4dc20afed8bcc64c3d82.jpg"
    ],
    [
        "id" => 3,
        "name" => "Black Dress",
        "price" => 89.99,
        "description" => "Elegant black dress for special occasions",
        "image" => "https://i.pinimg.com/736x/f9/bc/3d/f9bc3ddaaa35922fe33989a97a96b347.jpg"
    ]
]);
?>