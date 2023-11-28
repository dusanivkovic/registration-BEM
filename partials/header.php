<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
    <header class="main-header">
        <nav class="container space-evenly">
            <ul class="space-between">
                <?php
                    $links = ['Home' => 'index.php', 'Product' => 'product.php', 'Info' => 'infocar.php'];
                    foreach ($links as $link => $value) : ?>
                        <li class="main-navigation"><a href="<?php echo $value; ?>" class="main-navigation__home-link"><?php echo $link; ?></a></li>
                <?php endforeach ?>
            </ul>
            <ul class="flex-end">
                <li class="main-navigation "><a href="registration-user.php?options=registration">Registracija</a></li>
                <li class="main-navigation mx"><a href="registration-user.php?options=login">Log In</a></li>
            </ul>
        </nav>
    </header>