<?php include('modules/navbar.php');?>
<html>
<head>
    <title>Sakec Student's Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student's Portal</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <style>
        #header-featured img{
            display:block;
            width:100vw;
            height:100vh;
            object-fit:cover;
            max-width:99vw;
            overflow-x: hidden;
            opacity: .8;
            
        }
         body {
  overflow-x: hidden;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
display:block;

}

.container {
  position: relative;
  width: 24px;
  height: 24px;
}

.chevron {
  position: absolute;
  width: 28px;
  height: 8px;
  opacity: 0;
  transform: scale3d(0.5, 0.5, 0.5);
  animation: move 3s ease-out infinite;
}

.chevron:first-child {
  animation: move 3s ease-out 1s infinite;
}

.chevron:nth-child(2) {
  animation: move 3s ease-out 2s infinite;
}

.chevron:before,
.chevron:after {
  content: ' ';
  position: absolute;
  top: 0;
  height: 100%;
  width: 51%;
  background: #fff;
}

.chevron:before {
  left: 0;
  transform: skew(0deg, 30deg);
}

.chevron:after {
  right: 0;
  width: 50%;
  transform: skew(0deg, -30deg);
}

@keyframes move {
  25% {
    opacity: 1;

  }
  33% {
    opacity: 1;
    transform: translateY(30px);
  }
  67% {
    opacity: 1;
    transform: translateY(40px);
  }
  100% {
    opacity: 0;
    transform: translateY(55px) scale3d(0.5, 0.5, 0.5);
  }
}
.text {
  display: block;
  margin-top: 75px;
  margin-left: -30px;
  font-family: "Helvetica Neue", "Helvetica", Arial, sans-serif;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
  white-space: nowrap;
  opacity: .25;
  animation: pulse 2s linear alternate infinite;
}

@keyframes pulse {
  to {
    opacity: 1;
  }
        }
.pic{
	/*width:400px;
	height:400px;*/
    background:url("assets/img/Picture.png") no-repeat;
    background-repeat: no-repeat;
    background-size:500px 500px;
}
.texti{
	width:450px;
	height:217px;
	background:#FFF;
	opacity:0;
}
.pic:hover .texti
{
	opacity:0.7;
	text-align:justify;
	color:#000000;
	font-size:15px;
	font-weight:700;
	font-family:"Times New Roman", Times, serif;
	padding:40px;
    height:325px;
}
        /*for button*/
.row{
    box-sizing: border-box;
    position: absolute;
    top:1200px;
    left: 0;
}
/* Create two equal columns that floats next to each other */
.column {
    float: right;
    position: absolute;
    top:1200px;
    left:50vw;  
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
    }
.post{
                width:600px;
                height:400px;
                position:relative;
                text-align: center;
                                
            }
            .post:hover .post-s{
                 width:55vw;
            }
            .post img{
                display:block;
                width:60px;
                height:400px;
                cursor:pointer;
            }
            .post-s{
                width:0px;
                height:100vh;
                background: aquamarine;
                position:absolute;
                top:0;
                display:flex;
                justify-content:center;
                align-items:center;
                overflow:hidden;
                transition:0.7s ease;
            }
            .post-s h2{
                color: white;
                font-size:50px;
                border:6px solid white;
                padding:10px 30px;
            }
            .post h5{
                position:absolute;
                color: black;
                font-size:30px;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
			}
        .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #000000; /* Fallback color */
    background-color: #FFFFFF; /* Black w/ opacity */
    box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
    /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
    /*box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.2), 0 10px 20px 0 rgba(0, 0, 0, 0.19);*/
    box-shadow: 5px 10px 18px red;
}

/* Modal Content */
.modal-content {
    background-color:#E24E2A;
    margin: auto;
    padding: 20px;
    height:50%;
    width: 55%;
    border:5px solid black;
}
p{font-size:30px;
   color: black;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
        
    </style>
</head>
<body>
    
   <div id="header-featured" style="background: black;">
       <img src="assets/img/banner.jpg">
    
	 <div class="headingbox" style="position: absolute;top: 250px;left: 250px;">
         <h1 style="font-size:90px;color:white;text-shadow: 2px 2px darkgrey">Sakec's Student Portal</h1>
    </div>
    <div class="container menu-link" style="position: absolute;top:80%;left:50%">
          <a href="#pic" id="scroll">
          <div class="chevron"></div>
          <div class="chevron"></div>
          <div class="chevron"></div>
        <span class="text">Scroll down</span></a>
    </div>
    </div>
    
<div class="pic" id="pic" style="position:absolute;left:30%;height:500px">
  <div class="texti">
        <div class="head_title">
            <h2><font size="6px"><center>Vision</center></font></h2>
        </div>
        <p><font size="5px" style="color:black" >To create an simple,sustainable  &amp; 
                            transformable system for borrowing &amp;
                             donating reusable stationery.
            </font>
        </p>
	</div>
</div>
<div>
<div  class="row">
			<div class="post">
				<img src="assets/img/p2.jpg" alt="image not found" style="width:55vw;height:100vh;">
				<h5>Borrowing is much better than begging,just as lending with interest is much better than stealing.
				</h5>
				<div class="post-s">
					<a href="modules/borrow.php"  style="text-decoration:none"><h2 button id="myBtn" > BORROW</h2></a>
					
				</div>
			</div>
    </div>
		<div class="column" >
			<div class="post">
                <img src="assets/img/p2.jpg" alt="image not found" style="width:50vw;height:100vh;">
                    <h5>Giving is not just about making a donation. It is about making a difference.
                    </h5>
                    <div class="post-s">
                        <a href="modules/donate.php" style="text-decoration:none"><h2 button id="myBtn1"  > DONATE</h2></a>
                    </div>
            </div>
		</div>
    </div>
    <script>
        // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
    </script>
</body>
</html>