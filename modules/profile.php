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
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/ui/jquery-ui-git.js"></script>
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/jquery-ui-git.css">




	<style type="text/css">
		table,th,td{
			border-collapse: collapse;
			border:1px solid black;
			text-align: center;
			padding:10px;
		}
    

    body {
  background: #F1F3FA;
  background-image: url('https://images.pexels.com/photos/1308624/pexels-photo-1308624.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'); 

   /*background-image: url('../assets/img/bad1.jpeg');*/
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
  height: 200px;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  left: 25%; 
  position: relative;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 16px;
  font-weight: 400;
  
}

.profile-usermenu ul li a i {
  margin-right: 14px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
 

}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: white;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
  
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 560px;
  
}

.table-sortable tbody tr {
    cursor: move;
}




	</style>
	<script type="text/javascript">
		$('#delete').click(function(){
		})
	</script>
</head>
<body>
  <div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Hello, <?php echo $_SESSION['fname']." ".$_SESSION['lname']?>
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS 
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div-->
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<!--div class="profile-usermenu">
					<ul class="nav">
					
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user" ></i>
							Donations</a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Borrowers </a>
						</li>
						
					</ul>
				</div-->
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <center>
                   <strong  style="font-size:30px">Donations <a href=""></a></strong>
               </center>
	
	   
	   	<table class="table table-bordered">
				<thead>
					<tr >
						<th class="text-center">
							Item Donated
						</th>
						<th class="text-center">
							Donation Date on
						</th>
						<th class="text-center">
							Delete Donation Request
						</th>
    					<th class="text-center">
							Response
						</th>
					
					</tr>
				</thead>
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
								<td><input type="button" class="btn btn-outline-danger" onclick="location.href='../assets/php/delete.php?delete=<?php echo $row['id'] ?>';" value="Delete" name="delete" id="delete" /></td>
								<?php
									$item_id = $row['id'];
									$query = "select * from requests where item_id='$item_id'";
									$result1= mysqli_query($conn,$query);
									while ($row1=mysqli_fetch_assoc($result1)) {
										?>
											<td><input type="button" class="btn btn-outline-success" onclick="location.href='display_profile.php?borrower_id=<?php echo $row1['borrower_id'] ?>&item_id=<?php echo $row['id'] ?>';" value="Agree" name="agree" id="agree" />
											<input type="button" class="btn btn-outline-danger" onclick="location.href='../assets/php/disagree_request.php?item_id=<?php echo $item_id;?>&borrower_id=<?php echo $row1['borrower_id'] ?>';" value="Disagree" /></td>

										<?php } ?>

							</tr>
							
							<?php
						} ?>
	  
				
				
				<?php
				} 
			} ?>
			</table> 
         <table class="table table-bordered " id="">
				<center>
                   <strong style="font-size:30px">Borrowing<a href=""></a></strong>
               </center>

			
             
				<thead>
					<tr >
						<th class="text-center">
							Donated By
						</th>
						<th class="text-center">
							Item Name
						</th>
						<th class="text-center">
							Date
						</th>
    					<th class="text-center">
							Delete Borrowing Request
						</th>
					
					</tr>
				</thead>

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
									 	
									 	<tr>
									 		<td><?php echo $rows2['name'];?></td>
									 		<td><?php echo $rows2['item'];?></td>
									 		<td><?php echo $rows2['date'];?></td>
									 		<td><input type="button" class="btn btn-outline-danger" onclick="location.href='../assets/php/disagree_request.php?item_id=<?php echo $item_id;?>&borrower_id=<?php echo $user_id ?>';" value="Delete Borrow Request"/></td>
									 	</tr>
									 	
									 	<?php
									 } 
								}
								?>
           </table>
            </div>
		</div>
	</div>
</div>

</body>
</html>

