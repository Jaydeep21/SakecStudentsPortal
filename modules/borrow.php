<?php 

include('navbar.php');
include('../assets/php/connection.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
            display: block;
            overflow-x: hidden;
        }
		img
        {
            position: relative;
            left:10px;
            width:250px;
            height:200px;
            float:left;
            border:1px solid black;
        }
        .product{
            position: relative;
            left:20px;
        }
       
        @media only screen and (max-width: 700px){
            .product h1{
                font-size: 40px;
                left:0px;
                padding-left:25px; 
            }
            .product p{
                font-size: 20px;
            }
            img{
                width:300px;
                height:200px;
            }
            
        }
	</style> 
    
</head>
<body><hr>
<?php

$qry = "select * from drafter";



if(isset($_GET['item'])){
	$item = $_GET['item'];
	$qry = "select * from drafter where item='$item'";
}
$result = mysqli_query($conn,$qry);
while ($row  = mysqli_fetch_assoc($result)) {
	# code...

?>
<img src="<?php echo $row['image'];?>">
	<div class="product">
		<h1><?php echo $row['item'];?></h1></a>
            <p><bold>Quality:</bold>&ensp;<?php 
                echo ($row['quality']);?><br>
                Uploaded by: <?php echo $row['name'];?><br>
                Cost: <?php echo $row['cost'];?><br>
                Uploaded On: <?php echo $row['date']?>
            </p>
            <?php 
            $id = $row['id'];
            $query = "select * from requests where item_id=$id";
            $result1 = mysqli_query($conn,$query);
            if(mysqli_num_rows($result1)>0){

            ?>
            <button type="button" class="btn btn-danger" disabled>Already Requested</button>
            
            <?php }else{?>
            <button type="button" class="btn btn-success" ><a href="../assets/php/interested.php?item_id=<?php echo $row['id']; ?>&donator_id=<?php echo $row['donator_id']; ?>" name="interested" id="interested" ></a>Interested</button><?php } ?>
        <hr>
	</div>

	<?php } ?>
</body>
</html>
