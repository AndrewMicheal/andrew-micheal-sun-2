<?php

$priceNumber = 0;

function getPriceWithDiscount() {
    return $GLOBALS['priceNumber'];
}

function priceAfterDiscount($price) {
    $GLOBALS['priceNumber'] = ($price < 1000) ? $price * 0.1 : $price * 0.05;
}