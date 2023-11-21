<?php 
    include 'partials/header.php';
    require 'functions.php'; 
    require 'config.php';
    if (isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        $auto_arr = array_filter($cars, function ($el)
        {
            global $id;
            return $el['id'] == $id;
        });
    }
    elseif (isset($_GET['search-cars'])) 
    {
        $search = strtolower($_GET['search-cars']);
        $auto_arr = array_filter($cars, function ($el) 
        {
            global $search;
            return 
                ($search == 'used') ?  $el['used'] == true : 
                (($search == 'new') ? $el['used'] == false : $el['price'] ==  $search || strtolower($el['brend']) == $search  || strtolower($el['model']) ==  $search);
        });
    }
    if (count($auto_arr) == 0)
    header("location: product.php?error=1");

?>

<div class="space-between main-content">
    <?php foreach($auto_arr as $car): ?>
        <div class="card align-center">
            <div class="card-header">
                <?php echo ucfirst($car['brend']).'<br>'.ucfirst($car['model']); ?>
                <a href="delete.php?id=<?php echo $car['id']?>"><span class="card-header__close">x</span></a>
            </div>
            <div class="card-body"><?php echo $car['info']; ?></div>
            <div class="card-footer space-evenly">
                <button class="btn button-accent"><?php echo $car['price']; ?></button>
                <button class="btn <?php echo btn_color ($car)?>"><?php echo car_in_used ($car)?></button>
                <button class="button-round">Uredi</button>
            </div>
        </div>
    <?php endforeach; ?>
</div>