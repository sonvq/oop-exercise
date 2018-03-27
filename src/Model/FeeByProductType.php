<?php

namespace Shipping\Model;

use Shipping\Model\Interfaces\Fee;
use Shipping\Model\Product;

class FeeByProductType implements Fee {

    public function __construct() {
        
    }

    public function feeCalculation(Product $product) {
        /*
         * TODO add implementation
         */
        return 0;
    }

}
