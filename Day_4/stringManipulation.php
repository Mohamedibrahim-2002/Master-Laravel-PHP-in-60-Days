<?php

// ! 1. strlen() - Get String Length
// * This function returns the length of a string.

// example: 
$name = "mohamed ibrahim";
echo strlen($name); // Output: 15
echo "<br>";
// * Explanation: strlen() counts the number of characters, including spaces.

// ! 2. strtolower() and strtoupper() - Convert Case
// * These functions convert strings to lowercase and uppercase, respectively.

// example:
$name = "Mohamed Ibrahim";
echo strtolower($name); // Output: mohamed ibrahim
echo "<br>";
echo strtoupper($name); // Output: MOHAMED IBRAHIM
echo "<br>";
// * Explanation: strtolower() converts all characters to lowercase, 
// * while strtoupper() converts them to uppercase.

//! 3. substr() - Extract a Substring
//* substr() extracts a portion of a string starting at a specific position.
// example:
$name = "Mohamed Ibrahim";
echo "The first name is " . substr($name, 0, 7); //Output: The first name is Mohamed
echo "<br>";
echo "The last name is " . substr($name, 8); //Output: The last name is Ibrahim
echo "<br>";

//* Explanation: The first parameter is the string, the second is the starting position (0-based),
//*  and the optional third is the length of the substring.

//! 4. strpos() - Find the Position of a Substring
//* strpos() returns the position of the first occurrence of a substring.
// example:
$name = "Mohamed Ibrahim";
echo strpos($name, "Ibrahim"); //Output: 8
echo "<br>";

//* Explanation: This function returns the position where "Ibrahim" starts in the string, which is 8.

//! 5. str_replace() - Replace Substrings
//* str_replace() replaces occurrences of a substring with another substring
// example:

$name = "Mohamed Ibrahim";
$new_name = str_replace("Ibrahim", "Harris", $name);
echo $new_name; //Output: Mohamed Harris
echo "<br>";

//* Explanation: It replaces "Ibrahim" with "Harris" in the original string.


//! 6. trim() - Remove Whitespace
//* trim() removes whitespace (or other characters) from both sides of a string.
// example:
$name = "   Mohamed Ibrahim   ";
echo trim($name); //Output: Mohamed Ibrahim
echo "<br>";
//* Explanation: This removes any leading and trailing spaces from the string.

//!7. explode() - Split a String into an Array
//* explode() splits a string by a delimiter into an array of strings.

//Example:

$name = "Mohamed Ibrahim";
$namesplit = explode(" ", $name);
print_r($namesplit); //Output: Array ( [0] => Mohamed [1] => Ibrahim )
echo "<br>";
//* Explanation: The string is split into an array using the space as a delimiter.

//! 8. implode() - Join Array Elements into a String
//* implode() is the opposite of explode(). It joins array elements into a string.

//Example:
$namearr = ["Mohamed", "Ibrahim"];
$name = implode(",", $namearr);
echo $name; //Output: Mohamed,Ibrahim
echo "<br>";

//* Explanation: The elements of the array are joined into a single string, separated by commas.

//! 9. strcmp() - Compare Two Strings
//* strcmp() compares two strings and returns 0 if they are equal,
//* a negative number if the first string is less than the second, 
//* and a positive number if the first string is greater.

//Example:
echo strcmp("Mohamed", "Ibrahim"); //Output: 1
echo "<br>";
echo strcmp("Mohamed", "Mohamed"); //Output: 0
echo "<br>";
echo strcmp("Ibrahim", "Mohamed"); //Output: -1
echo "<br>";

//* Explanation: The function compares the strings lexicographically.

//! 10. md5() - Generate MD5 Hash
//* md5() generates a 32-character hexadecimal hash of a string.
//example:

$name = "Mohamed Ibrahim";
echo md5($name); //Output: f8bc81351e46322801ab7ae6eee87770
echo "<br>";

//* Explanation: The MD5 hash is commonly used for checking file integrity or securely storing passwords.

