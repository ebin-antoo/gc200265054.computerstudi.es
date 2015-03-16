<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Select Country</title>
</head>

<body>
<form method="="post" action="show-country.php">
<div>
	<label for="country">Select your Country:</label>
	<select name="country">
		<?php
		//1.conn to db
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200265054', 'gc200265054', 'Sig!iEgv');

		//2.write sql query to fecth countrys
		$sql = "SELECT * FROM countries";
		//3.Excute the query and store results
		$result = $conn->query($sql);
		//4.loop through reslut and
		
		//5.format and output each country, wrap each value in html <option></option> tags
		foreach ($result as $row) {
		echo
		'<option>' . $row['country'] . '</option>';
		}
		
		//6.disconnect
		$conn = null;
		
		?>

	</select>
</div>

</form>
</body>

</html>
