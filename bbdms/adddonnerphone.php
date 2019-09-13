<?php
error_reporting(0);
include('includes/config.php');

$phone=$_POST['phone'];

$sql= "INSERT INTO donner_phone(phone,id) VALUES ('$phone',(SELECT id FROM donner ORDER BY id DESC LIMIT 1))";

$query = mysql_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
   echo '<script type="text/javascript"> alert("User Registered......") </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>