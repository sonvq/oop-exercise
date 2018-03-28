<?php

namespace Shipping\Model;

use Shipping\Model\Product;
use Shipping\Model\Interfaces\Fee;

/**
 * A class to calculate the shipping fee of product base on its weight
 * 
 * @class FeeByWeight
 */
class FeeByWeight implements Fee {

    /**
     * Configurable weightCoefficient
     * Example coefficients: weight_coefficient: $11/kg 
     *
     * @var float $weightCoefficient
     */
    private $weightCoefficient;

    /**
     * Getter
     * 
     * @return float $weightCoefficient
     */
    public function getWeightCoefficient() {
        return $this->weightCoefficient;
    }

    /**
     * Setter
     * 
     * @param float $weightCoefficient
     */
    public function setWeightCoefficient($weightCoefficient) {
        $this->weightCoefficient = $weightCoefficient;
    }

    /**
     * Constructor
     * 
     * @param float $weightCoefficient default is 11
     */
    public function __construct($weightCoefficient = 11) {
        $this->weightCoefficient = $weightCoefficient;
    }

    /**
     * fee_by_weight = product_weight x weight_coefficient 
     * 
     * @param Product $product
     * @return float result shipping fee base on weight
     */
    public function feeCalculation(Product $product) {
        return $product->getWeight() * $this->weightCoefficient;
    }

}
