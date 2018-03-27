<?php

namespace Shipping\Model;

use Shipping\Model\Product;
use Shipping\Model\Interfaces\Fee;

class FeeByWeight implements Fee {

    private $weightCoefficient;

    public function getWeightCoefficient() {
        return $this->weightCoefficient;
    }

    public function setWeightCoefficient($weightCoefficient) {
        $this->weightCoefficient = $weightCoefficient;
    }

    public function __construct($weightCoefficient = 11) {
        $this->weightCoefficient = $weightCoefficient;
    }

    /*
     * fee_by_weight = product_weight x weight_coefficient 
     */
    public function feeCalculation(Product $product) {
        return $product->getWeight() * $this->weightCoefficient;
    }

}
