<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>

<?php

// 1. store the user inputs in variables
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

// 2. connect to db
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200265054', 'gc200265054', 'Sig!iEgv');

// 3. set up the SQL command to save the data
$sql = "INSERT INTO subscribers (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

// 4. execute the SQL
$conn->exec($sql);

// 5. disconnect
$conn = null;

// 6. display a message to the user
echo "Your subscription was saved";

?>

</body>

</html>
