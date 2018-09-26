<?php

include('navbar.php');
session_start();

?>
<html>
	<head>
		<title>Sign up</title>
        <link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src=""></script>
        
       
    </head>
	<body>
        <div class="loginbox" style="width: 320px;height: 775px;top:70%">
            <h1>Sign up</h1>
            <form action="../assets/php/signup.php" method="post" onsubmit="return checkForm(this);">
                <p>First Name:</p>
                <input type="text" placeholder="Enter First Name" name="fname" required>
                <p>Last Name:</p>
                <input type="text" placeholder="Enter Last Name" name="lname" required>
                <p>Sakec Email id:</p>
                <p><input type="text"  placeholder='Enter Sakec emailid' name="emailid" id="email" required >@sakec.ac.in</p>
                <p>Contact Number:</p>
                <input type='text' placeholder='Enter your phone number here' id="phone" name="phone" required>
                <p>Registration Number:</p>
                <input type="text" placeholder="Enter Registraion Number" name="rno" required>
                <p>Smart Card Number:</p>
                <input type="text" placeholder="Enter Smart Card Number" name="sno" required>
                <p>Gender:</p><br>
                <p>Male:<input type='radio' name='gender' value='m' required></p>
                <p>Female:<input type='radio' name='gender' value='f' required></p>
                <input type='submit' id="subbtn" value="Next">
            </form>
        </div>
        
    </body>
</html>