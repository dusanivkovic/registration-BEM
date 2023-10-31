<?php
function price ($price, $tax) 
{
    return 'Cijena s PDV: ' .$price + $price * $tax / 100 .'<br>';
}
function dump ($val) {
    echo var_dump ($val);
}