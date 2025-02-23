<?php
class Cart
{
    private $items = [];

    // Thêm sản phẩm vào giỏ hàng
    public function addProduct(Product $product, $quantity = 1)
    {
        $productID = $product->getId();

        if (isset($this->items[$productID])) {
            $currentQuantity = $this->items[$productID]->getQuantity();
            $this->items[$productID]->setQuantity($currentQuantity + $quantity);
        } else {
            $this->items[$productID] = new CartItem($product, $quantity);
        }
    }

    // Xóa sản phẩm khỏi giỏ hàng dựa vào ID
    public function removeProduct($productID)
    {
        if (isset($this->items[$productID])) {
            unset($this->items[$productID]);
        }
    }

    // Cập nhật số lượng giỏ hàng dựa vào ID
    public function updateProduct($productID, $quantity)
    {
        if (isset($this->items[$productID])) {
            $this->items[$productID]->setQuantity($quantity);
        }
    }

    // Tổng tiền
    public function getTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getTotalPrice();
        }

        return $total;
    }

    // Tổng số lượng giỏ hàng
    public function getTotalCart()
    {
        $total_cart = 0;
        foreach ($this->items as $item) {
            $total_cart += $item->getQuantity();
        }

        return $total_cart;
    }

    // hiển thị giỏ hàng
    public function displayCart()
    {
        foreach ($this->items as $item) {
            $product = $item->getProduct();

            echo $product->getName()
                . " - Giá sản phẩm : " . $product->getPrice()
                . " - Số lượng : " . $item->getQuantity()
                . " - Thành tiền : " . $item->getTotalPrice() . "\n";
        }

        echo "Tổng tiền : " . $this->getTotal() . "\n";
        echo "Tổng số lượng giỏ hàng : " . $this->getTotalCart() . "\n";
    }
}
