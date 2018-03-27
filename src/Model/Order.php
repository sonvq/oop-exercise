<?php

namespace Shipping\Model;

use Shipping\Model\Product;

class Order {

    private $products = [];

    public function __construct($products = []) {
        $this->products = $products;
    }

    public function getProducts() {
        return $this->products;
    }

    public function setProducts($products = []) {
        $this->products = $products;
    }

    public function addProducts(Product $product) {
        return $this->products[] = $product;
    }

    public function removeProducts(Product $product) {
        if (($key = array_search($product, $this->products)) !== false) {
            unset($this->products[$key]);
        }
    }

}
