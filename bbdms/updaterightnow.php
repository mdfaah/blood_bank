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
    $pid = $_GET['PID'];
   


    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Donner Update From</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Donner Update From</li>
        </ol>
       
        <!-- Content Row -->
           <form name="update"  method="post" action="updateaddress1.php">



<div class="row">
<div class="font-italic">Adress </div>
</div>


<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">House no<span style="color:red">*</span></div>
<div><input type="text" name="house_no" class="form-control" ></div>
</div>


<div class="col-lg-4 mb-4">
<div class="font-italic">Road no<span style="color:red">*</span></div>
<div><input type="text" name="road_no" class="form-control" ></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Word no<span style="color:red">*</span></div>
<div><input type="text" name="word_no" class="form-control" ></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Area Name<span style="color:red">*</span></div>
<div><input type="text" name="area_name" class="form-control" ></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Thana<span style="color:red">*</span></div>
<div><input type="text" name="thana" class="form-control" ></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Post Code<span style="color:red">*</span></div>
<div><input type="text" name="post_code" class="form-control" ></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">District<span style="color:red">*</span></div>
<div><input type="text" name="district" class="form-control" ></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Division<span style="color:red">*</span></div>
<div><input type="text" name="division" class="form-control" ></div>
</div>
</div>

<tr>
    <!-- other cells -->
    <td>
      <form method="post" action="">
        <input type="submit" name="action" value="Update"/>
        <input type="hidden" name="pid" value="<?php echo $pid; ?>"/>
      </form>
    </td>
  </tr>


<?php
 //echo  " 
  //      <a href=\"updaterightnow-db.php?PID=".$pid."\">hgfd</a>"
  //     ;


?>



</div>



        <!-- /.row -->
</form>
        <!-- /.row -->
</div>
 

</body>

 <?php include('includes/footer.php');?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</html>
