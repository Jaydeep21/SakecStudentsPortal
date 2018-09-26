<!doctype html>
<html>
	<head>
		<title>Donate</title>
        <link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src=""></script>
        <?php
            include("navbar.php");
        ?>
    </head>
	<body >
        <div class="loginbox" style="width: 320px;height: 825px;top:90%">
            
            <form action="" method="POST">
  
    <h1 style="font-size:50px">Donate</h1>

	<label for="donate"><b>Donate:</b></label>
	 <select id="donate" name="Donate" style="color:white;background:black;width:90px;height:30px;">
          <option value="drafter" style="background:black;color:white">Drafter</option>
          <option value="book" style="background:black;color:white">Book</option>
         <option value="book" style="background:black;color:white">Container</option>
        </select>
    <br>
    <br>
    <p>Brand Name:</p>
    <input type="text" placeholder="Enter Brand Name">
    <br>
    <br>
    <br>
	<h1 style="font-size:25px">Your Information:</h1>
	<p></p>
    <label for="Class:"><b>Class</b></label>
    <input type="text" placeholder="Enter Class" name="class" required><br>
    
    <label for="Division"><b>Divison</b></label>
    <input type="text" placeholder="Enter Division" name="division" required><br>
    
    <label for="Roll Number"><b>Roll Number</b></label>
    <input type="text" placeholder="Enter Roll No." name="roll number" required><br>
    
    <label for="Phone Number"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone number" required><br>
    
    
    <input type="submit" class="donatebutton" value="Donate">
  
  
 
  
</form>
        </div>
        
    </body>
</html>