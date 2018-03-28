<?php

namespace Shipping\Model;

use Shipping\Model\Product;

/**
 * Order model containing all attributes of an order
 * 
 * @class Order
 */
class Order {

    /**
     * @var array $products, an order might contain many products
     */
    private $products = [];

    /**
     * Constructor
     * 
     * @param array $products
     */
    public function __construct($products = []) {
        $this->products = $products;
    }

    /**
     * GETTER
     * 
     * @return array $products
     */
    public function getProducts() {
        return $this->products;
    }

    /**
     * SETTER
     * 
     * @param array $products
     */
    public function setProducts($products = []) {
        $this->products = $products;
    }

    /**
     * Function to add a single product to existing order
     * 
     * @param Product $product
     */
    public function addProducts(Product $product) {
        return $this->products[] = $product;
    }

    /**
     * Function to remove a single product from existing order
     * 
     * @param Product $product
     */
    public function removeProducts(Product $product) {
        if (($key = array_search($product, $this->products)) !== false) {
            unset($this->products[$key]);
        }
    }
    
    /**
     * Function to remove all products from an order
     * 
     */
    public function emptyProducts() {
        return $this->products = [];
    }

}
