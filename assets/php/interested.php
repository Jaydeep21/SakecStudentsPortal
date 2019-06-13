<?php

include('connection.php');
session_start();
$id = $_POST['item_id'];
$donatorid  = $_POST['donator_id'];
$borrowerid = $_SESSION['userid'];

$qry = "insert into requests values('$id','$donatorid','$borrowerid')";

$result = mysqli_query($conn,$qry);

if($result){
	header('../../modules/profile.php');
}
else{
	echo $qry;
}

?>