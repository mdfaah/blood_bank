<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>
    <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>

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



    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Contact</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact For Order</li>
        </ol>

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
              <div class="col-lg-8 mb-4">
                
                <form name="contact"  method="post" action="orders.php">


<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Hospital Name / Name<span style="color:red">*</span></div>
<div><input type="text" name="h_name" class="form-control" required></div>
</div>


<div class="col-lg-4 mb-4">
<div class="font-italic">amount<span style="color:red">*</span></div>   
<div> <input type="text" name="amount" class="form-control" required></div>  
</div>
</div>


<div class="row">



<div class="col-lg-4 mb-4">
<div class="font-italic">Last Date Of Requirement<span style="color:red">*</span></div>   
<div> <input type="Date" name="lastdate" class="form-control" required></div>  
</div>
  


</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic"> Mobile Number<span style="color:red">*</span></div>   
<div> <input type="text" name="phone" class="form-control" required></div>  
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
<div><select name="type" class="form-control" required>
<option value="">Select</option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="AB+">AB+</option>
<option value="O+">O+</option>
<option value="A-">A-</option>
<option value="B-">B-</option>
<option value="AB-">AB-</option>
<option value="O-">O-</option>
</select>
</div>
</div>
</div>



<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Address<span style="color:red">*</span></div>
<div><input type="text" name="address" class="form-control" required></div>
</div>
</div>


<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>



</div>



        <!-- /.row -->
</form>   
 </div>

 


</body>

<?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</html>
