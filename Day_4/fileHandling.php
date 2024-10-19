<?php

/*
!PHP file handling allows you to create, read, write, and delete files. Let’s break it down with some common tasks and examples.

*Key Functions for File Handling:
*fopen() - Opens a file for reading, writing, or appending.
*fwrite() - Writes data to a file.
*fread() - Reads data from a file.
*fclose() - Closes a file after you're done working with it.
*file_exists() - Checks if a file exists.
*unlink() - Deletes a file.

Example: Creating and Writing to a File
 */
$file = fopen("simple1.txt", "w");

if ($file) {
    fwrite($file, "Hello Ibrahim, you can access this file using php.\n");
    fwrite($file, "Let's master the PHP laravel.\n");

    fclose($file);
    echo "File created and written successfully <br>";
} else {
    echo "Could not open the file <br>";
}
/*
! Explanation:
* fopen("simple1.txt", "w") opens the file in write mode (w). If the file doesn't exist, it creates one.
* fwrite() adds content to the file.
* fclose() ensures the file is saved and closed properly.
*/

//? Example 2: Reading a File

$file_name = "simple1.txt";
if (file_exists($file_name)) {
    $file_read = fopen($file_name, "r");
    if ($file_read) {
        while (($line = fgets($file_read)) !== false) {
            echo $line ."<br>";
        }
        fclose($file_read);
    } else {
        echo "could not open file <br>";
    }
} else {
    echo "File does not exist. <br>";
}

/*
! Explanation:
* fopen("example.txt", "r") opens the file for reading (r).
* fgets() reads one line at a time until it reaches the end of the file.
* fclose() closes the file when reading is complete.
 */

 //! Example 3: Checking If a File Exists

 if (file_exists("simple1.txt")) {
    echo "File exists. <br>";
} else {
     echo "File does not exists. <br>";
    }
    
/*
! Explanation:
* file_exists() checks whether the specified file exists before performing operations like reading or writing.
*/

//! Example 4: Deleting a File

if (file_exists("simple.txt")) {
    unlink("simple.txt");
    echo "Successfully Deleted. <br>";
} else {
    echo "File does not exists. <br>";
    
}

/*
! Explanation:
* unlink("example.txt") deletes the file if it exists.
? Summary:
* Opening Files: fopen() opens files in different modes (r for reading, w for writing, etc.).
* Reading & Writing: fwrite() adds content, fread() or fgets() retrieves content.
* Closing Files: Always close files with fclose() to prevent memory leaks.
* Checking & Deleting: file_exists() and unlink() help manage files safely.
*/