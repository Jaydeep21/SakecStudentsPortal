<?php

include('connection.php');
session_start();
$id = $_GET['item_id'];
$donatorid  = $_GET['donator_id'];
$borrowerid = $_SESSION['userid'];

$qry = "insert into relation values('$id','$donatorid','$borrowerid')";

$result = mysqli_query($conn,$qry);

if($result){
	header('../../modules/borrow.php');
}
else{
	echo $qry;
}

?>