<style>.w3-btn{
  color:white;
}

</style>

    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="index.php">BloodBank & Donar Management System</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="alldonners.php?type=donor">Some Donors</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="search-donor.php">Search Blood</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact for order</a>
                    </li>
                    <?php
                    //session_start();
                        if(isset($_SESSION['type'])){
                            if($_SESSION['type'] == 'donner'){

                                echo '<li class="nav-item">
                                            <a class="nav-link" href="profile.php">Profile</a>
                                        </li>';


                                echo '<li class="nav-item">
                                            <a class="nav-link" href="logout.php">Log Out</a>
                                        </li>';
                            }
                        }
                        else{

                            echo '<li class="nav-item">
                        <a class="nav-link" href="become-donar.php">Become a Donar</a>
                    </li>;';
                            echo '<li class="nav-item">
                        <a class="nav-link" href="login.php?type=admin">Login</a>
                    </li>';
                    
                        }
                    ?>
                    
                    
                 
                </ul>
            </div>
        </div>
    </nav>