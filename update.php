<?php
require 'config.php';
require 'functions.php';
// require 'index.php';
$brend = test_input($_POST['brend']);
$model = test_input($_POST['model']);
$price = test_input($_POST['price']);
$info = test_input($_POST['info']);
$used = test_input($_POST['used'][0]);
echo $brend;
echo $used;
$ids = $_GET['id'];
$update_car = "UPDATE cars SET brend = '$brend', model = '$model', price = '$price', used = '$used', info = '$info' WHERE id = '$ids'";
if ($conn -> query($update_car)) 
{
    echo "Data successfuly updated!";
} else
{
    echo "Error inserting data: " .$update_car. " Error " .$conn -> connect_error;
}
$conn -> close();