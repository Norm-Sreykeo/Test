<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');

$products = [
    [
        "id" => 1,
        "name" => "Classic White T-Shirt",
        "price" => 29.99,
        "description" => "Premium cotton t-shirt perfect for everyday wear",
        "image" => "https://i.pinimg.com/1200x/fc/e3/45/fce3454410442d8c55469235c192ab94.jpg"
    ],
    [
        "id" => 2,
        "name" => "Elegant Black Dress",
        "price" => 89.99,
        "description" => "Sophisticated black dress for special occasions",
        "image" => "https://i.pinimg.com/1200x/aa/ea/81/aaea81104ffc321db8a3a6c8d60ff585.jpg"
    ],
    [
        "id" => 3,
        "name" => "Leather Wallet",
        "price" => 49.99,
        "description" => "Genuine leather wallet with multiple card slots",
        "image" => "https://i.pinimg.com/736x/00/4f/76/004f764965e3dfc5fa955a535702d83e.jpg"
    ],
    // Add more products as needed
];

echo json_encode($products);
?>
