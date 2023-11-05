<?php
function price ($price, $tax) 
{
    return 'Cijena s PDV: ' .$price + $price * $tax / 100 .'<br>';
}
function dump ($val) {
    echo var_dump ($val);
}
function car_in_used ($used_car) 
{
    if ($used_car['use'])
        return 'Used';
    return 'New';
}
function btn_color ($used_car) 
{
    if ($used_car['use'])
        return 'button-accent';
    return 'button-green';
}
function car_filter ($arr, $criteria)
{
    global $criteria;
    return $arr['id'] == $criteria;
}