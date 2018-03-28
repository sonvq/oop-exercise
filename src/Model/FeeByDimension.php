<?php

namespace Shipping\Model;

use Shipping\Model\Interfaces\Fee;
use Shipping\Model\Product;

/**
 * A class to calculate the shipping fee of product base on its Dimension
 * 
 * @class FeeByDimension
 */
class FeeByDimension implements Fee {

    /**
     * Configurable dimensionCoefficient
     * Example coefficients: dimension_coefficient: $11/m3 
     *
     * @var float $dimensionCoefficient
     */
    private $dimensionCoefficient;

    /**
     * Getter
     * 
     * @return float $dimensionCoefficient
     */
    public function getDimensionCoefficient() {
        return $this->dimensionCoefficient;
    }

    /**
     * Setter
     * 
     * @param float $dimensionCoefficient
     */
    public function setDimensionCoefficient($dimensionCoefficient) {
        $this->dimensionCoefficient = $dimensionCoefficient;
    }

    /**
     * Constructor
     * 
     * @param float $dimensionCoefficient default is 11
     */
    public function __construct($dimensionCoefficient = 11) {
        $this->dimensionCoefficient = $dimensionCoefficient;
    }

    /**
     * fee_by_dimension = width x height x depth x dimension_coefficient 
     * 
     * @param Product $product
     * @return float result shipping fee base on dimension
     */
    public function feeCalculation(Product $product) {
        return $product->getWidth() * $product->getHeight() * $product->getDepth() * $this->dimensionCoefficient;
    }

}
