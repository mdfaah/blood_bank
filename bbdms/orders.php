<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System | Become A Donar</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
   </head>

   <?php 
    session_start();

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

<body>



   
    
       
       

<?php
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
  {
$h_name=$_POST['h_name'];
$amount=$_POST['amount'];

$type=$_POST['type'];
$lastdate=$_POST['lastdate'];

$address=$_POST['address'];


$sql= "INSERT INTO orders(h_name,amount,type,lastdate,address) VALUES ('$h_name','$amount','$type','$lastdate','$address')";

$query = mysql_query($conn,$sql);

if ($conn->query($sql) === TRUE) {

  echo '<script type="text/javascript"> alert("Order Registered......") </script>';
  header("location:index.php");

   include('orderphone.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}

?>

<body>

   
 
</body>


</html>