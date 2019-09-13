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





.input-txt{
    margin: 4px 500px;
  width: 25%;
  padding: 20px 10px;
  background: $blue;
  border: 2px;
  font-size: 1em;
  color: black;
  border-bottom: 1px dotted rgba(250, 250, 250, .4);
  
}

.btn{
    margin: 4px 700px;
  padding: 15px 30px;
  border: none;
  background: bodgerblue;
  color: $blue;
}
.btn--right{
  float: center;
}


</style>



<?php
session_start();

  include('includes/config.php');

  if(isset($_SESSION['email'])){
    include('includes/header1.php');
  }
  else
    include('includes/header.php');

 ?>


    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Login From</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Login From</li>
        </ol>
   </div>

   <div class="imgcontainer"  style="text-align: center">
             <img src="user-icon-6.png"  width="15%" >
            </div>

<body >

  
           <form method="post" action="login.php">
            <input type="text" name="email" placeholder="Username" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          
            <button type="submit" name="singin" class="btn btn--right">Sign in </button>
    
         
 </form>
            
 <?php
            if(isset($_POST['singin']))
            {
                
                $email = $_POST['email'];
                
                $password = $_POST['password'];
                
              
                
                    // $sql1 = "SELECT * FROM admininfo WHERE email='$email' and password='$password'";
                    
                    // $query_run = mysqli_query($conn,$sql1);

                    $sql11 = "SELECT * FROM donner WHERE email='$email' and password='$password'";
                    
                    $query_run1 = mysqli_query($conn,$sql11);
                     $row = $query_run1->fetch_assoc();
                    if($row['type'] == 'admin')
                    {
                        // there is already a user with the same username
                       
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['type'] = $row['type'];
                       
                        header("location:index.php");
                    }
                    else if($row['type'] == 'donner'){

                        //$row = $query_run->fetch_assoc();
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['type'] = $row['type'];
                        $_SESSION['id'] = $row['id'];
                        header("location:index.php");
                      # code...
                    }
                   
                    
                    else
                    {
                        echo '<script type="text/javascript"> alert("Input Not Match") </script>';
                    }   
                    
                    
            }
        ?>
    
            
    


    

</body>

<?php include('includes/footer.php');?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</html>
