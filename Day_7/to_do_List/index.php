<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=check_small,delete" />
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <header>
        <h1>TODO APP</h1>
    </header>
    <hr>
    <main>
        <div class="container">
            <form action="process.php" method="post">
                <label for="todo">TODO:</label>
                <input type="text" name="todo" id="todo" placeholder="Enter the task">

                <button name="btn">Submit</button>
            </form>

            <hr>

        </div>
        <div class="showtodo">
            <h2>Your To-Do List:</h2>
            <ul>

                <!-- Display the tasks -->
                <?php
                $todolist = [];

                if (file_exists("todo.txt")) {
                    $todolist = file("todo.txt", FILE_IGNORE_NEW_LINES);  // Retrieve tasks as an array
                }
                // print_r($todolist);
                if (!empty($todolist)) {
                    foreach ($todolist as $index => $task) {
                        echo "
                        <section class=\"task\">
                         <li>$task
                          <form action=\"delete.php\" method=\"post\">
                              <input type=\"hidden\" name=\"task_index\" value=\"$index\">
                              <button class='delete'><span class=\"material-symbols-outlined\">delete</span></button>
                          </form>
                          <form action='' method='post' style='display:inline;'>
                              <input type='hidden' name='task_index' value='$index'>
                              <button type='submit' class='completed' id='comp'><span class=\"material-symbols-outlined\">check_small</span></button>
                          </form>
                         </li>
                       </section>";
                    }
                } else {
                    echo "<li>No tasks added yet.</li>";
                }
                ?>

            </ul>
        </div>
        <!-- <hr>
        <div class="completed">
            <h2>Completed Tasks:</h2>
            <ul>
                <?php
                $incompleteTasks = [];
                $completedTasks = [];
                
                if (file_exists("todo.txt")) {
                    $tasks = file("todo.txt", FILE_IGNORE_NEW_LINES);
                    
                    foreach ($tasks as $task) {
                        if (strpos($task, "Incomplete: ") === 0) {
                            $incompleteTasks[] = str_replace("Incomplete: ", "", $task);
                        } elseif (strpos($task, "Complete: ") === 0) {
                            $completedTasks[] = str_replace("Complete: ", "", $task);
                        }
                    }
                }
                ?>*/
            </ul>
        </div> -->
    </main>

    <script>
        const btnComplete = document.querySelector(".completed");
        btnComplete.style.backgroundColor = "grey";
        btnComplete.addEventListener('click',function(){
            document.querySelector('.delete').style.display = 'none';
            document.querySelector('.completed').style.display = 'none';
        })
        function completeTask(button) {
            button.disabled = true;
            button.style.display = 'none';

            // Get the corresponding li element and strike it out
            let taskItem = button.closest('li');
            taskItem.style.textDecoration = 'line-through';

            // Hide the delete button
            let deleteButton = taskItem.querySelector('.delete');
            deleteButton.style.display = 'none';
        }
</script>

</body>


</html>