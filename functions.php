<?php

function dump ($val) {
    echo var_dump ($val);
}

function car_in_used ($used_car) 
{
    if ($used_car['used'])
        return 'Used';
    return 'New';
}// Return string Used or New 

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

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function verification_field ($field)
{
    if (!$field['user_name'])
    {
       return header("location: registration-user.php?error=user-name");
    }
    if (!$field['user_mail'])
    {
        return header("location: registration-user.php?error=user-mail");
    }
    if (!$field['user-password'])
    {
        return header("location: registration-user.php?error=user-password");
    }
}