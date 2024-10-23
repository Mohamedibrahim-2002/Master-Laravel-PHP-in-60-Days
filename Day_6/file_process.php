
<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = htmlspecialchars($_POST["username"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email";
        exit();
}

$password = $_POST["password"];
$pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).{8,}$/";

if (strlen($password)<8) {
    echo "Password must be at least 8 characters long";
    exit();
} elseif (!preg_match($pattern,$password)) {
    echo "Password must contain at least one uppercase letter, one lowercase letter, one number, and one symbol";
    exit();
} else {
    $hashpass = password_hash($password, PASSWORD_DEFAULT);
}



$file = "user_information.txt";


   $file = fopen($file, "a");

   if($file){

   $timestamp = date("Y-m-d H:i:s");

        $entry = " Username: $username \n Email: $email \n Password: $password \n HashedPassword: $hashpass \n User: $username logged in at $timestamp \n\n";
        fwrite($file, $entry);
        fclose($file);
        echo "<script>
                alert('Submitted Successfully');
                window.location.href = 'filehandlingexe.php';
              </script>";
        exit();

} else {
    echo "Error opening the file";
}

}