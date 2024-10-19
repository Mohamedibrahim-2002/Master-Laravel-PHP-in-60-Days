<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            Password: <br>
            <input type="password" name="password" id="password"><br><br>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $password = $_POST["password"];
    
    $pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8,}$/";
    
    if (strlen($password)<8) {
        echo "Password must be at least 8 characters long";
    } elseif (!preg_match($pattern,$password)) {
        echo "Password must contain at least one uppercase letter, one lowercase letter, one number, and one symbol";
    } else {
        echo "Good Password";
    }
    echo "<br>";
    echo $password;
}