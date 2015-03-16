<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Submit a Request</title>
</head>

<body>

<form method="post" action="save-request.php">
<div>
	<label for="name">Name:</label>
	<input name="name" />
</div>
<div>
	<label for="email">Email:</label>
	<input name="email" type="email" />
</div>
<div>
	<label for="province">Province:</label>
	<select name="province">
		<option>-Select-</option>
		<?php
		//1. connect
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200265054', 'gc200265054', 'Sig!iEgv');
		
		//2. set up query
		$sql = "SELECT * FROM provinces";
		
		//3. run query
		$result = $conn->query($sql);
		
		//4. loop through provinces
		foreach ($result as $row) {
			//5. add provinces to dropdown
			echo '<option>' . $row['province'] . '</option>';
		}
		
		//6. disconnect
		$conn = null;
		?>
	</select>
</div>
<div>
	<label for="reason">Reason:</label>
	<textarea name="reason"></textarea>
</div>
<input type="submit" value="Submit" />
</form>
</body>

</html>
