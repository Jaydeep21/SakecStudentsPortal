<!doctype html>
<html>
	<head>
		<title>Donate | Calculator</title>
        <link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php
            include("navbar.php");
        ?>
    </head>
	<body >
        <div class="loginbox" style="width: 320px;height: 650px;top:70%">
            
            <form action="../assets/php/donate_calculator.php" method="POST">
  
                <h1 style="font-size:50px">Donate</h1>

                <label for="model"><b>Model:</b></label>
                <select id="model" name="model" style="color:white;background:black;width:120px;height:30px;">
                    <option value="fx-991ES" style="background:black;color:white">fx-991ES</option>
                    <option value="fx-115ESplus" style="background:black;color:white">fx-115ES PLUS</option>  
                    <option value="fx-82MS" style="background:black;color:white">fx-82MS</option>
                </select>
                <br>
                <br>
                
                
                <h1 style="font-size:25px">Your Information:</h1>
                <p style="color:red">*Note: If you're staff member you don't need to fill this*</p><br><br>
                <label for="Year:"><b>Year</b></label>
                <select id="Year" name="year" style="color:white;background:black;width:90px;height:30px;">
                      <option value="F.E." style="background:black;color:white">F.E.</option>
                      <option value="S.E." style="background:black;color:white">S.E.</option>
                     <option value="T.E." style="background:black;color:white">T.E.</option>
                     <option value="B.E." style="background:black;color:white">B.E.</option>
                    </select><br><br>

                <label for="Division"><b>Divison</b></label>
                <input type="text" placeholder="Enter Division" name="division" ><br>

                <label for="Roll Number"><b>Roll Number</b></label>
                <input type="text" placeholder="Enter Roll No." name="rollno" ><br>
                <input type="submit" name="submit" class="donatebutton" value="Submit">
            </form>
        </div>
        
    </body>
</html>