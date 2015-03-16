<?php

	//connect
	$servername = "sql.computerstudi.es";
	$username = "gc200265054";
	$password = "Sig!iEgv";
	$dbname = "gc200265054";

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	$myfile = fopen("http://data.iana.org/TLD/tlds-alpha-by-domain.txt", "r");
	
	while(!feof($myfile)) { 
	    $v = fgets($myfile) . "<br />";

	    //write and execute the query
		$sql = "INSERT INTO domains(domains) VALUES('$v')";
		
		//execute the sql to save the data to the db
		$conn -> exec($sql);
	}
	
	fclose($myfile);


	$conn = null;
?>


