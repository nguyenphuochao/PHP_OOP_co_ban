<?php

require_once './connectDB.php';

$customerID = 1;

$sql = "SELECT orders.id, orders.code, customer.name AS customer_name
        FROM orders
        JOIN customers ON orders.customer_id = customer.id
        WHERE customer.id = :customer_id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":customer_id", $customerID, PDO::PARAM_INT);

$stmt->execute();

$results = $stmt->fetchAll();

foreach ($results as $row) {
    echo "OrderID : " . $row["id"]
        . ", Order code : " . $row["code"]
        . ", Customer : " . $row["customer_name"] . PHP_EOL;
}
