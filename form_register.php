<?php
session_start();
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>shopping</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&family=Thasadith:ital,wght@1,400;1,700&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/983df0f4db.js" crossorigin="anonymous"></script>
    <title>Register Shop</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container_1">
        <h2>Register</h2>
        <form action="register_db.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <div class="input-group">
                <label for="password_1">Password</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label for="password_2">Confirm Password</label>
                <input type="password" name="password_2">
            </div>
            <div class="input-group">
                <button type="submit" name="reg_user" class="btn">Register</button>
            </div>
            <p>Already a member??? <a href="login.php">Log in</a></p>
        </form>
    </div>

</body>

</html>