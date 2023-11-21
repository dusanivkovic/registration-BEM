<?php
require 'config.php';
require 'functions.php';
$brend = $_POST['brend'];
$model = $_POST['model'];
$price = $_POST['price'];
$used = $_POST['used'];
$info = $_POST['info'];


$insert_data = "INSERT INTO cars (
    brend, model, price, used, info 
) VALUES (
    '$brend', '$model', '$price', '$used[0]', '$info')";
if ($conn -> query($insert_data)) 
{
    echo "Data successfuly inserted into table";
} else
{
    echo "Error inserting data: " .$insert_data. " Error " .$conn -> connect_error;
}
$conn -> close();
header("location: index.php");
?>

<pre>
    <?php var_dump($used); ?>
</pre>
