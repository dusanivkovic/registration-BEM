<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
    <?php
    include 'partials/header.php';
    require 'functions.php';?>
    <?php 
    include 'partials/main.php';?>
    <div class="main-content">
    <form method="POST" action="registration.php" class="absolute-center-direction-col registration-form">
        <label for="user_name" class="registration-form__label">Ime i przime</label>
        <input type="text" name="user_name" placeholder="Ime i prezime" class="input-field">
        <label for="user_mail" class="registration-form__label">E-mail</label>
        <input type="text" name="user_mail" placeholder="E-mail" class="input-field">
        <label for="user_password" class="registration-form__label">Lozinka</label>
        <input type="password" name="user_password" placeholder="Lozinka" class="input-field">
        <label for="user_password_again" class="registration-form__label">Ponovi lozinku</label>
        <input type="password" name="user_password_again" placeholder="Lozinka" class="input-field" class="registration-form__label">
        <label for="year">Godina </label>
        <select name="year" id="" class="input-field" placeholder="godina">
            <?php 
                for ($i = 1990; $i < 2024; $i++) : ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php endfor ?>
            ?>
        </select>
        <input type="checkbox" name="gender[]">Muski
        <input type="checkbox" name="gender[]">Zenski

        <button class="button-accent">Posalji</button>
    </form>
        <?php echo price(10000, 10);?>
    </div>


    
</body>
</html>