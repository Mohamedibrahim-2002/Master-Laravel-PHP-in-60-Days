<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            Name: <br>
            <input type="text" name="name" id="name"> <br><br>
            Email: <br>
            <input type="email" name="email" id="email"><br><br>
            Password: <br>
            <input type="password" name="password" id="password"><br><br>
            <input type="submit" value="submit" name="submit">      
        </form>
    </div>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST") {
    $name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$name = htmlspecialchars($_POST['name'],ENT_QUOTES,'UTF-8');
$email = strtolower(trim($email));

if (empty($name) || !filter_var($email,FILTER_VALIDATE_EMAIL)) {
    echo "Invalid Input";
} else {
    echo "Valid Input";
}
    $pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8,}$/";
if(strlen($password) < 8) {
    echo "Password must be at least 8 characters";
} elseif(!preg_match($pattern,$password)) {
    echo "Password must contain at least one uppercase letter, one lowercase letter, and one symbol";
} else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        echo $hashed_password;
}
}
