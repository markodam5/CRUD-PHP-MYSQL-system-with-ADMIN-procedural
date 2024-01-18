<div class="middle">
	<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$model = $_POST['model'];
		$manu = $_POST['manu'];

		mysqli_query($conn,"insert into products values (null,'$model','$manu')");

		header("location: index.php");
	}
	?>
	<form action="" method="post">
		<p>Model: <br><input type="text" name="model"><p>
		<p>Manu: <br><input type="text" name="manu"></p>
		<input type="submit" name="submit" value="insert">
	</form> 
	<a href="./" class="back-link">Back to the users list</a>
</div>