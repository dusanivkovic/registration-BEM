<?php
// require 'config.php';
?>
    <form action="registration-user.php?options=registration" method="post" class="direction-col-center registration-form">
        <label for="user-name" class="registration-form__label">Full name</label>
        <input type="text" name="user-name" class="input-field" placeholder="Name">
        <label for="user-mail" class="registration-form__label">Your e-mail</label>
        <input type="text" name="user-mail" class="input-field" placeholder="e-mail">
        <label for="user-password" class="registration-form__label">Password</label>
        <input type="password" name="user-password" class="input-field" placeholder="Password">
        <label for="password-again" class="registration-form__label">Repeat your password</label>
        <input type="password" name="password-again" class="input-field" placeholder="Password">
        <button type="submit" name="submit" class="btn button-green">Submit</button>
    </form> 
<?php   