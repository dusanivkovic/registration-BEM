<?php
require 'partials/header.php';
require 'config.php';
require 'functions.php';

if (isset($_POST['submit']))
{
    $brend = test_input($_POST['brend']);
    $model = test_input($_POST['model']);
    $price = test_input($_POST['price']);
    $info = test_input($_POST['info']);
    $used = test_input($_POST['used'][0]) == 'true' ? false: true;
    $id = test_input($_POST['id']);
    $update_car = "UPDATE cars SET brend = '$brend', model = '$model', price = '$price', used = '$used', info = '$info' WHERE id = $id";
    if ($conn -> query($update_car)) 
    {
        echo "Data successfuly updated!";
    } else
    {
        echo "Error inserting data: " .$update_car. " Error " .$conn -> connect_error;
    }
    header("location: product.php");
}elseif ($_GET['id']) 
{
    $curently_id = $_GET['id'];
    $selected_car_for_update = "SELECT * FROM cars WHERE id = '$curently_id'";
    $curently_car = ($conn -> query($selected_car_for_update)) -> fetch_array(MYSQLI_ASSOC);
    ?>
    <div class="main-content">
        <h3 class="mx">Izmjeni auto</h3>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post" class="direction-col-center registration-form">
            <label for="brend" class="registration-form__label">Brend</label>
            <input type="text" name="brend" class="input-field" value="<?php echo $curently_car['brend'];?>">
            <label for="model" class="registration-form__label">Model</label>
            <input type="text" name="model" class="input-field" value="<?php echo $curently_car['model'];?>">
            <label for="price" class="registration-form__label">Cijena</label>
            <input type="text" name="price" class="input-field" value="<?php echo $curently_car['price'];?>">
            <div class="direction-col-center">
                <span class="">Novo</span><input type="radio" name="used[]" class="input-field" value="<?php echo $curently_car['used'] ? 'false' : 'true'; ?>"<?php echo $curently_car['used'] ? '': 'checked'; ?>>
                <span>Korisceno</span><input type="radio" name="used[]" class="input-field" value="<?php echo $curently_car['used'] ? 'true' : 'false'; ?>" <?php echo $curently_car['used'] ? 'checked': '' ;?>>
            </div>
            <textarea name="info" id="" cols="30" rows="10" placeholder="<?php echo $curently_car['info']?>"></textarea>
            <input type="text" name='id' value = "<?php echo $curently_car['id'];?>">
            <input type="submit" name="submit" class="btn button-green my" value="OK">
        </form>
    </div>
    <?php
}else 
{
    ?>
    <div class="main-content">
    <h3 class="mx">Dodaj auto</h3>
    <?php require 'index.view.php'; ?>
    </div>
    <?php  
}
$conn -> close();
require 'partials/footer.php';


