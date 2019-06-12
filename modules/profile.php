<?php
include('navbar.php');
include('../assets/php/connection.php');
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
	Donations
	<?php
		$smno=$_SESSION['smno'];
		$qry="select * from calculator where smno='$smno'";
		$result=mysqli_query($conn,$qry);
		if(!$result)
		{
			echo"query me gadbad";
		}
		else{
			if(mysqli_num_rows($result)>0){
				?>
				<table>
					<tr>
						<th colspan="4">Calculator Donated</th>
					</tr>
					
				<?php
			while($row=mysqli_fetch_assoc($result)){
				?>
					<tr>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['model'];?></td>
						<td><?php echo $row['date'];?></td>
						<td><button class="btn-danger" value="delete" name="delete">Delete</button></td>
					</tr>
					
					<?php
				} ?>
				</table><br><br> 
				<?php
			}
		}
		$smno=$_SESSION['smno'];
		$qry="select * from drafter where smno='$smno'";
		$result=mysqli_query($conn,$qry);
		if(!$result)
		{
			echo"query me gadbad";
		}
		else{
			if(mysqli_num_rows($result)>0){
				?>
				<table>
					<tr>
						<th colspan="4">Drafter or Container Donated</th>
					</tr>
					
				<?php
			while($row=mysqli_fetch_assoc($result)){
				?>
					<tr>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['item'];?></td>
						<td><?php echo $row['date'];?></td>
						<td><input type="button" onclick="location.href='../assets/php/delete.php?delete=<?php echo $row['id'] ?>';" value="Delete" name="delete" id="delete" /></td>
						
					</tr>
					
					<?php
				} ?>
				</table> 
				<?php
			}
		}
	?>
	

</body>
</html>