<?php

include('connection.php');
session_start();

$id = $_GET['delete'];

$qry="delete from drafter where id='$id'";

$result = mysqli_query($conn,$qry);

if($result){
	echo "<script>
                alert('Deleted Successfully');
                document.location.href = '../../modules/profile.php';
                </script>";
}
else{
	echo "$qry";
}
?>