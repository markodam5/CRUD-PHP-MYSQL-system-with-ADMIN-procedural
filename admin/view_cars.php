<div class="middle">
    <h2>Cars list:</h2>
    <?php
    if(!isset($_SESSION['username'])){
        die("Page for admin");
    }
      if(mysqli_connect_error()){
            echo "Error in connection";
        }else{
            $res = mysqli_query($conn,"select * from products");
            while($row = mysqli_fetch_row($res)){
                // Show the message from mysqli_fetch_row in a while loop:
                echo "<a href='details-$row[0]'><div class='car-item'>";
                echo "Car model : " . $row[1] . "<br>";
                echo "Car manufacturer : " . $row[2] . "<br>";
                echo "</div>";
            }

        }
    ?>
    <br>
    <a href="insert" class="insert-new">INSERT NEW</a>
</div>