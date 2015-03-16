<form action="ingredients.php" method="post"> <!--Form tag-->
	<div>
		<label for="meals">Meals</label>

		<?php 
		  //connect 
		  $conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200265054', 'gc200265054', 'Sig!iEgv');
		  
		  $sql = "SELECT * FROM meals";

			$result = $conn -> query($sql);


			//Meals dropdown	
			echo '<select name="meals" required >	 
			<option value="">Please select a Meal</option>';	

			foreach($result as $row){
			echo '<option value="'.$row['meal'].'">' . $row['meal'] . '</option>';	
			}

			echo '</select>';		
		  
		  //disconnect
		  $conn = null;	
		?>
	</div>


	<div>
		<input type="submit" value="Get Ingredients" name="submit" /> <!-- submit button -->
	</div>
</form>

