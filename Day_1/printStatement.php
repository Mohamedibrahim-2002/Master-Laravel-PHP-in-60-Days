<?
//INFO: There are two basic ways to get output: echo and print.
//* PHP echo and print Statements

/*
echo and print are more or less the same. 
They are both used to output data to the screen.

The differences are small: 
echo has no return value while print has a return value of 1 
so it can be used in expressions. 
echo can take multiple parameters (although such usage is rare) 
while print can take one argument. 
echo is marginally faster than print.
*/

//! The PHP echo Statement
//* The echo statement can be used with or without parentheses: echo or echo().

echo "Hello World";
//? Same as:
echo ("Hello World");

//! Display Text
 /* 
 The following example shows how to output text with the echo command
  (notice that the text can contain HTML markup):
  */
  //EXAMPLE:
  echo "<h2>PHP is Fun!</h2>";
  echo "Hello world!<br>";
  echo "I'm about to learn PHP!<br>";
  echo "This ", "string ", "was ", "made ", "with multiple parameters.";

  //! Display Variables
//* The following example shows how to output text and variables with the echo statement:

//EXAMPLE:

$firstName = "Mohamed";
$lastName = "Ibrahim";

echo "My first name is $firstName";
echo " My last Name is $lastName";

?>