<?php
$logger = new DBLogger();
$product = new product($logger);
$product->setPrice(10);