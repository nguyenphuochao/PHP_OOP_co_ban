<?php

require_once './connectDB.php';

$productID = 1; // ID sản phẩm cần cập nhật
$newName = "Update Product Name";
$newPrice = "11000";

$sql = "UPDATE products SET name = :name, price = :price WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":name", $newName, PDO::PARAM_STR);
$stmt->bindParam(":price", $newPrice, PDO::PARAM_STR);
$stmt->bindParam(":id", $productID, PDO::PARAM_INT);

$stmt->execute();

echo "Product updated successfully";
