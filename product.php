<?php 
    include 'partials/header.php'; 
    // require 'db.php'; 
    require 'config.php';
    require 'functions.php'
    ?>
    <main class="position-relative"> 
    <div class="align-center">
        <h3>Search Cars</h3>
        <form action="infocar.php" method="get" class="search-field align-center">
            <input type="text" name="search-cars" class="search-field__input" placeholder=" <?php  echo (isset($_GET['error'])) ? 'No match found! Try again!' : 'Search';?>">
            <button type="submit" class="search-field__button">Search</button>
        </form>
    </div>
    <div class="container space-between">
        <?php foreach($cars as $car) :    ?>
            <a href="infocar.php?id=<?php echo $car['id']; ?>">
                <div class="card direction-col-center">
                    <div class="card-header"><?php echo $car['brend']; ?></div>
                    <div class="card-body"><?php echo $car['model']; ?></div>
                    <div class="card-footer space-evenly">
                        <button class="btn button-accent"><?php echo $car['price']; ?></button>
                        <button class="btn <?php echo btn_color ($car); ?>"> 
                            <?php echo car_in_used ($car); ?>
                        </button>
                    </div>
                </div>
            </a>
        <?php endforeach ?>
    </div>
    </main>

    
</body>
</html>