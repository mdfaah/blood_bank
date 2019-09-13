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

<body>

 <?php 

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

   
    
       
       

<?php
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
  {
$name=$_POST['name'];

$gender=$_POST['gender'];
$job_category=$_POST['job_category'];
$job_title=$_POST['job_title'];
$qualification=$_POST['qualification'];
$email=$_POST['email'];
$dateofbirth=$_POST['dateofbirth'];


$house_no=$_POST['house_no'];
$road_no=$_POST['road_no'];
$word_no=$_POST['word_no'];
$area_name=$_POST['area_name'];
$thana=$_POST['thana'];
$post_code=$_POST['post_code'];
$district=$_POST['district'];
$division=$_POST['division'];


$sql="INSERT INTO staff(name,gender, job_category,job_title,qualification,email,dateofbirth,house_no,  road_no,word_no,area_name,thana,post_code,district,division) VALUES ('$name','$gender','$job_category','$job_title','$qualification','$email','$dateofbirth','$house_no','$road_no',
'$word_no','$area_name','$thana','$post_code','$district','$division')"; 


$query = mysql_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
     include('addstaffphone.php');
      //echo '<script type="text/javascript">location.href = \'staffprofile.php\';</script>';
} else {

    echo '<script type="text/javascript"> alert("This Email is Allready Available")</script>';
    echo '<script type="text/javascript">location.href = \'became-staff.php\';</script>';
   // echo "Error: " . $sql . "<br>" . $conn->error;
}





}

?>

<body>

   
 
</body>


</html>