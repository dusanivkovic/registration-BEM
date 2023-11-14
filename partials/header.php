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
        <nav class="container">
            <ul class="space-between">
                <?php
                    $links = ['Home' => 'index.php', 'Product' => 'product.php', 'Info' => 'infocar.php'];
                    foreach ($links as $link => $value) : ?>
                        <li class="main-navigation"><a href="<?php echo $value; ?>" class="main-navigation__home-link"><?php echo $link; ?></a></li>
                    <?php endforeach ?>
            </ul>
        </nav>
    </header>