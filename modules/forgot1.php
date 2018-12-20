<?php session_start();
include('navbar.php');
?>
<html>
	<head>
		<title>Sign up</title>
        <link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            function checkPass(form){
                if(form.pass.value.length<8){
                    alert("Password is too weak.It shoukd be atleast 8 characters long.");
                    form.pass.focus();
                    return false; 
                }
                if(form.pass.value!=form.cpass.value){
                    alert("Passowrds do not match");
                    form.pass.focus();
                    return false;
                }
                return true;
            }
        </script>
        
       
    </head>
	<body >
        
        <div class="loginbox" style="width: 320px;height: 400px;top:50%">
            <h1>Set Password</h1>
            <form action="../assets/php/forgot1.php" method="post" onsubmit="return checkPass(this);">
                <p>Password:</p>
                <input type='password' placeholder='Enter Password' id="pass" name="pass" required>
                <p>Confirm Password:</p>
                <input type='password' placeholder='Confirm Password' id="cpass" name="cpass" required>
                <input type='submit' id="subbtn" value="Sign Up">
            </form>
        </div>
        
    </body>
</html>