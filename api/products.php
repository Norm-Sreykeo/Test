<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');

$products = [
    [
        "id" => 1,
        "name" => "Classic Dress",
        "price" => 29.99,
        "description" => "Premium cotton t-shirt perfect for everyday wear",
        "image" => "https://i.pinimg.com/1200x/c3/08/b8/c308b8715d88ca87b8fbe0d19b0da85e.jpg"
    ],
    [
        "id" => 2,
        "name" => "Blue Denim Dress",
        "price" => 69.99,
        "description" => "Stylish denim jacket for casual wear",
        "image" => "https://i.pinimg.com/1200x/6f/d4/c6/6fd4c624ce6e6ad2d08aa6a5d4281e34.jpg"
    ],
    [
        "id" => 3,
        "name" => "Black Dress",
        "price" => 89.99,
        "description" => "Elegant black dress for special occasions",
        "image" => "https://i.pinimg.com/736x/f9/bc/3d/f9bc3ddaaa35922fe33989a97a96b347.jpg"
    ],
    [
        "id" => 4,
        "name" => "Classic Denim Dress",
        "price" => 49.99,
        "description" => "Elegant black dress for special occasions",
        "image" => "https://i.pinimg.com/1200x/c3/08/b8/c308b8715d88ca87b8fbe0d19b0da85e.jpg"
    ],
    [
        "id" => 5,
        "name" => "Elegant Summer Dress",
        "price" => 49.99,
        "description" => "Lightweight and breezy, perfect for warm days and special occasions.",
        "image" => "https://i.pinimg.com/736x/3a/aa/f0/3aaaf0707c98512b3d9fb95d0c176fcd.jpg"
    ],
    [
        "id" => 6,
        "name" => "Women's Knit Sweater",
        "price" => 29.99,
        "description" => "Soft cotton shirt with a modern fit. Ideal for both work and play.",
        "image" => "https://i.pinimg.com/736x/7d/80/b9/7d80b9afe4f1e97263ca6f797fe79f10.jpg"
     ],
    [
         "id" => 7,
         "name" => "Slim Fit Shirt",
         "price" => 39.99,
         "description" => "Comfortable and stylish shirt for everyday wear.",
         "image" => "https://i.pinimg.com/736x/44/bd/27/44bd279b1e8c5aae003bac5618e83f59.jpg"
    ],
    [
         "id" => 8,
         "name" => "Women's Knit Sweater",
         "price" => 199.99,
         "description" => "Cozy and stylish knit sweater, available in multiple colors.",
         "image" => "https://i.pinimg.com/736x/7d/80/b9/7d80b9afe4f1e97263ca6f797fe79f10.jpg"
    ]
];

// If an ID is provided, return only that product
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    foreach ($products as $product) {
        if ($product['id'] === $id) {
            echo json_encode($product);
            exit;
        }
    }
    // If not found, return an empty object
    echo json_encode([]);
    exit;
}

// Otherwise, return all products
echo json_encode($products);
?>