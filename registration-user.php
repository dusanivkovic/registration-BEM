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
$request_method = strtoupper($_SERVER['REQUEST_METHOD']);
if ($request_method == 'GET')
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
        if ($_GET['error'] == 'email_invalid')
        {
            $errors['email'] = EMAIL_INVALID;
            echo $errors['email'];
        }
        if ($_GET['error'] == 'email_required')
        {
            $errors['email'] = EMAIL_REQUIRED;
            echo $errors['email'];
        }
    }
}elseif ($request_method == 'POST')
{
    $user_mail = filter_input(INPUT_POST, 'user-mail', FILTER_SANITIZE_EMAIL);
    $user_name = $_POST['user-name'];
    // $user_mail = $_POST['user-mail'];
    $user_password = $_POST['user-password'];
    $repeat_password = $_POST['password-again'];
    $date_birth = "{$_POST['year-birth']}-{$_POST['month-birth']}-{$_POST['day-birth']}";
    if ($user_mail) {
        // validate email
        $user_mail = filter_var($user_mail, FILTER_VALIDATE_EMAIL);
        if ($user_mail === false) {
            header('location: registration-user.php?error=email_invalid');
            $errors['email'] = '';
        }
    } else {
        header('location: registration-user.php?error=email_required');
        $errors['email'] = '';
    }
    if ($user_password != $repeat_password)
    {
        header('location: registration-user.php?error=confirm');
    }
    if (count($errors) == 0)
    {    
        if (isset($_POST['submit'])) {

            $user_registration = "INSERT INTO user_account VALUES ('', '$user_name', '$user_mail', '$user_password', '$date_birth')";
            if ($conn -> query($user_registration))
            {
                echo 'Insert data successfuly!';
                header('location: index.php');
            }else
            {
                echo 'Error inserting data! '. $user_registration . $conn -> connect_error;
            }
        }elseif (isset($_POST['login']))
        {
            $user_password = filter_input(INPUT_POST, 'user-password', FILTER_SANITIZE_ENCODED);
            echo $user_password;
        }
    }
}

$conn -> close();
include 'partials/footer.php'; ?>

    

