<?php
/*
!Study $_POST and $_GET Superglobals:

* $_POST: Used to collect form data after submitting an HTML form with method="post". 
* It is also used to pass data without showing it in the URL.
* $_GET: Used to collect form data after submitting an HTML form with method="get". 
* The data is visible in the URL and is suitable for less sensitive data or bookmarkable requests.

! $_GET:

* This method sends data via the URL query string (the part of the URL after the ?).
* It is generally used when you want to request data (like search queries).
* It is not secure because the data can be seen in the URL.
* There is a limitation on the amount of data you can send (because URLs have length limits).

! $_POST:

* This method sends data hidden from the URL, directly through the HTTP headers.
* It is more secure than GET since the data is not exposed in the URL.
* It is used when you want to submit or change data (like login forms, registration forms).
* There is no limitation on the amount of data that can be sent.
*/

//Example: 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
/*
* The $_POST superglobal collects the form data and processes it.
* htmlspecialchars() is used to prevent cross-site scripting (XSS).
*/
