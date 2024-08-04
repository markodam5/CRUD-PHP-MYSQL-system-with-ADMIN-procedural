<div class="middle">
    <h3>List Cars information:</h3>
      <div id="car-block">
        
        <?php
  
            if(mysqli_connect_error()){
                echo "Error in connection";
            }else{
                $res = mysqli_query($conn,"select * from products");
                while($row = mysqli_fetch_row($res)){
                    echo "<div class='car-item'><a href='details-$row[0]'>";
                    echo "Car manufacturer : " . $row[2] . "<br>";
                    echo "Car model : " . $row[1] . "<br>";
                    echo "</a></div>";
                }
            }
        ?>
        
    </div>
</div>