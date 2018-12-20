<?php session_start();?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
      body{
          margin:0;
          padding:0;
          font-family: sans-serif;
      }
      
      nav{
        width:100%;
          background: black;
      }
      ul{
          width:100%;
          margin:0 auto;
          padding: 0;
      }
      ul li{
          list-style:none;
          display: inline-block;
          padding:20px;
      }
      ul li:hover{
          background: red;
      }
      ul li a{
          color:white;
            text-decoration:none;
      }
      .toggle{
          width:100%;
          padding:10px 20px;
          background: black;
          text-align: :right;
          box-sizing: border-box;
          color:white;
          font-size:30px;
          display:none;
      }
      @media(max-width:768px){
          .toggle{
              display: block;
              text-align: center;
          }
          ul{
              width: 100%;
              display: none;
          }
          ul li{
              display: block;
              text-align: center;
          }
          .active{
              display: block;
          }
      }
    </style>
</head>
<body>

    <nav>
        <div class="toggle">
            <i class="fa fa-bars menu" aria-hidden="true"></i>
        </div>
        <ul>
            <li><a href="http://localhost/SakecStudentsPortal/index.php">Home</a></li>
            <li><a href="#">About</a>
            <li><a href="#">FAQ's</a>
            <li><a href="modules/ebooks.php">Ebooks</a>
            <?php if(!isset($_SESSION['emailid'])){?>
                <li style="float:right;">
                    <a href="http://localhost/SakecStudentsPortal/modules/login.php">Login</a>
                <li style="float:right;">
                    <a href="http://localhost/SakecStudentsPortal/modules/signup.php">Signup</a>
            <?php }else{ ?>
            <li style="float:right;">
                <a href="http://localhost/SakecStudentsPortal/modules/logout.php">Logout</a>
            <li style="float:right;">
                <a href="http://localhost/SakecStudentsPortal/modules/profile.php">Hello <?php echo $_SESSION['fname'];?></a>
                <?php } ?>
        </ul>
        
    </nav>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.menu').click(function(){
            $('ul').toggleClass('active');
        })
    })
    </script>
    
</body>
</html>
