<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>

<?php
//capture the user input and store it in a variable
$email = $_POST['email'];

//output a message including the email entered by the user
echo "Thanks for your email $email";

//now let's try the message with single quotes instead
echo 'Thanks for your email ' . $email . 'Click <a href="http://www.georgiancollege.ca">here</a> to go somewhere else';

?>

</body>

</html>
