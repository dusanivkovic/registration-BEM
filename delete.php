<?php
    require 'config.php';
    $d = $_GET['id'];
    $delete_car = "DELETE FROM cars WHERE  id = $d";

    if ($conn -> query($delete_car))
    {
        echo 'Successfuly delete car!';
    } else
    {
        echo 'Error deleting car'. $conn -> connect_error;
    }
    header('location: product.php');
    $conn -> close();
