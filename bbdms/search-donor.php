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
<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
<div><select name="bloodgroup" class="form-control" required>
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


<div class="col-lg-4 mb-4">
<div class="font-italic">Area Name<span style="color:red">*</span></div>
<div><input type="text" name="area_name" class="form-control" ></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>
</div>
       <!-- /.row -->
</form>   

        <div class="row">


        <?php
 if(isset($_POST['submit']))
{

$bloodgroup=$_POST['bloodgroup'];
$area_name=$_POST['area_name'];

$sql1 =  "SELECT * from donner where bloodGroup='$bloodgroup' or area_name like '$area_name'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
       echo "<div class=\"col-lg-4 col-sm-6 portfolio-item\">";

       echo "<div align=center><img src=\"user-icon-6.png\" width=\"50%\"alt=\"bla bla\" ></div>";
      
        echo "<tr><td>"."Name: " . $row["name"]. "</tr></td> ". "<br>";
        echo "<tr><td>"."Religion: " . $row["religion"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Gender: " . $row["gender"]. "</tr></td>". "<br>";
         echo "Date Of Birth :". $row["dateofbirth"].  "<br>";
        echo "<tr><td>"."Email: " . $row["email"]. "</tr></td>". "<br>";
        $sql1 = "SELECT phone FROM donner_phone  where id= '".$row['id']."' ";
         $results = $conn->query($sql1);
        $rows = $results->fetch_assoc();
        echo "<td>"."Phone Number :". $rows["phone"]. "</td>". "<br>";

        echo "<tr><td>"."Bloodgroup: " . $row["bloodgroup"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Address :"."</tr></td>". "<br>";
        echo "<tr><td>"." House_no: " . $row["house_no"].","." Road_no: " . $row["road_no"].","." Word no: " . $row["word_no"].","."Area Name: " . $row["area_name"].","." Thana: " . $row["thana"].","." Post_code: " . $row["post_code"].","." District: " . $row["district"].","." Division: " . $row["division"]."</tr></td>". "<br>";

        echo "</div>";
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
