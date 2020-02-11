<?php

return [
    '/' => 'site/index',

    'purchase' => 'purchase/index',
    'individual-purchase' => 'individual-purchase/index',

    'payment-payneteasy-result' => 'payment-result/pay-net-easy-result',
    'payment-cloudpayments-result' => 'payment-result/cloud-payments-result',
    'payment-uniteller-result' => 'payment-result/uniteller-result',

    'discount' => 'discount/index',
    'subscribe' => 'subscribe/index',
    'product-filter' => 'product-filter/index',

    'search' => 'search/index',

    'kontakty' => 'site/contacts',

    'cart' => 'purchase/cart',
    'checkout' => 'purchase/checkout',

    'simple-payment' => 'purchase/simple-payment',
    'simple-checkout' => 'purchase/simple-checkout',

    'catalog' => 'product-category/index',
    'catalog/<category_slug>' => 'product-category/view',
    'catalog/<category_slug>/<product_slug>' => 'product/view',

    '<slug>' => 'page/view',
];