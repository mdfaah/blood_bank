      <!DOCTYPE html>
  <html>

      <?php 

    

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
	
	<div id="masthead">  
		<div class="container">
			<div class="row">
				
				<div class="col-md-10">
					<?php
					$sql1 = "SELECT * FROM donner where type = 'donner' ORDER BY id  ";


						$result = $conn->query($sql1);
						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
				
					echo "<hr>";
					 echo'<form method="post" action="save_edit.php">
					<input type="hidden" name="member_id" value="<?php echo $id; ?>">
				     Username:<input type="text" name="username" value="<?php echo  $row[\'name\'];?>" >
						<hr>
						Firstname:<input type="text" name="firstname" value=" $row[\'firstname\']">
						<hr>
						Lastname:<input type="text" name="lastname" value="<?php echo $row[\'lastname\']; ?>">
						<hr>
						Gender:
						<select name="gender">
							<option><?php echo $row[\'gender\']; ?></option>
							<option>Male</option>
							<option>Female</option>
						</select>
						<hr>
						Birthdate:<input name="birthdate" type="text" value="<?php echo $row[\'birthdate\']; ?>">
						<hr>
						Address:<input name="address" type="text" value="<?php echo $row[\'address\']; ?>">
						<hr>
						Status:<input name="status" type="text" value="<?php echo $row[\'status\']; ?>">
						<hr>
						Mobile:<input name="mobile" type="text" value="<?php echo $row[\'mobile\']; ?>">
						<hr>
						Work:<input name="work" type="text" value="<?php echo $row[\'work\']; ?>">
						<hr>
						Religion:<input name="religion" type="text" value="<?php echo $row[\'religion\']; ?>">
						<hr>
						<br>
						<center>
							<button name="save" class="btn edit">Save</button>
						</center>
						<br>
						</form>
                        	
						</div>

					</div> 
				</div><!-- /cont -->';
				?>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="top-spacer"> </div>
						</div>
					</div> 
				</div><!-- /cont -->
			</div>

			
			
			<?php include('footer.php'); ?>
			
		</body>
		</html>