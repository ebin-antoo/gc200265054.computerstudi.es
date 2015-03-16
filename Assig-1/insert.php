<?php
  
  if($_POST) {
	  if ($_POST['password'] != $_POST['confirm_password']) {
	  // fail
	  
	    
	  echo '<p> Password do not match </p>';
	  echo '<a href="http://gc200265054.computerstudi.es/Assig-1/index.php">Go back and fill all the fields </a>';
	  
  } else {
	  //store the values to database
	  $first_name = $_POST['first_name'];
	  $last_name = $_POST['last_name'];
	  $email = $_POST['email'];
	  $domain_name = $_POST['domain_name'];
	  $pass_word = $_POST['password'];
	  $domains = $_POST['domains'];
	  $city = $_POST['city'];
	  $province = $_POST['province'];
	  
	  if(empty($first_name) && empty($last_name) && empty($email) && empty($domain_name) && empty($pass_word) && empty($domains) && empty($city) && empty($province))
	  {
  	  echo 'Please fill all the fields';	
	  echo '<a href="http://gc200265054.computerstudi.es/Assig-1/index.php">Go back and fill all the fields </a>';
  }
  	else
  {
	  //connect
	  $conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200265054', 'gc200265054', 'Sig!iEgv');
	  
	  //set up the sql command
	  $sql = "INSERT INTO users(Fname,Lname,email,password,Dname,city,province,domains) VALUES('$first_name','$last_name','$email','$pass_word','$domain_name', '$city','$province', '$domains')";
	  
	  $subject = 'Website Registration';
	  $message = 'Thank you for Registring' . 'This is the confirmation about your registration Please dont reply to the email';
	  
	  //mail function to send the email
	  mail($email,$subject,$message);
	  
	  $conn -> exec($sql);
	  
	  //close the connection
	  $conn = null;
	  header ('Location: http://gc200265054.computerstudi.es/Assig-1/index.php');	
	    
  }   		  
  
  } // end of compare password
    //end of main if 
  } else {
	  
	  $error = 'No Data Posted!';	
	  echo '<p>'.$error.'</p>';
	  echo '<a href="http://gc200265054.computerstudi.es/Assig-1/index.php">Go back and fill all the fields </a>';
  }
?>
