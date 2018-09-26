<!DOCTYPE html>
    <html>
        <head>
            <title>Login</title>
            
           
            <link rel="stylesheet" href="../assets/css/login.css" type="text/css">
        </head>
        <body>
            <?php include('navbar.php');?>
            <div class="loginbox">
                <h1 >Login Here</h1>
                <form onsubmit="" action="">
                    <p>Email id:</p>
                    <input type="text" placeholder="Enter your email" class="emailid" required>
                    <p>Password:</p>
                    <input type="password" placeholder="Enter Password" class="password" id="pass" required><br><br>
                    <input type="submit"value="Login" ><br>
                    <a href="#">Forgot Password</a>
                </form>
            </div>
        </body>
    </html>