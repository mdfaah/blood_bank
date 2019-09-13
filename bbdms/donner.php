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
$name=$_POST['name'];
$religion=$_POST['religion'];
$gender=$_POST['gender'];

$dateofbirth=$_POST['dateofbirth'];

$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$bloodgroup=$_POST['bloodgroup'];
$last_donate_date=$_POST['last_donate_date'];
$house_no=$_POST['house_no'];
$road_no=$_POST['road_no'];
$word_no=$_POST['word_no'];
$area_name=$_POST['area_name'];
$thana=$_POST['thana'];
$post_code=$_POST['post_code'];
$district=$_POST['district'];
$division=$_POST['division'];

 if($password==$confirm_password){
$sql= "INSERT INTO donner(name,religion,gender,dateofbirth,email,password,confirm_password,bloodgroup,last_donate_date,house_no,road_no,word_no,area_name,thana,post_code,district,division,type) VALUES ('$name','$religion','$gender','$dateofbirth','$email','$password','$confirm_password','$bloodgroup','$last_donate_date','$house_no','$road_no',
'$word_no','$area_name','$thana','$post_code','$district','$division','donner')";

$query = mysql_query($conn,$sql);

if ($conn->query($sql) === TRUE) {

   include('adddonnerphone.php');
   header("profile.php");

} else {
     echo '<script type="text/javascript"> alert("This Email is Allready Available")</script>';
    echo '<script type="text/javascript">location.href = \'become-donar.php\';</script>';
}



}
else
        {
          echo '<script type="text/javascript"> alert("Password and confirm password does not match!")</script>'; 
        }
}
else
{
  include('become-donner.php');
}

?>

<body>

   
 
</body>


</html>