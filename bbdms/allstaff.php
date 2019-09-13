<!DOCTYPE html>
<html>
<head>

</head>

<?php
  include('includes/config.php');
   
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
<body style="text-align:left">

<div class="container">
 

<h2 style="text-align:center">All Staff Profile</h2>
<div class="row mb-6">
<?php
include('staff.php');

$sql1 = "SELECT * FROM staff ORDER BY s_id ";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class=\"col-lg-4 col-sm-4 portfolio-item\">";
        echo "<div  align=left><img src=\"user-icon-6.png\" width=\"15%\"alt=\"bla bla\" ></div>";
        echo "Name: " . $row["name"]. "<br>";
        echo  "Gender: " . $row["gender"]."<br>";
        echo "Job Category: " . $row["job_category"]."<br>";
        echo "Job Title: " . $row["job_title"]."<br>";
        echo "Qualification: " . $row["qualification"]."<br>";
        
        echo "<tr><td>"."Date Of Birth :". $row["dateofbirth"]. "<br>";
        echo "<tr><td>"."Email: " . $row["email"]. "</tr></td>". "<br>";

       $sql1 = "SELECT phone FROM staff_phone  where s_id= '".$row['s_id']."' ";
        $results = $conn->query($sql1);
        $rows = $results->fetch_assoc();
        echo "<td>"."Phone Number :". $rows["phone"]. "</td>". "<br>";

        echo "<tr><td>"."Address :"."</tr></td>". "<br>";
        echo "<tr><td>"." House_no: " . $row["house_no"].","." Road_no: " . $row["road_no"].","." Word no: " . $row["word_no"].","."Area Name: " . $row["area_name"].","." Thana: " . $row["thana"].","." Post_code: " . $row["post_code"].","." District: " . $row["district"].","." Division: " . $row["division"]."</tr></td>". "<br>";


       



        
       echo "</div>";
        
    }
} else {
    echo "0 results";
}




?>
</div>




</div>
</body>

<?php include('includes/footer.php');?>
</html>