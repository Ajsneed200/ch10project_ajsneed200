<!DOCTYPE HTML>
    <html>

    <head>
<link rel="stylesheet" href="main.css" media = "screen, print" >
    </head>
    <body>
<h1>Building a Dynamic Form with PHP</h1>
<p>Andrew Sneed</p>
<p>11/7/2025</p>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST");
{
    /*Validation
    Makess inputs follow the set rules.*/
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    $sanitize_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    /*Sanitization
    Removes any potentially harmful data*/
    
    if (empty($name)) {
        $error;
    }

    if (empty($sanitize_email)) {
        $error;
    }

    if (empty($message)) {
        $error;
    }

    if (!empty($error)) {
        $class = "error";
        echo "<h4>Error: All fields must be filled out.</h4>";
    } else {
        $class = "success";
        echo "<h4>All fields filled out successfully.</h4>";
    }

}
echo "<h2>Name: ".$name."<br/> Email: ".$sanitize_email."<br/> Message: ".$message."</h2>";
?>
    </body>
    
    </html>
