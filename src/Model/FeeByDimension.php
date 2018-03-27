<?php

namespace Shipping\Model;

use Shipping\Model\Interfaces\Fee;
use Shipping\Model\Product;

class FeeByDimension implements Fee {

    private $dimensionCoefficient;

    public function getDimensionCoefficient() {
        return $this->dimensionCoefficient;
    }

    public function setDimensionCoefficient($dimensionCoefficient) {
        $this->dimensionCoefficient = $dimensionCoefficient;
    }

    public function __construct($dimensionCoefficient = 11) {
        $this->dimensionCoefficient = $dimensionCoefficient;
    }

    /*
     * fee_by_dimension = width x height x depth x dimension_coefficient 
     */
    public function feeCalculation(Product $product) {
        return $product->getWidth() * $product->getHeight() * $product->getDepth() * $this->dimensionCoefficient;
    }

}
