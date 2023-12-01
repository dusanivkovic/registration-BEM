<?php
require 'config.php';

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
        <div class="align-center">
            <select name="day-birth" id="" class="search-field__input">
                <?php for ($day = 0; $day <= 31; $day++) :?>
                    <option value="<?php echo $day; ?>"><?php echo $day == 0 ? 'Day' :  $day; ?></option>
                <?php endfor; ?>
            </select>
            <select name="month-birth" id="">
                <?php for ($month = 0; $month <= 12; $month++) :?>
                    <option value="<?php echo $month; ?>"><?php echo $month == 0 ? 'Month': $month; ?></option>
                <?php endfor; ?>
            </select>
            <select name="year-birth" id="">
                <?php for ($year = 1980; $year < 2005; $year++) :?>
                    <option value="<?php echo $year; ?>"><?php echo $year ==1980 ? 'Year' : $year; ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <button type="submit" name="submit" class="btn button-green my">Submit</button>
    </form> 
 