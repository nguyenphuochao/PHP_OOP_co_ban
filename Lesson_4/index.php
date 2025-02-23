<?php
require_once './Product.php';
require_once './CartItem.php';
require_once './Cart.php';

// tạo sản phẩm
$product1 = new Product(1, "Product 1", 1000);
$product2 = new Product(2, "Product 2", 2000);

// tạo giỏ hàng
$cart = new Cart();
$cart->addProduct($product1, 10);
$cart->addProduct($product2, 10);

echo '<pre>';

// hiển thị giỏ hàng
$cart->displayCart();

// xóa giỏ hàng
// $cart->removeProduct(2);
// $cart->displayCart();

// cập nhật giỏ hàng
$cart->updateProduct(1, 100);
$cart->displayCart();

