<?php 
    session_start();
    include('connection.php');
    
    $email=$_POST['emailid'];
    $password=$_POST['password'];
    
    $login="select * from signup where email='$email' and password='$password'";

    if(!mysqli_query($conn,$login)){
        echo"query error";
    }
    else{
        if($row=mysqli_fetch_assoc(mysqli_query($conn,$login))){
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            $_SESSION['smno']=$row['smno'];
            $_SESSION['regno']=$row['regno'];
            $_SESSION['mobno']=$row['phone'];
            $_SESSION['emailid']=$row['email'];
            $_SESSION['role']=$row['role'];
            $_SESSION['userid']=$row['id'];
            
            header('location:http://localhost/SakecStudentsPortal/index.php');
            
        }
        else{
            header('location:http://localhost/SakecStudentsPortal/modules/login.php');
        }
    }
?>