
<form action="car-registration.php" method="post" class="direction-col-center registration-form">
    <label for="brend" class="registration-form__label">Brend</label>
    <input type="text" name="brend" class="input-field" placeholder="Brend">
    <label for="model" class="registration-form__label">Model</label>
    <input type="text" name="model" class="input-field" placeholder="model">
    <label for="price" class="registration-form__label">Cijena</label>
    <input type="text" name="price" class="input-field" placeholder="cijena">
    <div class="direction-col-center">
        <span class="">Novo</span><input type="radio" name="used[]" class="input-field" value="true" <?php echo !isset($_POST['used[]']) ? 'checked' : ''; ?>>
        <span>Korisceno</span><input type="radio" name="used[]" class="input-field" value="false">
    </div>
    <textarea name="info" id="" cols="30" rows="10" placeholder="Unesi informacije"></textarea>
    <button type="submit" class="btn button-green my" value="OK">OK</button>
</form>