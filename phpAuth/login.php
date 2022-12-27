<?php
require "config.php";
if (isset($_POST['submit'])) {
    $usernameEmail = $_POST['usernameEmail'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$usernameEmail' OR email = '$usernameEmail'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row['password']) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
            header("location:index.php");
        } else {
            echo
            "<script> alert('wrong password'); </script>";
        }
    } else {
        echo
        "<script> alert('Username Unregistred '); </script>";
    }
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>

<body>
    <h2>Login</h2>
    <form action='' method="post" autocomplete="off">
        <label for="usernameEmail">Username or Email</label>
        <input id="usernameEmail" type="text" name="usernameEmail" required value=""><br>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required value=""><br>
        <button type="submit" name="submit">Login</button>

    </form>
    <a href="registration.php">Register</a>
</body>

</html>