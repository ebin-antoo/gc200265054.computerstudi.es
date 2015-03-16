<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>

<?php

//try connecting to our db
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200265054', 'gc200265054', 'Sig!iEgv');

//check if connection exists
if (!$conn) {
	die('Could not connect');
}
else {
	echo 'Connected to db';
}

//disconnect!
$conn = null;

?>

</body>

</html>
