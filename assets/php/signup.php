<?php

    session_start();

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['emailid'];
    $phone=$_POST['phone'];
    $regno=$_POST['rno'];
    $smno=$_POST['sno'];
    $gender=$_POST['gender'];
    $role=$_POST['role'];

    $_SESSION['tfname'] = $fname;
    $_SESSION['tlname'] = $lname;
    $_SESSION['temailid'] = $email;
    $_SESSION['tphone'] = $phone;
    $_SESSION['trno'] = $regno;
    $_SESSION['tsno'] = $smno;
    $_SESSION['tgender'] = $gender;
    $_SESSION['trole']=$role;
    
    include('connection.php');
    
    $a=rand(1000,1000000);
    $_SESSION['random']=$a;
   $result="";
    $email="select * from signup where email='$email'";
    
    if(!mysqli_query($conn,$email)){
        $result="Query Error";
        echo $result;
    }
    else{
        if(mysqli_num_rows(mysqli_query($conn,$email))>0){
            $result="Email is already taken";
        }
        else{
            require'../phpmailer/PHPMailerAutoload.php';
            $mail=new PHPMailer(true);
            
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';
            $mail->Username='jaydeepdharamsey21@gmail.com';
            $mail->Password='';
            
            $mail->setFrom('jaydeepdharamsey21@gmail.com');
            $mail->addAddress($_POST['emailid']."@sakec.ac.in");
            $mail->addReplyTo('jaydeepdharamsey21@gmail.com');
            
            $mail->isHTML(true);
            $mail->Subject='Email verification';
            $mail->Body='<h1 allign="center">Hello '.$_POST['fname'].' thank you for verifying.Your verifying code is '.$a.'</h1>';
            
            if(!$mail->send()){
                $result="Something went wrong.Please Try again";
                echo $result;
            }
            else{
                
                header("Location: http://localhost/SakecStudentsPortal/modules/signup1.php");
            }
            
            
        }
    }

?>