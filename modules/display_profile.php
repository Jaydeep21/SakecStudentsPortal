<?php

include('../assets/php/connection.php');
if(!isset($_SESSION['userid'])){
    echo "<script>
    alert('Please Login');
    document.location.href='login.php';
    </script>";
}
$borrower_id = $_GET['borrower_id'];
$item_id = $_GET['item_id'];

$qry = "select * from signup where id='$borrower_id'";
$qry1 = "delete from drafter where id='$item_id'";
$result = mysqli_query($conn,$qry);
$result1 = mysqli_query($conn,$qry1);
if($result1){
	while ($row = mysqli_fetch_assoc($result)) {
		echo $row['fname'],$row['lname']."<br>";
		echo $row['email'].'@sakec.ac.in<br>';
		echo $row['phone'];
	}
}
else{
	echo "Could not delete";
}
?>
