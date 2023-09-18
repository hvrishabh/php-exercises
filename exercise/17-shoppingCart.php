<?php

class ShoppingCart{
    private $items;
    private $total;
    public function __construct(){
        $this->items = [];
        $this->total = 0;

    }
    public function addItem($item, $price){
        $this->items[$item] = $price;
        $this->total += $price;
    }

    public function getTotal(){
        return $this->total;
    }
}

$cart = new ShoppingCart();
$cart->addItem("Product1", 20);
$cart->addItem("product2", 23);

$total = $cart->getTotal();
echo $total;

// class shoppinCart
// {
//     private $items = 0;
//     private $price;
//     private $total = 0;

//     public function addToCart($items, $price)
//     {
//         $this->items = $items;
//         $this->price = $price;
//         // $items += $items;
//         $price += $price;
//     }
//     public function totalCost()
//     {
//         return $this->total = $this->price;
//     }
// }
