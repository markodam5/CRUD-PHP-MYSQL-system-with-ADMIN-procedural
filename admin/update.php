<div class="middle">
    <?php

    $upd = $_GET['id'];

    $res = mysqli_query($conn,"SELECT * FROM products WHERE id = $upd");
    $row = mysqli_fetch_row($res);

    if(isset($_POST['btn_submit'])){
        $search_id = $_POST['hf_id'];
        $car_id = $row[0];
        if($search_id==$car_id){
        	$model = $_POST['model'];
        	$manu = $_POST['manufacturer'];
        	mysqli_query($conn,"update products set model='{$model}', manu='{$manu}' where id = $car_id");
        	header("location: index.php");
        }
      }
    ?>
    <form action="" method="post">

    <input type="hidden" name="hf_id" value="<?php echo $row[0]; ?>" />
        Car model:<br> <input type="text" name="model" value="<?php echo $row[1]; ?>" /><br><br>
        Car manufacturer:<br> <input type="text" name="manufacturer" value="<?php echo $row[2]; ?>" />
        <br><input type="submit" name="btn_submit" value="confirm changes" />
    </form>
    <br>
    <a href="details-<?php echo $row[0];?>" class="back-link">Back to the item</a>
</div>