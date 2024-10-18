<?
/*
//! 1. Understanding Arrays

? What is an Array? 
 An array in PHP is a special variable that can hold multiple values at once. 
 They can store a collection of values, including numbers, strings, objects, 
 and even other arrays.

* Types of Arrays:

* Indexed Arrays: Arrays with numeric indexes.
* Associative Arrays: Arrays with named keys.
* Multidimensional Arrays: Arrays containing one or more arrays.

*/
//info: Indexed Arrays
// example:
// we can declare arry using this method

$fruits = array("apple","orange","mango","banana","jack fruit");
// * OR using short array syntax
$fruits1 = ["apple", "orange", "mango", "banana", "jack fruit"];

//info: Associative Array:
// example:

$colors = array("red" => "apple", "yellow" => "banana", "orange" => "orange");
// * OR using short array syntax
$colors2 = ["red" => "apple", "yellow" => "banana", "orange" => "orange"];

// info: Multidimensional Array:
// example:

$students = [
    ["name" => "mohamed", "age" => 16, "no" => 001],
    ["name" => "ibrahim", "age" => 17, "no" => 002],
    ["name" => "thameem", "age" => 15, "no" => 003],
];

// info: Accessing Array Elements
//* Indexed Arrays:
echo $fruits[0]."<br>"; //output: apple

//* Associative Arrays:
echo $colors['yellow']."<br>";  //output: banana

//* Multidimensional Arrays:
echo $students[2]["age"]."<br>"; //output: ibrahim

//! Common Array Functions
//* Count Elements: Returns the number of elements in an array.
// It return no of elements are in array.
echo count($fruits)."<br>"; //output: 5

//! Add Elements: it add avacado at the end.

$fruits[] = "avacado";
echo $fruits[5]."<br>"; //output: avacado

//*   OR  using array_push();
//* array_push(): Adds one or more elements to the end of an array.
// example:
array_push($fruits, "pineapple");

//! Modifying an Array: modify the given element to new element

$fruits[1] = "grape";   // it modifies orange into grape

//! Removing Elements:
unset($fruits[1]); //it removes the grape from the array  
// ? OR

//* array_pop(): Removes the last element of an array.
// example:

array_pop($fruits);

//! Sorting arrays: Sorts arrays in ascending or descending order.
sort($fruits); //sorts in ascending order
rsort($fruits); //Sorts in descending order;

//! Searching for a value:
$fruitno = array_search("banana", $fruits); //* Returns the index of banana
echo $fruitno . "<br>";

//! Merging arrays: it merge two arrays into single array
// example:
$vegetables = ["onion", "tomato", "garlic", "ginger"];
$products = array_merge($fruits, $vegetables);

print_r($products);
echo "<br>";

//* in_array(): Checks if a value exists in an array.

echo in_array("pineapple", $fruits) ? "true" : "false"."<br>" ; //return fales

//* array_keys() and array_values(): 
//* Retrieve all keys or all values from an array.
$keys = array_keys($colors);
$values = array_values($colors);

print_r($keys);
echo "<br>";
print_r($values);
echo "<br>";

// ! array_map(): 
//* Applies a callback function to each element of the array.
$number = [10, 20, 30, 40];
$sumofnumber = array_map(function ($num) {
    return $num + $num;
}, $number);

print_r( $sumofnumber); //output: Array ( [0] => 20 [1] => 40 [2] => 60 [3] => 80 )
echo "<br>";

//! Array Destructuring: 
//* PHP 7.1+ introduced a feature that allows you to "unpack" values from arrays directly into variables.
// example:

[$first, $second, $third, $fourth] = $number;
echo $first . "<br>"; //OUTPUT: 10

//! Array Slicing: Extract a portion of an array using array_slice().
//* Returns elements starting from index 0 to 2;
print_r(array_slice($fruits, 0, 3)); 
//output: Array ( [0] => mango [1] => jack fruit [2] => banana )

//! Example: Combining array_map() and array_filter()
$numbers = [1, 2, 3, 4, 5];

// First, filter odd numbers, then double them
$doubled_odds = array_map(function($number) {
    return $number * 2;
}, array_filter($numbers, function($number) {
    return $number % 2 !== 0;
}));

print_r($doubled_odds);


//! EXERCISE:
//* 1) Create an indexed array to store names of your favorite programming languages.
//* 2) Create an associative array to store names and ages of 3 people.
//* 3)Create a multidimensional array to store details of 2 students (name, age, and grade).

// Task 1: 
$language = ["PHP", "Java", "Python", "C", "C++"];

// Task 2:
$people1 = ["name" => "Mohamed", "age" => 21];
$people2 = ["name" => "Ibrahim", "age" => 22];
$people3 = ["name" => "Thameem", "age" => 20];

// Task 3:
$students = [
    ["name" => "Mohamed", "age" => 21, "grade" => "A+"],
    ["name" => "Ibrahim", "age" => 20, "grade" => "O+"]
];


?>