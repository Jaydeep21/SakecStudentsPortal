<html>
<head>
    <link rel="stylesheet" href="../css/ebooks.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        button{
            border:none;
            border-radius: 20px;
            outline:none;
            height: 40px;
            background: red;
            color: white;
            width:100%;
            font-size: 18px;
        }
        button:hover{
            cursor: pointer;
            background: yellow;
            color:black;
        }
        td,p{
            margin: 0;
            padding: 0;
            font-weight: bold;
            color:white;
        }
        table,td{
            width:100%;
            border:1px solid white;
            border-collapse: collapse;
            height:50px;
            padding: 15px;
            text-align: left;
        }
        table{
            margin-top: 0%;
            margin-left: 0%;
        }
        i{
            color:white;
        }
        i:hover{
            color:yellow;
            cursor: pointer
        }
        td:hover {
            background-color: grey;}

    </style>
    <?php
    $sem=$_GET['sem'];
    $branch=$_GET['branch'];

    $dbpass="jaydeep";
    $dbhost="localhost";
    $dbname="sakecstudentsportal";
    $dbuser="root";
        
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        die('Connection Error'.mysqli_connect_error());
    }
    ?>
</head>
<body>
    <div class="ebox" style="width:550px;height:500px">
<h1>Click here to Download</h1>
        <br>
        <br>
<?php
    $search="select * from ebooks where branch='$branch' and sem='$sem'";

    $result=mysqli_query($conn,$search);
    if(!mysqli_query($conn,$search)){
        echo"Query error";
    }
    else{
        echo"<table>";
        while($row=mysqli_fetch_assoc($result)){
            
            echo"<tr><td><a href=".$row['blink'].">".$row['bname']."</a></td><td><a href=".$row['blink']." download><i class='fa fa-download' style='font-size:35px'></i></a></td></tr>";
            
        }
        echo"</table>";
    }
?>
</div>    
</body>
</html>