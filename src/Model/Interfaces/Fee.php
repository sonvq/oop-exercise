<?php

namespace Shipping\Model\Interfaces;

use Shipping\Model\Product;

interface Fee {
    /*
     * The general calculation for each fee method, each fee method will have different formula
     * 
     * @param Product $product
     */
    public function feeCalculation(Product $product);
}
