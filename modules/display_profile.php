<?php

include('../assets/php/connection.php');

$borrower_id = $_GET['borrower_id'];

$qry = "select * from signup where id='$borrower_id'";

$result = mysqli_query($conn,$qry);

while ($row = mysqli_fetch_assoc($result)) {
	echo $row['fname'],$row['lname']."<br>";
	echo $row['email'].'@sakec.ac.in<br>';
	echo $row['phone'];
}
?>