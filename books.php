<?php

    include "connection.php";
    include "navbar.php";

?>


<!DOCTYPE html>
<html>
<head>

	<title>Books</title>
	<style type="text/css">
	  .srch
	  {
		  padding-left:1100px;
	  }
	</style>
</head>
<body>
		<!--........................................search bar ................................................-->

		<div class="srch">
			<form class="navbar-form" method="post" name="form1">
			<label for="department">Choose a Department: </label>
			<select name="department">
	  				<optgroup label="Educational">
	  						<option>ECE</option>
							  <option>EEE</option>
							  <option>CSE</option>
				    </optgroup>

					<optgroup label="Entertainment">
					<option>ACTION</option>
					<option>COMEDY</option>
					<option>HORROR</option>
				    </optgroup>
			</select>
				<div>
					<input class="form-control" type="text" name="search" placeholder="search books.."required="" >
					
					<button style="background-color: #18c8d6;" type="submit" name="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</div>
			</form>
		</div>


	<h2>List Of Books</h2>
	<?php

	if(isset($_POST['submit']))

	{
		
		$q=mysqli_query($db,"SELECT * from books where name like '%$_POST[search]%' and department='$_POST[department]' ");
		
		if(mysqli_num_rows($q)==0)
		{
			echo "Sorry! No book found.try searching again.";
		}
		else
		{
			echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #18c8d6;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";

				echo "</tr>";
			}
			
		echo "</table>";
		}
		
	}
	  /* if button is not pressed. */
	else
	{

		$res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #18c8d6;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";

				echo "</tr>";
			}
			
		echo "</table>";
	}
	?>
</body>
</html
    
