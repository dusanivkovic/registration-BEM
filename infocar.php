<?php 
    include 'partials/header.php';
    require 'db.php';
    require 'functions.php'; 
    if (isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        $cars = array_filter($db, function ($el) 
        {
            global $id;
            return $el['id'] == $id;
        });
    }elseif (isset($_GET['search-cars'])) 
    {
        $search = strtolower($_GET['search-cars']);
        $cars = array_filter($db, function ($el) 
        {
            global $search;
            return ($search == 'used') ?  $el['used'] == true : (($search == 'new') ? $el['used'] == false : $el['brend'] == $search || $el['price'] == $search || $el['model'] ==  $search);
        });
    }
    if (count($cars) == 0)
    header("location: product.php?error=1");

?>

<div class="position-relative space-between">
    <?php foreach($cars as $car): ?>
        <div class="card align-center">
            <div class="card-header"><?php echo $car['brend'].'<br>'.$car['model']; ?></div>
            <div class="card-body"><?php echo $car['info']; ?></div>
            <div class="card-footer space-evenly">
                <button class="btn button-accent"><?php echo $car['price']; ?></button>
                <button class="btn <?php echo btn_color ($car)?>"><?php echo car_in_used ($car)?></button>
                
            </div>
        </div>
    <?php endforeach; ?>
</div>