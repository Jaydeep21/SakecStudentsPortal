<?php 
include('navbar.php');
$email=$_SESSION['em'];
?>
<html>
	<head>
		<title>Sign up</title>
        <link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script ></script>
       
       
    </head>
	<body >
        
        <div class="loginbox" style="width: 380px;height: 380px;top:50%;">
            <h1>Sign up</h1>
            <form action="../assets/php/forgot0.php" method="post">
                <p>Sent on Your Email id:&ensp;<?php echo $email;?>@sakec.ac.in</p>
                <br>
                <br>
                <p>Enter OTP:</p>
                <input type="text" placeholder="Enter OTP" name="otp" required>
                <input type='submit' id="subbtn" value="Next">
            </form>
        </div>
        
    </body>
</html>