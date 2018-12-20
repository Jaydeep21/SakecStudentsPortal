<?php

include('navbar.php');
include('../assets/php/connection.php');
$calc1="select * from calculator where model='fx-115ESplus'";
$calc2="select * from calculator where model='fx-991ES'";
$calc3="select * from calculator where model='fx-82MS'";
if(!mysqli_query($conn,$calc1) || !mysqli_query($conn,$calc2) || !mysqli_query($conn,$calc3)){
    echo $calc;
    echo"query me gadbad";
}
else{
    $count1=mysqli_num_rows(mysqli_query($conn,$calc1));
    $count2=mysqli_num_rows(mysqli_query($conn,$calc2));
    $count3=mysqli_num_rows(mysqli_query($conn,$calc3));
?>

<html>
    <head>
        <title>Borrow | Calculator</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <style>
            img{
                height:400px;

            }
        </style>
    </head>
    <body>
        <div class="container" >
            
            <h1 class="display-3">Calculator</h1>
            <p class="lead"><br><br>&ensp;&ensp; A scientific calculator is a calculator designed to help you calculate science, engineering, and mathematics problems.It has way more buttons than your standard calculator that just lets you do your four basic arithmetic operations of addition, subtraction, multiplication, and division.</p>
            <div class="row">
                <div class="col-xl-4">
                    <img src="../assets/img/calci.jpg" class="d-inline " >
                    <h3 class="d-flex justify-content-center">Count:<?php echo $count1;?></h3>
                    <div class="d-flex justify-content-center">
                        <?php
                    
                                if($count1==0){
                        ?>        
                            <a href="#" class="btn btn-success btn-lg  disabled" role="button" aria-disabled="true">Borrow</a>
                        <?php    }
                                else{
                        ?>
                            <a href="#!" class="btn btn-success btn-lg  active " role="button" aria-pressed="true">Borrow</a>
                        <?php
                            }
                        ?>
                    </div>    
                </div>
                <div class="col-xl-4">
                    <img src="../assets/img/calci1.jpg" class="d-inline">
                    <h3 class="d-flex justify-content-center">Count:<?php echo $count3;?></h3>
                    <div class="d-flex justify-content-center">
                        <?php
                    
                                if($count3==0){
                        ?>        
                            <a href="#" class="btn btn-success btn-lg disabled" role="button" aria-disabled="true">Borrow</a>
                        <?php    }
                                else{
                        ?>
                            <a href="#!" class="btn btn-success btn-lg active " role="button" aria-pressed="true">Borrow</a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="col-xl-4 ">
                    <img src="../assets/img/calci3.jpg" class="d-inline">
                    <h3 class="d-flex justify-content-center">Count:<?php echo $count2;?></h3>
                    <div class="d-flex justify-content-center">
                        <?php
                    
                                if($count2==0){
                        ?>        
                            <a href="#" class="btn btn-success btn-lg disabled justify-content-center" role="button" aria-disabled="true">Borrow</a>
                        <?php    }
                                else{
                        ?>
                            <a href="#!" class="btn btn-success btn-lg active justify-content-center" role="button" aria-pressed="true">Borrow</a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>