<?php

include('connection.php');
session_start();
$id = $_GET['item_id'];
$donatorid  = $_GET['donator_id'];
$borrowerid = $_SESSION['userid'];

$qry = "insert into requests( `item_id`, `donater_id`, `borrower_id`) values('$id','$donatorid','$borrowerid')";

$result = mysqli_query($conn,$qry);

if($result){
	header('location:../../modules/profile.php');
}
else{
	echo $qry;
}

?>