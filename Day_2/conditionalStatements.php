<?php

/*
*Conditional statements are used to perform different actions based on different conditions.

!      PHP Conditional Statements
Very often when you write code, 
you want to perform different actions for different conditions. 
You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

? if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed

! PHP - The if Statement
INFO: The if statement executes some code if one condition is true.
 */

// EXAMPLE:

$name = "mohamed";
$age = 20;

if ($age>=18) {
    echo "$name you have access to VOTE <br>";
}
// its only print the statement only if the $age is greater than 18

/*
PHP - The if...else Statement
The if...else statement executes some code if a condition is true and
 another code if that condition is false.
 */

//  EXAMPLE:

$name = "mohamed";
$age = 20;

if ($age>=18) {
    echo "$name you have access to VOTE <br>";
} else {
    echo "$name you Don't have access to VOTE <br>";
}
/*
 !PHP - The if...elseif...else Statement
 The if...elseif...else statement executes different codes for more than two conditions.
 */
// EXAMPLE:$name = "mohamed";
$time = date("H");

if ($time< "10") {
    echo "Good Morning $name <br>";
} elseif ($time < "20") {
    echo "Have a Nice Day $name <br>";
} else {
    echo "Good Night $name <br>";
}

// !Short Hand If
// *To write shorter code, you can write if statements on one line.

// EXAMPLE:
if ($age >= 18)
    echo "You can Vote <br>";

// !Short Hand If...Else
// *if...else statements can also be written in one line, but the syntax is a bit different.

// EXAMPLE:
echo $age >= 18 ? "You can Vote <br>" : "You Can't Vote <br>";

//INFO: This technique is known as Ternary Operators, or Conditional Expressions.

//! Nested If
//* You can have if statements inside if statements, this is called nested if statements.
// EXAMPLE:

if ($age>= 18) {
    if ($age == 18) {
        echo "WOW You are just became an adult <br>";
    } else {
        echo "You are an adult <br>";
    }
} else {
    echo "You aren't Adult <br>";
}

/*
! The PHP switch Statement

* The switch statement is used to perform different actions based on different conditions.
* Use the switch statement to select one of many blocks of code to be executed.

*/
// EXAMPLE:

switch ($age) {
    case ($age<=18):
        echo "No, You aren't Adult <br>";
          break;
    case ($age==18):
        echo "WOW You are just became an adult <br>";
        break;
    case ($age>=18):
        echo "You are an adult <br>";
        break;

    default:
        echo "Please enter a valid age";
        break;
}

/*
*This is how it works:

*The expression is evaluated once
*The value of the expression is compared with the values of each case
*If there is a match, the associated block of code is executed
*The break keyword breaks out of the switch block
*The default code block is executed if there is no match

! The break Keyword
When PHP reaches a break keyword, it breaks out of the switch block.

This will stop the execution of more code, and no more cases are tested.

The last block does not need a break, the block breaks (ends) there anyway.

Warning: If you omit the break statement in a case that is not the last, 
         and that case gets a match, 
        the next case will also be executed even 
        if the evaluation does not match the case!

       ! The default Keyword
    *The default keyword specifies the code to run if there is no case match:
    * The default case does not have to be the last case in a switch block:
    Note: If default is not the last block in the switch block, remember to end the default block with a break statement.
*/

?>