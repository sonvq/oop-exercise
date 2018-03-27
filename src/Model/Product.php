<?php

namespace Shipping\Model;

class Product {

    private $weight;
    private $width;
    private $height;
    private $depth;
    private $amazonPrice;

    public function __construct($weight, $width, $height, $depth, $amazonPrice) {
        /*
         * Weight by kg
         */
        $this->weight = $weight;

        /*
         * Width by meter
         */
        $this->width = $width;

        /*
         * Height by meter
         */
        $this->height = $height;

        /*
         * Depth by meter
         */
        $this->depth = $depth;

        /*
         * amazonPrice by dollar
         */
        $this->amazonPrice = $amazonPrice;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getDepth() {
        return $this->depth;
    }

    public function getAmazonPrice() {
        return $this->amazonPrice;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function setDepth($depth) {
        $this->depth = $depth;
    }

    public function setAmazonPrice($amazonPrice) {
        $this->amazonPrice = $amazonPrice;
    }

}
