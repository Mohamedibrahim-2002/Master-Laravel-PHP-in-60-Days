<?php
//INFO: PHP Variables Scope
//NOTE: variables can be declared anywhere in the script.
//NOTE: The scope of a variable is the part of the script where the variable can be referenced/used.
//* PHP has three different variable scopes:
    //! LOCAL
    //! GLOBAL
    //! STATIC

//? Global Scope
//* A variable declared outside a function has a GLOBAL SCOPE 
//* and can only be accessed outside a function:
//EXAMPLE:
/* 
$var1 = "Laravel";

function globalScope() {
    //* using var1 inside this function will generate an error "Undefined variable '$var1'"
    // echo "Variable var1  inside the function is: $var1";
}
globalScope();
echo "Variable var1  outside the function is: $var1";
*/

//INFO: Local Scope
//* A variable declared within a function has a 'LOCAL SCOPE'
//* and can only be accessed within that function:
//EXAMPLE:
/*
function localscope() {
    $var1 = "Apple";
    echo "Variable var1  inside the function is: $var1";
}
localscope();

//! using var1 outside the function will generate an error "Undefined variable '$var'"
echo "Variable var1 outside the function is: $var1";
*/
//? You can have local variables with the same name in different functions, 
//? because local variables are only recognized by the function in which they are declared.

//NOTE: PHP The global Keyword
//* The global keyword is used to access a global variable from within a function.
//* To do this, use the global keyword before the variables (inside the function):
    //EXAMPLE:
/*
    $var1 = "Laravel";

function globalScope() {
    global $var1;  //* We can access the globale scope variable imside the fun using 'global' Keyword.
    echo "Variable var1  inside the function is: $var1 <br>"; //* Now it gets Executed.
}
globalScope();
echo "Variable var1  outside the function is: $var1";
*/

//! GLOBAL[index]
/* PHP also stores all global variables in an array called $GLOBALS[index].
The index holds the name of the variable. 
This array is also accessible from within functions and 
can be used to update global variables directly.
*/
//EXAMPLE:
/*
$var1 = "Laravel";

function globalScope() {
      //* We can access the globale scope variable imside the fun using '$GLOBALS['var1']' Keyword.
    echo "Variable var1  inside the function is:". $GLOBALS['var1']." <br>."; //* Now it gets Executed.
}
globalScope();
echo "Variable var1  outside the function is: $var1";
*/

//INFO: PHP The static Keyword:
//* Normally, when a function is completed/executed, all of its variables are deleted. 
//* However, sometimes we want a local variable NOT to be deleted. 
//* We need it for a further job.

//?To do this, use the 'static' keyword when you first declare the variable:

// EXAMPLE: 
/*
function test(){
    static $x = 1;
    echo $x. "<br>";
    $x++;
}
test();
test();
test();
test();
*/

/*Then, each time the function is called, 
that variable will still have the information it contained from the last time 
the function was called.
Note: The variable is still local to the function.
*/

//EXAMPLE:

$globalvar1 = 10;
$globalvar2 = 20;

function globalscope(){
    //? using the globale variable inside the function
    // echo $globalvar1; //This echo statement will giive error because it cant 'locate $globalvar1'
}
//* Printing the echo statement outsid the function will get execute.
echo $globalvar1; 

function localscope(){
    $localvar = 30;
    // echo the local variable inside the function will get executed.
    echo $localvar;
}
localscope();
// echo the local variable out the function will not executed and shows error
// echo $localvar;


function globalkeyword(){
    // Giving access to the global variable inside the function using global keyword
    global $globalvar1;
    // the above statement will have the value of $globalvar1;
    echo $globalvar1;
}

function statickeyword() {
    //* The static keyword prevent the varible from destroy after the function execute 
    //* and have the value for futher execution.
    static $x = 0;
    echo $x."<br>";
    $x++;
}
statickeyword();
statickeyword();
statickeyword();
statickeyword();
?>