<?php
$host = 'localhost';
$db = 'cars_db';
$user = 'root';
$password = '';

// Create conection
$conn = new mysqli ($host, $user, $password, $db);

if ($conn -> connect_error) 
{
    die ('connection filed: ' .$conn -> connectio_error);
} else 
{
    echo 'Connection saccessfully!';
}
$select = "SELECT * FROM cars";
$cars = $conn->query($select);
$cars -> fetch_array(MYSQLI_ASSOC);

var_dump($cars);

if ($cars -> num_rows > 0) 
{
    foreach ($cars as $row ) 
    {
        echo "id: " . $row["id"]. " - Brend: " . $row["brend"]. "- Model: " . $row["model"]. "<br>";
    }
} 
// $cars -> free_result ();
$conn -> close();
