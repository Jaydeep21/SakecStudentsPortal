<?php
    session_start();
    $fname=$_SESSION['fname'];
    $lname=$_SESSION['lname'];
    $email=$_SESSION['emailid'];
    $phone=$_SESSION['phone'];
    $regno=$_SESSION['rno'];
    $smno=$_SESSION['sno'];
    $gender=$_SESSION['gender'];
    $password=$_POST['pass'];

    $dbpass="jaydeep";
    $dbname="sakecstudentsportal";
    $dbuser="root";
    $dbhost="localhost";
    
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        $result="Connection error".mysqli_connect_error();
        echo $result;
    }
    $insert="insert into signup(fname,lname,email,phone,regno,smno,gender,password) values('$fname','$lname','$email','$phone','$regno','$smno','$gender','$password');";
    
    if(!mysqli_query($conn,$insert)){
        $result="Opps something went wrong";
    }
    else{
        $result="Successfully registered";
        header("Location: http://localhost/SakecStudentsPortal/modules/signup.php");
    }

?>