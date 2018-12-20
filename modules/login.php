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
                <form method="post" action="../assets/php/login.php">
                    <p>Email id:</p>
                    <input type="text" placeholder="Enter your email" name="emailid" style="width:62%;" required>@sakec.ac.in
                    <p>Password:</p>
                    <input type="password" placeholder="Enter Password" name="password" id="pass" required><br><br>
                    <input type="submit"value="Login" ><br>
                    <a href="#">Forgot Password</a>
                </form>
            </div>
        </body>
    </html>