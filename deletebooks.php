<?php
include"connection.php";
include"navbooks.php";
include"navbar1.php";
?>

<!DOCTYPE html>
<head>
	<title>Books</title>
	<style type="text/css">
		.deletebook{
			padding-left:120px;
		}
	</style>
</head>
<body>
	<h2> List Of Books</h2>
	<div class="deletebook">
		<form class="navbar-form" method="post" name="form1">			
				<input class="form-control" type="text" name="bid" placeholder="Enter Book ID" required="">
				<button style="background-color:#00BFFF;" type="submit" name="submit1" class="btn btn-default">Delete
				</button>
		</form>	
	</div>
<?php          //search book
		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * from books where name like '%$_POST[search]%' ");
			if(mysqli_num_rows($q)==0)
			{  echo "Sorry! No book found. Try searching again.";  }
			else
			{
				echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color:green;'>";
			//echo "<tr style='background-color:green'>";	//Table header			#6db6b9e6;
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
				echo "<td>"; echo $row['author']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
	       }
		}
		else
		{ //if search button is not pressed
			$res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color:green;'>";
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
				echo "<td>"; echo $row['author']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}

	//delete book	
		if(isset($_POST['submit1']))
		{
			if(isset($_SESSION['login_user']))//admin has logged in then only perform deletion
			{
				mysqli_query($db,"DELETE from books where bid = '$_POST[bid]'; ");
				?>
					<script type="text/javascript">
						alert("Delete Successfully.");
					</script>
				<?php
			}
			else
			{
				?>
					<script type="text/javascript">
						alert("Please Login First.");
					</script>
				<?php
			}
		}
?>

</body>
