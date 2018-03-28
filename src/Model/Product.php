<?php

namespace Shipping\Model;

/**
 * Product model containing all attributes of a product
 * 
 * @class Product
 */
class Product {

    /**
     * @var float $weight by kg
     */
    private $weight;

    /**
     * @var float $width by meter
     */
    private $width;

    /**
     * @var float $height by meter
     */
    private $height;

    /**
     * @var float $depth by meter
     */
    private $depth;

    /**
     * @var float $amazonPrice by dollar
     */
    private $amazonPrice;

    /**
     * Constructor
     * 
     * @param float $weight
     * @param float $width
     * @param float $height
     * @param float $depth
     * @param float $amazonPrice
     */
    public function __construct($weight, $width, $height, $depth, $amazonPrice) {
        $this->weight = $weight;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->amazonPrice = $amazonPrice;
    }

    /**
     * GETTER
     * 
     * @return float $weight
     */
    public function getWeight() {
        return $this->weight;
    }

    /**
     * GETTER
     * 
     * @return float $width
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * GETTER
     * 
     * @return float $height
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * GETTER
     * 
     * @return float $depth
     */
    public function getDepth() {
        return $this->depth;
    }

    /**
     * GETTER
     * 
     * @return float $amazonPrice
     */
    public function getAmazonPrice() {
        return $this->amazonPrice;
    }

    /**
     * SETTER
     * 
     * @param float $weight
     */
    public function setWeight($weight) {
        $this->weight = $weight;
    }

    /**
     * SETTER
     * 
     * @param float $width
     */
    public function setWidth($width) {
        $this->width = $width;
    }

    /**
     * SETTER
     * 
     * @param float $height
     */
    public function setHeight($height) {
        $this->height = $height;
    }

    /**
     * SETTER
     * 
     * @param float $depth
     */
    public function setDepth($depth) {
        $this->depth = $depth;
    }

    /**
     * SETTER
     * 
     * @param float $amazonPrice
     */
    public function setAmazonPrice($amazonPrice) {
        $this->amazonPrice = $amazonPrice;
    }

}
