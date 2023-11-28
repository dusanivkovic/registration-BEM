<?php
$host = 'localhost';
$db = 'cars_db';
$user = 'root';
$password = '';

// Create conection
$conn = new mysqli ($host, $user, $password, $db) or die ('connection filed: ' .$conn -> connect_error);
$create_db = "CREATE DATABASE cars_db";
$create_table = "CREATE TABLE cars (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    brend VARCHAR(30),
    model VARCHAR(30),
    price DECIMAL(10, 3),
    used BOOLEAN,
    info VARCHAR(400)
)";
$create_table_user = "CREATE TABLE user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(30),
    mail VARCHAR(30),
    user_pass VARCHAR(30)
)";


// if ($conn -> connect_error) 
// {
//     die ('connection filed: ' .$conn -> connect_error);
// } else 
// {
//     echo 'Connection saccessfully!';
// }

// if ($conn -> query($create_db))
// {
//     echo "Create database successfuly!";
// } else
// {
//     echo "Error creating database: ". $conn -> connect_error;
// }

// if ($conn -> query($create_table)) 
// {
//     echo "Create table successfuly!";
// } else
// {
//     echo "Error creating table" . $conn -> connect_error;
// }



$select = "SELECT * FROM cars";
$cars = ($conn -> query($select)) -> fetch_all(MYSQLI_ASSOC);


// $cars -> free_result ();
// $conn -> close();
