<div class="middle">
	<h2>Car Details:</h2>

	<?php

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		if(is_numeric($id)){
			$res = mysqli_query($conn,"select * from products where id=$id");
			$row = mysqli_fetch_row($res);
			if($id==$row[0]){
				echo "<div id='info-data'>";
				echo "ID : " . $row[0] . "<br>";
				echo "Model : " . $row[1] . "<br>";
				echo "Manu : " . $row[2] . "<br>";
				echo "</div>";
			}else{
				echo "The requested information does not exist";
			}
		}else{
			echo "The requested information does not exist";
		}
	}else{
		echo "The requested information does not exist";
	}

	?>

	<br>
	<a href="./" class="back-link">Back to the items list</a>
</div>