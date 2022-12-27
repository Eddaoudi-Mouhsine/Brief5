<?php

//session are a way to store data in variables to be used accross multipe pages,unlike cookies,session 
//are stored on the server
if (isset($_POST['submit'])) {
    
    session_start();
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = $_POST['password'];
    
    if ($username == 'john' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location:/dashboard.php');
    } else {
        echo ("incorrect logging");
    }
} ?>

<!-- Pass data through a form -->
<!-- php_self can be used for xss -->

<form action="<?php echo htmlspecialchars(
                    $_SERVER['PHP_SELF']
                ); ?>" method="POST">
    <div>
        <label for="username">UserName: </label>
        <input type="text" name="username">
    </div>
    <br>
    <?php echo $password; ?>
    <div>
        <label for="password">password: </label>
        <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>