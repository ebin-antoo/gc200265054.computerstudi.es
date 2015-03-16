<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Selecting Mobile From Shop</title>
</head>
<head><h1>Selecting Mobile From Shop</h1></head>
<body>
<form method="post" action="save_form.php">
<div>
	<label for="mobiles">Mobiles:</label>
	<select name="mobiles">
		<option>-Select-</option>
		<?php
		//1. connect
		$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200265054', 'gc200265054', 'Sig!iEgv');
		
		//2. set up query
		$sql = "SELECT * FROM mobiles";
		
		//3. run query
		$result = $conn->query($sql);
		
		//4. loop through provinces
		foreach ($result as $row) {
			//5. add provinces to dropdown
			echo '<option>' . $row['mobiles'] . '</option>';
		}
		
		//6. disconnect
		$conn = null;
		?>
	</select>
</div>
<div>
	<label for="price">Price:</label>
	<select name="price">
		<option>-Select-</option>
		<?php
		//1. connect
		$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200265054', 'gc200265054', 'Sig!iEgv');
		
		//2. set up query
		$sql = "SELECT * FROM price";
		
		//3. run query
		$result = $conn->query($sql);
		
		//4. loop through provinces
		foreach ($result as $row) {
			//5. add provinces to dropdown
			echo '<option>' . $row['price'] . '</option>';
		}
		
		//6. disconnect
		$conn = null;
		?>
	</select>
</div>




<div>
	<label for="buyers_name">Buyers Name:</label>
	<input name="buyers_name" />
</div>
<div>
	<label for="email">Email:</label>
	<input name="email" type="email" />
</div>
<div>
	<label for="confirm_email">Confirm Email:</label>
	<input name="confirm_email" type="confirm_email" />
</div>

<div>
	<label for="details">Details:</label>
	<textarea name="details"></textarea>
</div>
<input type="submit" value="Submit" />
</form>


</body>

</html>
