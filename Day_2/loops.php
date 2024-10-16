<?
/*
In the following chapters you will learn how to repeat code by using loops in PHP.

! PHP Loops
Often when you write code, 
you want the same block of code to run over and over again a certain number of times. 
So, instead of adding several almost equal code-lines in a script, we can use loops.

Loops are used to execute the same block of code again and again, 
as long as a certain condition is true.

In PHP, we have the following loop types:

* while - loops through a block of code as long as the specified condition is true
* do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
* for - loops through a block of code a specified number of times
* foreach - loops through a block of code for each element in an array
* The following chapters will explain and give examples of each loop type.

! The PHP while Loop
* The while loop - Loops through a block of code as long as the specified condition is true.

* The while loop executes a block of code as long as the specified condition is true.
*/

// EXAMPLE: 
$a = 0;
while ($a <= 10) {
    echo $a."<br>";
    $a++;
}
/*
Note: remember to increment $i, or else the loop will continue forever.

The while loop does not run a specific number of times,
 but checks after each iteration if the condition is still true.

The condition does not have to be a counter, 
it could be the status of an operation or
any condition that evaluates to either true or false.
*/

// ! FOR LOOP
// EXAMPLE:

for ($i=0; $i < 10; $i++) {
    echo $i . "<br>";
}
//? it print the number from 0 to 9;

//! Foreach loop
// * it used to loop through array
//example:
$languages = [
    "java",
    "C++",
    "C",
    "javascript",
    "PHP",
    "python"
];

foreach ($languages as $language) {
    echo "$language <br>";
}
?>
