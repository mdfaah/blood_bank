<?php
   
    session_start();

  include('includes/config.php');

  if(isset($_SESSION['email'])){
    include('includes/header1.php');
  }
  else
    include('includes/header.php');

  
?>
<!DOCTYPE html>
<html>
<head>
<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style>
</head>
<body style="text-align:left">


<h2 style="text-align:center">Profile</h2>
<?php

include('staff.php');


$sql1 = "SELECT * FROM staff ORDER BY s_id DESC LIMIT 1";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>"."Name: " . $row["name"]. "</tr></td> ". "<br>";
        echo "<tr><td>"."Gender: " . $row["gender"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Job Category: " . $row["job_category"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Job Title: " . $row["job_title"]. "</tr></td>". "<br>";
        echo "<tr><td>"."Qualification: " . $row["qualification"]. "</tr></td>". "<br>";
        
        echo "Date Of Birth :". $row["dateofbirth"]. "<br>";
        echo "<tr><td>"."Email: " . $row["email"]. "</tr></td>". "<br>";

       $sql1 = "SELECT phone FROM staff_phone  where s_id= '".$row['s_id']."' ";
        $results = $conn->query($sql1);
        $rows = $results->fetch_assoc();
        echo "<td>"."Phone Number :". $rows["phone"]. "</td>". "<br>";

        echo "<tr><td>"."Address :"."</tr></td>". "<br>";
        echo "<tr><td>"." House_no: " . $row["house_no"].","." Road_no: " . $row["road_no"].","." Word no: " . $row["word_no"].","."Area Name: " . $row["area_name"].","." Thana: " . $row["thana"].","." Post_code: " . $row["post_code"].","." District: " . $row["district"].","." Division: " . $row["division"]."</tr></td>". "<br>";
       // echo  " <a href=\"delete.php?PID=".$row['h_id']."\">Delete Order</a>";
       

        
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
</body>
</html>