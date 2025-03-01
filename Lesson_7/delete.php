<?php

require_once './connectDB.php';

$productID = 1; // ID sản phẩm cần xóa

$sql = "DELETE FROM products WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":id", $productID, PDO::PARAM_INT);

$stmt->execute();

echo "Product deleted successfully";
