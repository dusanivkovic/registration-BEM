<?php 
include 'partials/header.php';
include 'partials/main.php'; 
require 'config.php';
require 'functions.php';

const NAME_REQUIRED = 'Please enter your name';
const EMAIL_REQUIRED = 'Please enter your email';
const EMAIL_INVALID = 'Please enter a valid email';
const PASSWORD_CONFIRM = 'Your password must match';
$errors = [];


if (isset($_POST['submit'])) {
    $user_name = $_POST['user-name'];
    $user_mail = $_POST['user-mail'];
    $user_password = $_POST['user-password'];
    $repeat_password = $_POST['password-again'];
    $date_birth = "{$_POST['year-birth']}-{$_POST['month-birth']}-{$_POST['day-birth']}";
    $user_registration = "INSERT INTO user_account VALUES ('', '$user_name', '$user_mail', '$user_password', '$date_birth')";
    if ($user_password != $repeat_password)
    {
        $message = 'Your password does not match! Try again!';
        header('location: registration-user.php?error=confirm');
    }elseif ($conn -> query($user_registration))
    {
        echo 'Insert data successfuly!';
        header('location: index.php');
    }else
    {
        echo 'Error inserting data! '. $user_registration . $conn -> connect_error;
    }
}else
{

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
    }else 
    {
        if ($_GET['error'] == 'confirm')
        {
            $errors['confirm'] = PASSWORD_CONFIRM;
            echo $errors['confirm'].' Try again! <a href="registration-user.php?options=registration">...</a>';
        }
    }
}
if (isset($_POST['login']))
{
    $user_mail = filter_input(INPUT_POST, 'user-mail', FILTER_SANITIZE_EMAIL);
    $user_password = filter_input(INPUT_POST, 'user-password', FILTER_SANITIZE_ENCODED);
    echo $user_password;

}
?>
<?php
$conn -> close();
include 'partials/footer.php'; ?>

    

