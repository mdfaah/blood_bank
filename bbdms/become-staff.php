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


    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Staff From</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Staff From</li>
        </ol>
       
        <!-- Content Row -->
           <form name="staff"  method="post" action="staffprofile.php">


<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Full Name<span style="color:red">*</span></div>
<div><input type="text" name="name" class="form-control"  required></div>
</div>



<div class="col-lg-4 mb-4">
<div class="font-italic">Gender<span style="color:red">*</span></div>
<div><select name="gender" class="form-control" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>



<div class="col-lg-4 mb-4">
<div class="font-italic">Job Category<span style="color:red">*</span></div>
<div><input type="text" name="job_category" class="form-control"></div>
</div>



<div class="col-lg-4 mb-4">
<div class="font-italic">Job Title<span style="color:red">*</span></div>
<div><input type="text" name="job_title" class="form-control"></div>
</div>



<div class="col-lg-4 mb-4">
<div class="font-italic">Qualification<span style="color:red">*</span></div>
<div><input type="text" name="qualification" class="form-control"></div>
</div>


<div class="col-lg-4 mb-4">
<div class="font-italic">Date Of Birth<span style="color:red">*</span></div>   
<div> <input type="date" name="dateofbirth" class="form-control" required></div>  
</div>
</div>
<div class="row">

<div class="col-lg-4 mb-4">
<div class="font-italic">Email Id<span style="color:red">*</span></div>
<div><input type="email" name="email" class="form-control"></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic"> Mobile Number<span style="color:red">*</span></div>   
<div> <input type="text" name="phone" class="form-control" required></div>  
</div>

</div>


<div class="row">
<div class="font-italic">Address </div>
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
<div><input type="text" name="word_no" class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Area Name<span style="color:red">*</span></div>
<div><input type="text" name="area_name" class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Thana<span style="color:red">*</span></div>
<div><input type="text" name="thana" class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Post Code<span style="color:red">*</span></div>
<div><input type="text" name="post_code" class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">District<span style="color:red">*</span></div>
<div><input type="text" name="district" class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Division<span style="color:red">*</span></div>
<div><input type="text" name="division" class="form-control" required></div>
</div>
</div>



<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>



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
