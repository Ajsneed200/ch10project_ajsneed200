<!DOCTYPE HTML>
    <html>

    <head>
        <link rel="stylesheet" type="text/css" href="styles/main.css" media = "screen, print" />
    </head>
    <body>
<h1>Building a Dynamic Form with PHP</h1>
<p>Andrew Sneed</p>
<p>11/7/2025</p>
<form action ="confirm.php" method ="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required/>
	    <br/>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required/>
	    <br/>
	    <br/>
    <label for="message">Message:</label>
	    <br/>
    <textarea name="message" rows="8" cols="30" required></textarea>
    <br/>
    <input type= "submit" value="Submit">
	
    </body>
	
    </html>
