<?php
function price_pdv ($price_prod, $tax) 
{
    return 'Cijena s PDV: ' .$price_prod + $price_prod * $tax / 100 .'<br>';
}
function dump ($val) {
    echo var_dump ($val);
}
function car_in_used ($used_car) 
{
    if ($used_car['used'])
        return 'Used';
    return 'New';
}
function btn_color ($used_car) 
{
    if ($used_car['used'])
        return 'button-accent';
    return 'button-green';
}
function car_filter ($arr, $criteria)
{
    global $criteria;
    return $arr['id'] == $criteria;
}