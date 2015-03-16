<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
//1. store the inputs in variables
$name = $_POST['mobiles'];
$name = $_POST['price'];
$email = $_POST['buyers_name'];
$province = $_POST['email'];
$reason = $_POST['details'];

$complete = true;  //set a flag to indicate whether to save or not

//== is checking if 2 values are the same.
if ($mobiles == '-Select-') {
	echo 'Mobiles selection is required<br />';
	$complete = false;
}

//== is checking if 2 values are the same.
if ($price == '-Select-') {
	echo 'Price selection is required<br />';
	$complete = false;
}


//2. check the variables for valid input
if (empty($buyers_name)) {
	echo 'Buyes Name is required<br />';
	$complete = false;
}

if (empty($email)) {
	echo 'Email is required<br />';
	$complete = false;
}

if (empty($details)) {
	echo 'Details is required<br />';
	$complete = false;
}


	//3. if we have valid input, connect
	if ($complete) {
	$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200265054', 'gc200265054', 'Sig!iEgv');
	
	//4. write the sql insert
	$sql = "INSERT INTO requests (mobiles, price, buyers_name, email, details) VALUES ('$mobiles', '$price', '$buyers_name', '$email', '$details')" ;	
	
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
