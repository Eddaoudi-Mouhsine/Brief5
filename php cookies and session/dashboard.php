<?php
session_start();
if (isset($_SESSION['username'])) {
    echo '<h1> Welcome to the ' . $_SESSION['username'] . '</h1>';
    echo '<a href="logout.php">Logout </a>';
} else {
    echo '<h1> welcome honored guest to the birth place of our dynasty </h1>';
    echo '<a href="/session.php">Home</a>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>test page</h1>
</body>

</html>