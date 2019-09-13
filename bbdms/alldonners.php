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
   <style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
    margin: 0px;

}

table {
    position: top;
    height: 40px;
    width: 100%;
    margin: 0px;
}

th, td {
    padding: 15px;
}
.container {
    width: 1140px;
    max-width: 100%;
}
</style>
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

<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Some Donner</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Some Donner</li>
        </ol>
       

<div class="row mb-4">
<?php
//$id = "id";

$sql1 = "SELECT * FROM donner where type = 'donner' ORDER BY id  ";


$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
         
         echo "<div class=\"col-lg-4 col-sm-6 portfolio-item\">";
        echo "<div align=left><img src=\"user-icon-6.png\" width=\"25%\"alt=\"bla bla\" ></div>";
      
        echo "<tr><td>"."Name: " . $row["name"]. "</tr></td> ". "<br>";
        echo "<tr><td>"."Religion: " . $row["religion"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Gender: " . $row["gender"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Date Of Birth :". $row["dateofbirth"]. "<br>";
        echo "<tr><td>"."Email: " . $row["email"]. "</tr></td>". "<br>";
         $sql1 = "SELECT phone FROM donner_phone  where id= '".$row['id']."' ";
        $results = $conn->query($sql1);
        $rows = $results->fetch_assoc();
        echo "<td>"."Phone Number : " . $rows["phone"]. "</td> ". "<br>";;
         echo "Last Donate  Date:". $row["last_donate_date"].  "<br>";
        echo "<tr><td>"."Bloodgroup: " . $row["bloodgroup"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Address :"."</tr></td>". "<br>";
        echo "<tr><td>"." House_no: " . $row["house_no"].","." Road_no: " . $row["road_no"].","." Word no: " . $row["word_no"].","."Area Name: " . $row["area_name"].","." Thana: " . $row["thana"].","." Post_code: " . $row["post_code"].","." District: " . $row["district"].","." Division: " . $row["division"]."</tr></td>". "<br>";
        echo "</div>";
      
        






       
    }
    
} else {
    echo "0 results";
}

        


?>
</div>
<?php include('includes/footer.php');?>

</body>
</html>