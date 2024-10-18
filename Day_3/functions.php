<?php

//! 2. Functions
//* Functions allow you to encapsulate reusable blocks of code.
//? Syntax:
function functionName() {
    // Code to be executed
}
// Defining Functions:
// Basic Function:
function greet() {
    echo "Hello!";
}
greet();  // Outputs: Hello!
// Function with Parameters:
function greetPerson($name) {
    echo "Hello, $name!";
}
greetPerson("John");  // Outputs: Hello, John!

// Function with Return Value:
function sum($a, $b) {
    return $a + $b;
}
echo sum(5, 10);  // Outputs: 15
// Tasks for Functions:
    // Create a function that accepts two numbers and returns their sum.
    // Create a function to reverse a string.
    // Create a function that takes an array of numbers and returns the average.

    //? Task 1:
    function sumofnum($num1,$num2){
     return $num1 + $num2;
    }

    //? Task 2
    function stringreverse($words){
     return strrev($words);
    }

    //? Task 3:
    function calcaverage($arr) {
     return array_sum($arr) / count($arr);
    }

echo sumofnum(20, 23);
echo stringreverse("solana");
echo calcaverage([2, 3, 4, 5, 6, 7, 8]);
?>