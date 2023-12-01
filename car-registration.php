<?php
require 'config.php';
require 'functions.php';
$brend = $_POST['brend'];
$model = $_POST['model'];
$price = $_POST['price'];
$used = ($_POST['used'][0] == 'used') ? true : false;
$info = $_POST['info'];


$insert_data = "INSERT INTO cars (
    brend, model, price, used, info 
) VALUES (
    '$brend', '$model', '$price', '$used', '$info')";
if ($conn -> query($insert_data)) 
{
    echo "Data successfuly inserted into table";
} else
{
    echo "Error inserting data: " .$insert_data. " Error " .$conn -> connect_error;
}

header("location: index.php");
$conn -> close();
?>

<pre>
    <?php var_dump($used); ?>
</pre>
