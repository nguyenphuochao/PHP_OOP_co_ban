<?php 
require_once './connectDB.php';

$sql = "SELECT * FROM products";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$results = $stmt->fetchAll();

// print_r($results);

foreach($results as $row) {
    echo $row["name"] . " - " . $row["price"] . PHP_EOL;
}