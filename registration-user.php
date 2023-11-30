<?php 
include 'partials/header.php';
include 'partials/main.php'; 
require 'config.php';
require 'functions.php';
// if ($conn -> query($create_table_user)) 
// {
//     echo 'Error Createing table ' . $conn -> connect_error;
// }else
// {
//     echo 'Craeting table successfuly!';
// }
if (isset($_GET['options'])) 
{
    $option = test_input($_GET['options']);
    $file = $option . '/index.php';
    if (file_exists($file))
    {
        include ($file);
    }else 
    {
        echo 'Error 404. File not found!';
    }
    // dump ($file);
}else 
{
    echo '';
}
?>
<?php include 'partials/footer.php'; ?>

    

