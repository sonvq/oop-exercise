<?php

namespace Shipping\Model\Interfaces;

use Shipping\Model\Product;

interface Fee {
    /*
     * The calculation for specific fee method, each fee method will have different formula
     */
    public function feeCalculation(Product $product);
}
