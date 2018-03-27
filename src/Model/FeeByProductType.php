<?php

namespace Shipping\Model;

use Shipping\Model\Interfaces\Fee;
use Shipping\Model\Product;

/*
 * A class to calculate the shipping fee of product base on its type
 * 
 * @class FeeByProductType
 */
class FeeByProductType implements Fee {

    public function __construct() {
        
    }

    /*
     * The implementation has not been done yet, but this is an example of
     * how new fee type will be created
     * 
     * @todo Calculate the fee base on type requirement
     * @param Product $product
     * @return int 0, this is only an example
     */
    public function feeCalculation(Product $product) {
        /*
         * TODO add implementation
         */
        return 0;
    }

}
