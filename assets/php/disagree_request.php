<?php

include('connection.php');

$itemid = $_GET['item_id'];
$borrower_id  =$_GET['borrower_id'];

$qry = "delete from requests where item_id='$itemid' and borrower_id='$borrower_id'";

if(mysqli_query($conn,$qry)){
	header("location:../../modules/profile.php");
}
else{
	echo "query me gadbad";
}

?>