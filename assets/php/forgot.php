<?php

session_start();

$em=$_POST['email'];
$_SESSION['em']=$em;

$dbpass="jaydeep";
$dbname="sakecstudentsportal";
$dbuser="root";
$dbhost="localhost";

$a=rand(1000,1000000);
$_SESSION['random']=$a;
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        $result="Connection error".mysqli_connect_error();
        echo $result;
    }
    $email="select * from signup where email='$em'";
    echo "$em.@sakec.ac.in";
    if(!mysqli_query($conn,$email)){
        $result="Query Error";
        echo $result;
    }

    else{
        if(mysqli_num_rows(mysqli_query($conn,$email))==1){

            require'../phpmailer/PHPMailerAutoload.php';
            $mail=new PHPMailer(true);
            
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';
            $mail->Username='jaydeepdharamsey21@gmail.com';
            $mail->Password='Jinali@29';
            
            $mail->setFrom('jaydeepdharamsey21@gmail.com');
            $mail->addAddress($em."@sakec.ac.in");
            
            $mail->addReplyTo('jaydeepdharamsey21@gmail.com');
            
            $mail->isHTML(true);
            $mail->Subject='Email verification';
            $mail->Body='<h1 allign="center">Your one time password is '.$a.'</h1>';
            
            if(!$mail->send()){
                $result="Something went wrong.Please Try again";
                echo $result;
            }
            else{
                header("Location: http://localhost/SakecStudentsPortal/modules/forgot0.php");
            }
            
            
        }
    }

?>