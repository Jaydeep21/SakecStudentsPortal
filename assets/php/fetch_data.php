<?php 

include('connection_pdo.php');

if(isset($_POST['action'])){

	$query = "select * from drafter where id>0 ";

	if(isset($_POST['minimum_price'], $_POST['maximum_price']) && !empty($_POST['minimum_price']) && !empty($_POST['maximum_price'])){
		$query .= "and cost between '".$_POST["minimum_price"]."' AND ' ".$_POST["maximum_price"]."'";
	}
	if(isset($_POST['quality'])){
		$quality_filter = implode("','", $_POST['quality']);
		$query .= "and quality IN('".$quality_filter."')";
	}
	if(isset($_POST['item'])){
		$item_filter = implode("','", $_POST['item']);
		$query .= "and item IN('".$item_filter."')";
	}	
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output  = '';
if($total_row>0){
	foreach ($result as $row) {
		$output .='
		<div class="container">
		<div class="row">
		
		<div class="image col-md-4"> 
		<img src='.$row['image'].'>
		</div>
		<div class="product col-md-8">
			<h1>'.$row['item'].'</h1>
			<p>Quality:'.$row['quality'].'</p>
			<p>Uploaded by:'.$row['name'].'</p>
			<p>Cost:'.$row['cost'].'</p>
			<p>Uploaded on: '.$row['date'].'</p>
	';
	$qry = "select * from requests where item_id='".$row['id']."'";
	$statement1 = $connect->prepare($qry);
	$statement1->execute();
	$result1 = $statement1->fetchAll();
	$total_row1 = $statement1->rowCount();
	if($total_row1>0){
		$output .=
		' <button type="button" class="btn btn-danger" disabled>Already Requested</button><hr></div></div></div>'; 
	}
	else{
		$output .='<a href="../assets/php/interested.php?item_id='.$row['id'].'&donator_id='.$row['donator_id'].'" name="interested" id="interested"><button type="button" class="btn btn-success"> Interested</button></a><hr></div></div></div>';
	}
	}
}

else{
	$output = 'NO data found';
}

#echo $query;
echo $output;
}
?>

