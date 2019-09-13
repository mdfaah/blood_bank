
<?php

$pid = $_GET['PID'];
   echo "$pid";


include('orders.php');
$sql = "DELETE  FROM orders where h_id ='$pid' ";


$result = $conn->query($sql);
if ($result) {
	
	 echo '<script type="text/javascript"> alert("There is No Orders")</script>';
	  echo '<script type="text/javascript">location.href = \'index.php\';</script>';
}
else
{
	echo"not found";
}
?>