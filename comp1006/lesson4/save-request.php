<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Saving Request...</title>
</head>

<body>

<?php
//1. store the inputs in variables
$name = $_POST['name'];
$email = $_POST['email'];
$province = $_POST['province'];
$reason = $_POST['reason'];

$complete = true;  //set a flag to indicate whether to save or not

//2. check the variables for valid input
if (empty($name)) {
	echo 'Name is required<br />';
	$complete = false;
}

if (empty($email)) {
	echo 'Email is required<br />';
	$complete = false;
}

//== is checking if 2 values are the same.
if ($province == '-Select-') {
	echo 'Province selection is required<br />';
	$complete = false;
}

if (empty($reason)) {
	echo 'Reason is required<br />';
	$complete = false;
}

//3. if we have valid input, connect
if ($complete) {
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200265054', 'gc200265054', 'Sig!iEgv');
	
	//4. write the sql insert
	$sql = "INSERT INTO requests (name, email, province, reason) VALUES ('$name', '$email', '$province', '$reason')";
	
	//5. execute the insert
	$conn->exec($sql);

	//6. disconnect
	$conn = null;
	
	//7. show success message
	echo 'Your request has been saved';
}
?>

</body>

</html>
