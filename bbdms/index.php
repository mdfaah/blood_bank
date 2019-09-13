<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <?php
    session_start();
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
     include('includes/slider.php');
 ?>
   
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to BloodBank & Donor Management System</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">The need for blood</h4>
                   
                        <p class="card-text" style="padding-left:2%">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Blood Tips</h4>
                   
                        <p class="card-text" style="padding-left:2%">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Who you could Help</h4>
                   
                        <p class="card-text" style="padding-left:2%">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </div>
        <!-- /.row -->

         <h2 style="position: center">Some of the Donar</h2>


         
         <?php include('somedonner.php');?>
  

      
        


            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="">
            </div>
        
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">Become a Donar</a>
            </div>
        </div>

    </div>
    <!-- /.container -->
    
   
    <!-- Footer -->
  

</body>

<?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</html>
