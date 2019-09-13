<?php
include('includes/config.php');

?>


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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Search <small>Donor</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Search  Donor</li>
        </ol>
            



<body>

        <!-- Content Row -->
        <form name="donar" method="post">
<div class="row">

<div class="col-lg-4 mb-4">
<div class="font-italic">Full Name<span style="color:red">*</span></div>
<div><input type="text" name="name" class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Email<span style="color:red">*</span></div>
<div><input type="text" name="email" class="form-control" ></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>
</div>
       <!-- /.row -->
</form>   

        
        <div class="col-lg-6 mb-4">

        <?php
 if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];

$sql1 =  "SELECT * from staff where name like'$name' or email like '$email'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        echo "<tr><td>"."Name: " . $row["name"]. "</tr></td> ". "<br>";
        echo "<tr><td>"."Gender: " . $row["gender"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Job Category: " . $row["job_category"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Job Title: " . $row["job_title"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Qualification: " . $row["qualification"]. "</tr></td>". "<br>";
        
        echo "<tr><td>"."Date Of Birth :". $row["date"]. "/" . $row["month"]."/" . $row["year"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Email: " . $row["email"]. "</tr></td>". "<br>";

       $sql1 = "SELECT phone FROM staff_phone  where s_id= '".$row['s_id']."' ";
        $results = $conn->query($sql1);
        $rows = $results->fetch_assoc();
        echo "<td>"."Phone Number :". $rows["phone"]. "</td>". "<br>";

        echo "<tr><td>"."Address :"."</tr></td>". "<br>";
        echo "<tr><td>"." Road_no: " . $row["road_no"].","." Zip_code: " . $row["zip_code"].","." District: " . $row["district"]."</tr></td>". "<br>";
        
    }
} else {
    echo htmlentities("No Record Found");
}


            } ?>
          
 

        
        </div>



</div>
  

</body>

<?php include('includes/footer.php');?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</html>
