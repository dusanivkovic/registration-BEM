<?php

require 'functions.php';

if (!isset($_POST['user_name'])) 
{
    die('Empty field');
}
if (!isset($_POST['user_password']))
{
    die('Password do not exsist!');
}
$user_name = strtolower($_POST['user_name']);
$user_email = strtolower($_POST['user_mail']);
$user_password = strtolower($_POST['user_password']);
$user_gender = $_POST['gender'];
dump($user_gender);
if ($user_name == 'dusan') 
{
    echo 'Tax free! ' .$user_name. '<br>';
    echo price (100, 0);
} else {
    echo price(100,20);
}

if ($user_name == 'admin') 
{
    echo 'dobrodosao '. $user_name . '!';
}

if ($user_password != $_POST['user_password_again']) 
{
    echo 'Polja se ne poklapaju';
}
