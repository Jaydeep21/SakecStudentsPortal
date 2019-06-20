<?php
session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark " >
            <button class="navbar-toggler mx-auto" data-toggle="collapse" data-target="#collapse_target">
                <span class="navbar-toggler-icon align-center"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapse_target">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item p-2">
                        <a class="nav-link" href="http://localhost/SakecStudentsPortal/index.php">Home</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="http://localhost/SakecStudentsPortal/index.php?#">About Us</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="http://localhost/SakecStudentsPortal/index.php?#">FAQ's</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="http://localhost/SakecStudentsPortal/modules/ebooks.php">Ebooks</a>
                    </li>    
                </ul>
                <ul class="navbar-nav">
                
            
                    
                    <?php if(isset($_SESSION['userid'])){
                        
                    ?>
                    <li class="nav-item p-2">
                        <a class="nav-link " href="http://localhost/SakecStudentsPortal/modules/profile.php"><?php echo "Hello ",$_SESSION['fname']; ?></a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link " href="http://localhost/SakecStudentsPortal/modules/logout.php">Logout</a>
                    </li>
                    <?php } else{?>
                    <li class="nav-item p-2"><a class="nav-link "  href="http://localhost/SakecStudentsPortal/modules/signup.php">Signup</a></li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="http://localhost/SakecStudentsPortal/modules/login.php">Login</a> 
                    </li>
                    <?php }?>
                </ul>
            </div>    
        </nav>
    </body>
</html>