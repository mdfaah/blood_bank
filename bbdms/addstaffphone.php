<?php
error_reporting(0);
include('includes/config.php');

$phone=$_POST['phone'];

$sql= "INSERT INTO staff_phone(phone,s_id) VALUES ('$phone',(SELECT s_id FROM staff ORDER BY s_id DESC LIMIT 1))";

$query = mysql_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
   echo '<script type="text/javascript"> alert("User Registered......") </script>';
} else {
	
   echo "Error: " . $sql . "<br>" . $conn->error;
}



?>