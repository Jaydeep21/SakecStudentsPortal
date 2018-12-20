<?php
    session_start();
    $fname=$_SESSION['tfname'];
    $lname=$_SESSION['tlname'];
    $email=$_SESSION['temailid'];
    $phone=$_SESSION['tphone'];
    $regno=$_SESSION['trno'];
    $smno=$_SESSION['tsno'];
    $gender=$_SESSION['tgender'];
    $password=$_POST['pass'];
    $role=$_SESSION['trole'];
    

    inlcude('connection.php');
    $insert="insert into signup(fname,lname,email,phone,regno,smno,gender,password,role) values('$fname','$lname','$email','$phone','$regno','$smno','$gender','$password','$role');";
    
    if(!mysqli_query($conn,$insert)){
        $result="Opps something went wrong";
    }
    else{
        $result="Successfully registered";
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['emailid'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['regno'] = $regno;
        $_SESSION['smno'] = $smno;
        $_SESSION['gender'] = $gender;
        $_SESSION['role']=$role;
       

        header("Location: http://localhost/SakecStudentsPortal/modules/signup.php");
    }

?>