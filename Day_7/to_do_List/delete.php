<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $task_index = $_POST['task_index'];

    // Load tasks from todo.txt
    $todolist = [];
    if (file_exists("todo.txt")) {
        $todolist = file("todo.txt", FILE_IGNORE_NEW_LINES);
    }

    // Remove the task at the given index
    if (isset($todolist[$task_index])) {
        unset($todolist[$task_index]);
        $todolist = array_values($todolist);  // Reindex the array after deletion
    }

    // Rewrite the remaining tasks to todo.txt
    $file = fopen("todo.txt", "w");
    foreach ($todolist as $task) {
        fwrite($file, "$task\n");
    }
    fclose($file);

    // Redirect back to the index page
    header("Location: index.php");
    exit();
}
