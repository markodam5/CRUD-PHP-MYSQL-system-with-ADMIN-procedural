<div class="middle">
	<h2>Car details:</h2>
	<?php

	if(!isset($_SESSION['username'])){
		die("Page for admin");
	}
	if(is_numeric($_GET['id']) && isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = null;
		return;
	}

	$res = mysqli_query($conn,"select * from products where id=$id");
	$row = mysqli_fetch_row($res);

	echo "<div id='information-data'>";
		echo "ID : " . $row[0] . "<br>";
		echo "Model : " . $row[1] . "<br>";
		echo "Manu : " . $row[2] . "<br><br>";
		?>
			<a href='update-<?php echo $row[0];?>' id='update-link'>Update</a>
			<a href='delete-<?php echo $row[0];?>' id='delete-link' onclick="return confirm('Are you sure to delete this item')">Delete</a>
		<?php
	echo "</div>";

	?>

	<br><br>
	<a href="./" class="back-link">Back to the items list</a>
</div>