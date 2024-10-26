<?php
session_start();
$todolist = [];

if (file_exists("todo.txt")) {
    $todolist = file("todo.txt", FILE_IGNORE_NEW_LINES);  // Retrieve existing tasks as an array
}


if ($_SERVER['REQUEST_METHOD']=="POST") {
    $todo = htmlspecialchars($_POST["todo"]);
    // echo $todo;

    if (!empty($todo)) {
        array_push($todolist,$todo);
        // print_r($todolist);
        $file = fopen("todo.txt", "a");
        fwrite($file, "$todo \n");
        fclose($file);
        header("location:index.php");
    } else {
        echo "Please Enter the task TO DO";
    }
}
?>