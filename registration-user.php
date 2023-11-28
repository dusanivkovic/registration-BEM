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
    $file = $option . '/inbdex.php';
    if (file_exists($file))
    {
        include_once ($file);
    }else 
    {
        echo 'Error 404. File not found!';
    }
    // dump ($file);
}else 
{
?>
    <form action="registration/index.php" method="post" class="direction-col-center registration-form">
        <label for="user-name" class="registration-form__label">Full name</label>
        <input type="text" name="user-name" class="input-field" placeholder="e-mail">
        <label for="user-mail" class="registration-form__label">Your e-mail</label>
        <input type="text" name="user-mail" class="input-field" placeholder="Name">
        <label for="user-password" class="registration-form__label">Password</label>
        <input type="password" name="user-password" class="input-field" placeholder="Password">
        <button type="submit" name="submit">Submit</button>
    </form> 
<?php   
}
?>
<?php include 'partials/footer.php'; ?>

    

