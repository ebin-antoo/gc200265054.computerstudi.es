<?php
	
	//connect
	$servername = "sql.computerstudi.es";
	$username = "gc200265054";
	$password = "Sig!iEgv";
	$dbname = "gc200265054";

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	$sql = "SELECT * FROM domains";

	$result = $conn -> query($sql);


	//Domains dropdown	
	echo '<select name="Domains" required >	 
	<option value="">Please sect a Domain</option>';	

	foreach($result as $row){
	echo '<option value="'.$row['domains'].'">' . $row['domains'] . '</option>';	
	}

	echo '</select>';	

	$conn = null;

?>