<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');

require ('database/User.php');
// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();
//$budgetoptions = $product->getData('specifications');
//print_r($product_shuffle);
$user = new User($db);


// Cart object
$Cart = new Cart($db );
