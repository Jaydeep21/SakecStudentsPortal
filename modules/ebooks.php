<?php

include('navbar.php');

?>
<html>
<head>
    <title>Ebooks</title>
    <link rel="stylesheet" href="../assets/css/ebooks.css">
    
</head>
<body>
    <?php include('navbar.php');?>
    <div class="ebox">
        <form method="get" action="../assets/php/ebooks.php" onsubmit=""> 
            <div style="display:inline-block;margin-right:17px">
            <p>Branch:</p>
                <select name="branch">
                    <option value="IT">IT</option>
                    <option value="CMPS">CMPS</option>
                    <option value="ELEC">ELEC</option>
                    <option value="ETRX">ETRX</option>
                </select>
            </div>
            <div style="display:inline-block;margin-right:17px;">
            <p>Semester:</p>
                <select name="sem" style="width:100%">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
           <div style="display:inline-block;">
            <input type="submit" value="Search">
            </div>
            
        </form>
    </div>
</body>
</html>