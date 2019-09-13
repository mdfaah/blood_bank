<!DOCTYPE html>
<html>
<head>

</head>

<?php
  include('includes/config.php');
   
    

  include('includes/config.php');

  if(isset($_SESSION['type'])){
        if($_SESSION['type'] == 'donner'){
          include('includes/header.php');
        }
        else if($_SESSION['type'] == 'admin'){
          include('includes/header1.php');
        }
      }
      else{
        include('includes/header.php');
    }

    
?>
<body style="text-align:left">

<div class="container">
 

<h2 style="text-align:center">Orders</h2>
<div class="row mb-6">
<?php
include('orders.php');

$sql1 = "SELECT * FROM orders ORDER BY h_id ";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class=\"col-lg-4 col-sm-4 portfolio-item\">";
        
        echo "Hospital Name / Name: " . $row["h_name"]. "<br>";
        echo  "Amount: " . $row["amount"]."<br>";
        echo "Blood Group: " . $row["type"]."<br>";
        
        
        echo "Last Date :". $row["lastdate"]. "<br>";
        

       $sql1 = "SELECT phone FROM h_phone  where h_id= '".$row['h_id']."' ";
        $results = $conn->query($sql1);
        $rows = $results->fetch_assoc();
        echo "<td>"."Phone Number :". $rows["phone"]. "</td>". "<br>";

        echo " Address: " . $row["address"]."<br>";

         echo  " <a href=\"delete.php?PID=".$row['h_id']."\">Delete Order</a>";



        
       echo "</div>";
        
    }
} else {
    echo '<script type="text/javascript"> alert("There is No Orders")</script>';
    echo '<script type="text/javascript">location.href = \'index.php\';</script>';

}




?>
</div>




</div>
</body>

<?php include('includes/footer.php');?>
</html>