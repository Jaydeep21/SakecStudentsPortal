<?php

    $dbpass="jaydeep";
    $dbname="sakecstudentsportal";
    $dbuser="root";
    $dbhost="localhost";
    
    

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        $result="Connection error".mysqli_connect_error();
        echo $result;
    }
?>