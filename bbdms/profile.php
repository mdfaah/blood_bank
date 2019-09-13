 <!DOCTYPE html>
<html>
<head>

</head>
<body style="text-align:left">
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

 

<h2 style="text-align:center">Profile</h2>
        <?php
     if(isset($_SESSION['type'])){
         if($_SESSION['type'] == 'donner')
           {

            include('donner.php');
            $id= $_SESSION['id'];
           $sql1 = "SELECT * FROM donner where id ='$id'";
        }

      }
        else{

            include('donner.php');
        $sql1 = "SELECT * FROM donner ORDER BY id DESC LIMIT 1";
        }
      

$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>"."Name: " . $row["name"]. "</tr></td> ". "<br>";
        echo "<tr><td>"."Religion: " . $row["religion"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Gender: " . $row["gender"]. "</tr></td>". "<br>";
        echo "Date Of Birth :". $row["dateofbirth"].  "<br>";
        echo "<tr><td>"."Email: " . $row["email"]. "</tr></td>". "<br>";

        $sql1 = "SELECT phone FROM donner_phone  where id= '".$row['id']."' ";
        $results = $conn->query($sql1);
        $rows = $results->fetch_assoc();
        echo "<td>"."Phone Number :". $rows["phone"]. "</td>". "<br>";
        echo "Last Donate  Date:". $row["last_donate_date"].  "<br>";
        echo "<tr><td>"."Bloodgroup: " . $row["bloodgroup"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Address :"."</tr></td>". "<br>";
        echo "<tr><td>"." House_no: " . $row["house_no"].","." Road_no: " . $row["road_no"].","." Word no: " . $row["word_no"].","."Area Name: " . $row["area_name"].","." Thana: " . $row["thana"].","." Post_code: " . $row["post_code"].","." District: " . $row["district"].","." Division: " . $row["division"]."</tr></td>". "<br>";
        

         if($_SESSION['type'] == 'donner')
           {

          echo  " 
        <a href=\"updataddress.php?PID=".$row['id']."\">Update Address</a>"
       ;
         echo  " 
        <a href=\"changelastdate.php?PID=".$row['id']."\">Update last_donate_date</a>"
       ;


           }




        
    }
} else {
    echo "0 results";
}


?>
<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

<?php include('includes/footer.php');?>

</div>
</body>
</html>