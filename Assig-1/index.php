<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>WebSite Registration</title>
      <h1>WebSite Registration</h1>
    </head>
    
    <body>   
      
      <style type="text/css">
      tr>td:nth-child(4) {
		text-transform: lowercase;
	  }

	  #domains{
	  	position: absolute;
	  }
      </style>
      
      <form action="insert.php" method="post"> <!--Form tag-->
      
        <p>
        	<label for="first_name">First Name</label>
        	<input type="text" name="first_name" maxlength="455" required="required" placeholder="First Name" />
        	<label for="last_name"> Last Name</label>
        	<input type="text" name="last_name" maxlength="455" required="required" placeholder="Last Name" />
        </p>
        
        <p>    
        	<label for="email">Email</label>
        	<input name="email" type="email" required="required" placeholder="Email" autocomplete="off" maxlength="999" />
        </p>
        
		<p>    
        	<label for="domain">Domain Name</label>
        	<input name="domain_name" type="text" required="required" placeholder="Domain Name" maxlength="999" />

        	<label for="domains">Domains</label>

        <?php 
		  //connect 
		  $conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200265054', 'gc200265054', 'Sig!iEgv');
		  
		  $sql = "SELECT * FROM domains";

			$result = $conn -> query($sql);


			//Domains dropdown	
			echo '<select name="domains" required >	 
			<option value="">Please select a Domain</option>';	

			foreach($result as $row){
			echo '<option value="'.$row['domains'].'">' . $row['domains'] . '</option>';	
			}

			echo '</select>';		
		  
		  //disconnect
		  $conn = null;	
        ?>
        </p>       

        <p>
        	<label for="password">Password</label>
        	<input type="password" name="password" maxlength="99" required="required" placeholder="Password" />
        </p>

        <p>    
        	<label for="confirm_password">Re-Type Password</label>
        	<input type="password" name="confirm_password" maxlength="99" required="required" placeholder="Re-Type Password" />
        </p>
        
        

        <p>
      		<label for="city">City</label>
        	<input type="text" name="city" maxlength="99" required="required" placeholder="City" />

      		<label for="province">Province</label>
        	<input type="text" name="province" maxlength="99" required="required" placeholder="Province" />
        </p>

        <p>
        	<input type="submit" value="Submit" name="submit" />
        </p>
      </form>	<!--End of form -->
      
      
      
    </body>
  </html>