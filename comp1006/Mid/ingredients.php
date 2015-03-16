<?php
  
  if($_POST) {
	 
	 //store the values to database
	  $meals = $_POST['meals'];

	  if(empty($meals))
	  {
	  	  echo 'Please select a meal';	
		  echo '<a href="http://gc200265054.computerstudi.es/comp1006/Mid/select-meal.php">Go back and Select a Meal </a>';
      }
  	else
  	{
	  //connect
	  $conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200265054', 'gc200265054', 'Sig!iEgv');
	  
	  $sql = "SELECT * FROM ingredients WHERE meal = '$meals'"; // sql command

			$result = $conn -> query($sql);


			//start the table before the loop
		      echo '<table bordercolor="red" border="1px">
		      		<tr>
		      			<th>Ingredient</th>
		      			<th>amount</th>		      			
		      		</tr>';
		      
		      //loop through the data and create a new row with 2 columns for each record
		      foreach($result as $row){
		      	echo '<tr><td>'	. $row['ingredient'] . '</td>' . '<td>' . $row['amount'] . '</td></tr>';	
		      }

		      //close the table
		      echo '</table>';	
		  
		  //disconnect
		  $conn = null;	
	    
  } // end of else   		  
  
  } // end of main post

   echo '<p> Check ingredients for another meal </p>';
   echo '<a href="http://gc200265054.computerstudi.es/comp1006/Mid/select-meal.php">Go back and select another meal </a>';
   
?>


