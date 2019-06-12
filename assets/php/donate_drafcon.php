<?php

    session_start();
    include('connection.php');

   
    $item=$_POST['donate'];
    $quality = $_POST['quality'];
    if($quality=="Excellent"){
        $cost = 800;
    }
    if($quality=="Good"){
        $cost = 600;
    }
    if($quality=="Average"){
        $cost = 400;
    }
    if($quality=="Bad"){
        $cost = 200;
    }
    $image_name=preg_replace('/\s+/', '',$_FILES['image']['name']);
    $image_temp=preg_replace('/\s+/', '',$_FILES['image']['tmp_name']);

    move_uploaded_file($image_temp,"../img/".$image_name);
    $imagel="http://localhost/SakecStudentsPortal/assets/img/$image_name";
    
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
    $donator_id = $_SESSION['userid'];
    $name=$_SESSION['fname']." ".$_SESSION['lname'];
    $smno=$_SESSION['smno'];
    $regno=$_SESSION['regno'];
    $email=$_SESSION['email'];
    $role=$_SESSION['role'];
    $mobno=$_SESSION['mobno'];
    
    $donatequery="insert into drafter(donator_id,item,quality,cost,image,year,division,rollno,name,smno,regno,mobno,email,role,date) values('$donator_id','$item','$quality','$cost','$imagel','$year','$division','$rollno','$name','$smno','$regno','$mobno','$email','$role',NOW())";
    echo $donatequery;
    if(!mysqli_query($conn,$donatequery)){
        echo "could not insert";
    }
    else{
        echo"successfully inserted";
        header('location:http://localhost/SakecStudentsPortal/index.php');
    }

?>