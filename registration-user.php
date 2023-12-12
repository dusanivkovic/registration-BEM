<?php 
include 'partials/header.php';
include 'partials/main.php'; 
require 'config.php';
require 'functions.php';

const NAME_REQUIRED = 'Please enter your name';
const EMAIL_REQUIRED = 'Please enter your email';
const EMAIL_INVALID = 'Please enter a valid email';
const PASSWORD_CONFIRM = 'Your password must match';
const NAME_INVALID = 'Please enter a valid name';
const PASSWORD_REQUIRED = 'Please enter your password';
const PASSWORD_INVALID = 'Please enter leaset 8 characters';
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
        if ($_GET['error'] == 'name_required')
        {
            $errors['name'] = NAME_REQUIRED;
            echo $errors['name'];
        }
        if ($_GET['error'] == 'name_invalid')
        {
            $errors['name'] = NAME_INVALID;
            echo $errors['name'];
        }
        if ($_GET['error'] == 'password_required')
        {
            $errors['password'] = PASSWORD_REQUIRED;
            echo $errors['password'];
        }
        if ($_GET['error'] == 'password_invalid')
        {
            $errors['password'] = PASSWORD_INVALID;
            echo $errors['password'];
        }
    }
}elseif ($request_method == 'POST')
{
    $user_mail = filter_input(INPUT_POST, 'user-mail', FILTER_SANITIZE_EMAIL);
    $user_password = $conn -> real_escape_string($_POST['user-password']);
    $user_name = filter_input(INPUT_POST, 'user-name', FILTER_SANITIZE_SPECIAL_CHARS);
    if ($user_mail) {
        // validate email
        $user_mail = filter_var($user_mail, FILTER_VALIDATE_EMAIL);
        if (!$user_mail) {
            header('location: registration-user.php?error=email_invalid');
            $errors['email'] = '';
        }
    } else {
        header('location: registration-user.php?error=email_required');
        $errors['email'] = '';
    }
    if (!$user_name)
    {
        if ($user_name == '')
        {
            header('location: registration-user.php?error=name_required');
            $errors['name'] = '';
        }else
        {
            header('location: registration-user.php?error=name_invalid');
            $errors['name'] = '';
        }
    }
    if ($user_password) 
    {
        if (strlen($user_password) < 8)
        {
            header('location: registration-user.php?error=password_invalid');
            $errors['password'] = '';
        }
    }else
    {
        header('location: registration-user.php?error=password_required');
        $errors['password'] = '';
    }

    if (count($errors) == 0)
    {    
        if (isset($_POST['submit'])) {
            // $user_name = $_POST['user-name'];
            $repeat_password = $_POST['password-again'];
            $date_birth = "{$_POST['year-birth']}-{$_POST['month-birth']}-{$_POST['day-birth']}";
            $user_registration = "INSERT INTO user_account VALUES ('', '$user_name', '$user_mail', '$user_password', '$date_birth')";
            if ($user_password != $repeat_password)
            {
                header('location: registration-user.php?error=confirm');
            }else
            if ($conn -> query($user_registration))
            {
                echo 'Insert data successfuly!';
                header('location: index.php');
            }else
            {
                printf("%d Row inserted.\n", $mysqli->affected_rows);
                echo 'Error inserting data! '. $user_registration . $conn -> connect_error;
            }
        }elseif (isset($_POST['login']))
        {

            echo $user_password;
        }
    }
}

$conn -> close();
include 'partials/footer.php'; ?>

    

