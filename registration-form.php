<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
    <div class="position-absolute-center">
        <form method="POST" action="registration.php" class="absolute-center-direction-col registration-form">
            <label for="user_name" class="registration-form__label">Ime i przime</label>
            <input type="text" name="user_name" placeholder="Ime i prezime" class="input-field">
            <label for="user_mail" class="registration-form__label">E-mail</label>
            <input type="text" name="user_mail" placeholder="E-mail" class="input-field">
            <label for="user_password" class="registration-form__label">Lozinka</label>
            <input type="password" name="user_password" placeholder="Lozinka" class="input-field">
            <label for="user_password_again" class="registration-form__label">Ponovi lozinku</label>
            <input type="password" name="user_password_again" placeholder="Lozinka" class="input-field" class="registration-form__label">
            <button class="button-accent">Posalji</button>
        </form>
    </div>
    <div>
    </div>
    
</body>
</html>
