

       
 <div class="row mb-4">

<?php
 

$sql1 = "SELECT * FROM donner ORDER BY rand() limit 3 ";
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
        echo "Last Donate  Date:". $row["last_donate_date"].  "<br>";
         $sql1 = "SELECT phone FROM donner_phone  where id= '".$row['id']."' ";
        $results = $conn->query($sql1);
        $rows = $results->fetch_assoc();
        echo "<td>"."Phone Number : " . $rows["phone"]. "</td> ". "<br>";;

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

