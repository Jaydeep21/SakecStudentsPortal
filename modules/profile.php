<?php
include('navbar.php');
include('../assets/php/connection.php');
if(!isset($_SESSION['userid'])){
    echo "<script>
    alert('Please Login');
    document.location.href='login.php';
    </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile | <?php echo $_SESSION['fname']?></title>
	<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style type="text/css">
		table,th,td{
			border-collapse: collapse;
			border:1px solid black;
			text-align: center;
			padding:10px;
		}
	</style>
	<script type="text/javascript">
		$('#delete').click(function(){

		})
	</script>
</head>
<body>
	Hello, <?php echo $_SESSION['fname']." ".$_SESSION['lname']?>
	<br><br>
	Donations
	<table>
					<tr>
						<th>Item Donated</th>
						<th>Donation Date on</th>
						<th>Delete Donation Request</th>
						<th>Response</th>
					</tr>
	<?php
		$smno=$_SESSION['smno'];
		$qry="select * from drafter where smno='$smno'";
		$result=mysqli_query($conn,$qry);
		if(!$result)
		{
			echo"query me gadbad";
		}
		else{
			if(mysqli_num_rows($result)>0){
				
			while($row=mysqli_fetch_assoc($result)){
				?>
					<tr>
						<td><?php echo $row['item'];?></td>
						<td><?php echo $row['date'];?></td>
						<td><input type="button" onclick="location.href='../assets/php/delete.php?delete=<?php echo $row['id'] ?>';" value="Delete" name="delete" id="delete" /></td>
						<?php
							$item_id = $row['id'];
							$query = "select * from requests where item_id='$item_id'";
							$result1= mysqli_query($conn,$query);
							while ($row1=mysqli_fetch_assoc($result1)) {
								?>
									<td><input type="button" onclick="location.href='display_profile.php?borrower_id=<?php echo $row1['borrower_id'] ?>&item_id=<?php echo $row['id'] ?>';" value="Agree" name="agree" id="agree" />
									<a href="../assets/php/disagree_request.php?item_id=<?php echo $item_id;?>&borrower_id=<?php echo $row1['borrower_id']; ?>">Disagree</a></td>

								<?php } ?>

					</tr>
					
					<?php
				} ?>
				</table> 
				
				
				<?php
				} }
	?>

	
		
		<table>
			 		<tr>
			 		<th>Donated By</th>
			 		<th>Item Name</th>
			 		<th>Date</th>
			 		<th>Delete Borrowing Request</th>
			 		</tr>
		<?php
		$user_id = $_SESSION['userid'];
		$qry1 = "select * from requests where borrower_id='$user_id'"; 
		$result2 = mysqli_query($conn,$qry1);
		while($rows = mysqli_fetch_assoc($result2)) {
			$item_id = $rows['item_id'];
			$querys = "select * from drafter where id='$item_id'";
			$results = mysqli_query($conn,$querys);
			while ($rows2 = mysqli_fetch_assoc($results)) {
			 	?>
			 	<br><br>
			 	Borrowed Items
				<br><br>
			 	<tr>
			 		<td><?php echo $rows2['name'];?></td>
			 		<td><?php echo $rows2['item'];?></td>
			 		<td><?php echo $rows2['date'];?></td>
			 		<td><a href="../assets/php/disagree_request.php?item_id=<?php echo $item_id;?>&borrower_id=<?php echo $user_id; ?>">Delete Borrow Request</a></td>
			 	</tr>
			 	
			 	<?php
			 } 
		}
		?>
</table>
</body>
</html>