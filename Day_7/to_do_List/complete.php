
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $task_index = $_POST['task_index'];

    // Load tasks from todo.txt
    $todolist = [];
    if (file_exists("todo.txt")) {
        $todolist = file("todo.txt", FILE_IGNORE_NEW_LINES);
    }
    // Mark the task as completed (by adding a suffix or modifying it visually)
    if (isset($todolist[$task_index])) {
        $todolist[$task_index] = "[Completed] " . $todolist[$task_index];
    }

    // Rewrite tasks to todo.txt
    $file = fopen("todo.txt", "w");
    foreach ($todolist as $task) {
        fwrite($file, "$task\n");
    }
    fclose($file);

    // Redirect back to the index page
    header("Location: index.php");
    exit();
}
