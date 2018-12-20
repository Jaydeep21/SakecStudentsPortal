<?php

    session_start();
    include('connection.php');

   
    $item=$_POST['donate'];
    
    if($_SESSION['role']=='student'){
        $year=$_POST['year'];
        $division=$_POST['division'];
        $rollno=$_POST['rollno'];
    }
    else{
        $year=null;
        $division=null;
        $rollno=null;
    }
    
    $name=$_SESSION['fname']." ".$_SESSION['lname'];
    $smno=$_SESSION['smno'];
    $regno=$_SESSION['regno'];
    $email=$_SESSION['email'];
    $role=$_SESSION['role'];
    $mobno=$_SESSION['mobno'];
    
    $donatequery="insert into drafter(item,year,division,rollno,name,smno,regno,mobno,email,role,date) values('$item','$year','$division','$rollno','$name','$smno','$regno','$mobno','$email','$role',NOW())";
    echo $donatequery;
    if(!mysqli_query($conn,$donatequery)){
        echo "could not insert";
    }
    else{
        echo"successfully inserted";
        header('location:http://localhost/SakecStudentsPortal/index.php');
    }

?>