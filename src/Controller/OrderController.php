<?php

namespace Shipping\Controller;

use Shipping\Model\Product;
use Shipping\Model\Order;
use Shipping\Services\ShippingService;

class OrderController {

    public function index() {

        /*
         * Array of fee methods that will be applied to calculate order gross price
         * Key is the namespace of fee method
         * Value is the default coefficient/type value for the fee method
         * 
         * When new fee type added, 
         * just need to create new Fee class implement Fee interface and add to this feeMethod
         */
        $feeMethods = [
            'Shipping\Model\FeeByDimension' => 11,
            'Shipping\Model\FeeByWeight' => 11,
            'Shipping\Model\FeeByProductType' => [],
            // 'Shipping\Model\FeeByWhatever' => 17,
            // ...others fee type go here
        ];

        /*
         * Create some example products
         * Product($weight, $width, $height, $depth, $amazonPrice)
         */        
        $product1 = new Product(1, 1.1, 0.21, 0.13, 14);
        $product2 = new Product(2, 1.3, 3.1, 0.13, 10);
        $product3 = new Product(0.5, 2.3, 0.31, 0.13, 9);
        $product4 = new Product(1.2, 2.3, 0.31, 0.13, 7);

        $order = new Order();
        // Set product 1, 2, 3 to the order
        $order->setProducts([$product1, $product2, $product3]);

        // Add product 4 to the existing order
        $order->addProducts($product4);
        
        // Remove product 3 from the existing order
        $order->removeProducts($product3);
        
        // Initial the shipping service to calculate order gross price
        $shippingFeeService = new ShippingService();
        $shippingPrice = $shippingFeeService->calculateGrossPrice($order, $feeMethods);
        
        // Output the order gross price to the screen
        echo 'Order\'s gross price is: $' . $shippingPrice;
    }

}
