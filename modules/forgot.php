<?php

include('navbar.php');

?>
<html>
        <head>
            <title>Login</title>
            
           
            <link rel="stylesheet" href="../assets/css/login.css" type="text/css">
        </head>
        <body>
            <?php include('navbar.php');?>
            <div class="loginbox" style="height:300px;">
                <h1 >Recovery</h1>
                <form method="post" action="../assets/php/forgot.php">
                    <p>Enter your Email id:</p>
                    <input type="text" placeholder="Enter your email" class="emailid"  style="width:62%"  name="email" required>@sakec.ac.in
                    <input type="submit"value="Continue">
                </form>
            </div>
        </body>
    </html>