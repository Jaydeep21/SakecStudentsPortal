<?php
include('../assets/php/connection.php');
session_start();
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

?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
body{
	background-image: url('https://images.pexels.com/photos/1010496/pexels-photo-1010496.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500');
}
.container  {
  display: flex;
  position: absolute;
  top: 22%;
  left: 18%;
  height: 100%;
  width: 100%;
  background-color: ;
}

.container .row {
  margin: 0 auto;
}
	
</style>
<body>
<div class="container">
<div class="col-lg-9 col-md-9">

    <!--Panel-->
    <div class="card">
      <h3 class="card-header light-blue lighten-1 white-text text-uppercase font-weight-bold text-center py-5">Contact Information</h3>
      <div class="card-body">
      	<?php if($result1){	
      	    while ($row = mysqli_fetch_assoc($result)) { ?>
         	  <ul class="list-group justify-content-center" style="font-size: 30px">
          
		          <li class="list-group-item d-flex justify-content-between align-items-center">
		            Name :  <?php echo $row['fname'],$row['lname']."<br>";?>
		            
		          </li>
		          <li class="list-group-item d-flex justify-content-between align-items-center">
		            Email id :  <?php echo $row['email'].'@sakec.ac.in<br>'; ?>
		            
		          </li>
		          <li class="list-group-item d-flex justify-content-between align-items-center">
		            Mobile number :  <?php echo $row['phone'];?>
		            
		          </li>
		       </ul>
        <?php } }else{?>
        
          <li class="alert alert-info">
    			<strong>Info!</strong> <?php echo "Could not delete";?>
 		 </li>
 		 <?php } ?>
       
        <p class="text-small text-muted mb-0 pt-3 d-flex "><strong><h5>Keep note of the information for further use.</strong></h5></p>
      </div>
    </div>
    <!--/.Panel-->

  </div>
</div>
</body>
  </html>


