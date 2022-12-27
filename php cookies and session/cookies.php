<?php
echo "testing cookies";
setcookie('name', 'Brad', time() + 86400);

//if you want to use it you could do !
//if you want to delete a cookie here is a how 
// setcookie('name','',time()- 86400);

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

    <h1>Testing cookies <?php isset($_COOKIE['name']) ?  $_COOKIE['name'] : "not found"   ?></h1>
</body>

</html>