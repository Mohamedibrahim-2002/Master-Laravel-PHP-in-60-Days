<?php 

/*
Create a PHP script that does the following:
Define variables for your first name, last name, age, and city. -- DONE✅
Concatenate your first and last name into a full name variable. -- DONE✅
Use a conditional statement to check if you are 18 or older, and print a message based on the result. -- DONE✅
Store your favorite colors in an array and loop through it to print each color. -- DONE✅
*/
$fname = "Mohamed";
$lname = "Ibrahim";
$age = 21;
$city = "Avadi";
$fullname = $fname . " " . $lname;

if ($age >= 18) {
    echo "You are Eligible for vote";
} else {
    echo "You are NOT Eligible for vote";
}
$colors = array("Red","Blue","Green","Violet","Indigo","Orange","Yellow");

foreach ($colors as $color) {
    echo $color . "<br>";
}

?>