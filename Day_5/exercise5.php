<?php
//* create a simple contact form that processes user input and 
//* displays it back using the $_POST method.
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
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Username: <br>
            <input type="text" name="username" id="username" required><br><br>
            Full name: <br>
            <input type="text" name="name" id="name" required><br><br>
            Age: <br>
            <input type="number" name="age" id="age" required><br><br>
            Email: <br>
            <input type="email" name="email" id="email" required><br><br>
            Password: <br>
            <input type="password" name="password" id="password" required><br><br><br>

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD']== "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $fullname = htmlspecialchars($_POST["name"]);
    $age = filter_var($_POST["age"], FILTER_SANITIZE_NUMBER_INT);
    if (!filter_var($age, FILTER_VALIDATE_INT)){
        echo "Invalid age. Please enter a valid number.<br>";
        return;
    };
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.<br>";
        return;
    }

    $password = $_POST["password"];

    $pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).{8,}$/";


    if (strlen($password)<8) {
        echo "Password must be at least 8 characters long";
    } elseif (!preg_match($pattern,$password)) {
        echo "Password must contain at least one uppercase letter, one lowercase letter, one number, and one symbol";
    } else {
        $hashpass = password_hash($password, PASSWORD_DEFAULT);
    }

    echo "<br>";
    echo "Welcome $username your full name is $fullname aged $age has email $email.";
}