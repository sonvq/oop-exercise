<?php

namespace Shipping\Services;

use Shipping\Model\Order;

/**
 * A class to calculate the gross price of an order (an order may contain many products)
 * 
 * @class ShippingService
 */
Class ShippingService {

    /**
     * Default grossPrice of an order is $0
     *
     * @var float $grossPrice
     */
    private $grossPrice = 0;

    /**
     * Function calculation
     * Gross price = SUM (price of each product base on feeMethods)
     * 
     * @param Order $order
     * @param array $feeMethods
     * 
     * @return float grossPrice - gross price of order
     */
    public function calculateGrossPrice(Order $order, $feeMethods = []) {
        // If order contains at least one product, then gross price is the sum of each product's price
        if (count($order->getProducts()) > 0) {
            foreach ($order->getProducts() as $singleProduct) {
                // Find the max value of all fee methods for each product
                if (count($feeMethods) > 0) {
                    $arrFee = [];
                    foreach ($feeMethods as $feeClass => $defaultValue) {
                        $feeObject = new $feeClass($defaultValue);
                        $feePrice = $feeObject->feeCalculation($singleProduct);
                        $arrFee[] = $feePrice;
                    }
                }
                // product_price = amazon_price + max (fee_by_weight, fee_by_dimensions, ...)  
                $productPrice = $singleProduct->getAmazonPrice() + max($arrFee);
                $this->grossPrice += $productPrice;
            }
        }
        return $this->grossPrice;
    }

}
