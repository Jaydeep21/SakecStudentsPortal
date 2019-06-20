<?php
include('modules/navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <style type="text/css">
            body{
                height: 100%,
                margin: 0;
                overflow-x: hidden;
            }
            .landing{
                background-image: url("https://images.pexels.com/photos/590493/pexels-photo-590493.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940");
                height: 100%;
                background-color: black;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                 ;

            }
            /* DEMO-SPECIFIC STYLES */
             h1 {
              color: #333;
              font-family: ;
              overflow: hidden; /* Ensures the content is not revealed until the animation */
              border-right: .10em solid black; /* The typwriter cursor */
              white-space: nowrap; /* Keeps the content on a single line */
              margin: 0 auto; /* Gives that scrolling effect as the typing happens */
              letter-spacing: .10em; /* Adjust as needed */
              animation: 
                typing 3.5s steps(30, end),
                blink-caret .5s step-end infinite;
                font-style: bold;

            }

            /* The typing effect */
            @keyframes typing {
              from { width: 0 }
              to { width: 100% }
            }

            /* The typewriter cursor effect */
            @keyframes blink-caret {
              from, to { border-color: transparent }
              50% { border-color: black }
            }
            .column {
                position: absolute;
                left:0vw;  
            }
            .column1{
                float :left;
                position: absolute;
                left: 50vw;
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
                background: transparent;
                position:absolute;
                top:0;
                display:flex;
                justify-content:center;
                align-items:center;
                overflow:hidden;
                transition:0.7s ease;
                float: left;
            }
            .post-s h2{
                color: white;
                font-size:50px;
                border:6px solid white;
                padding:10px 30px;
            }
                
            section {
                padding: 60px 0;
                position: relative;
                top: 695px
            }

            section .section-title {
                text-align: center;
                color: #007b5e;
                margin-bottom: 50px;
                text-transform: uppercase;

            }
            #footer {
                
                 background-color: black;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            #footer h5{
                padding-left: 10px;
                border-left: 3px solid #eeeeee;
                padding-bottom: 6px;
                margin-bottom: 20px;
                color:#ffffff;
            }
            #footer a {
                color: #ffffff;
                text-decoration: none !important;
                background-color: transparent;
                -webkit-text-decoration-skip: objects;
            }
            #footer ul.social li{
                padding: 3px 0;
            }
            #footer ul.social li a i {
                margin-right: 5px;
                font-size:25px;
                -webkit-transition: .5s all ease;
                -moz-transition: .5s all ease;
                transition: .5s all ease;
            }
            #footer ul.social li:hover a i {
                font-size:30px;
                margin-top:-10px;
            }
            #footer ul.social li a,
            #footer ul.quick-links li a{
                color:#ffffff;
            }
            #footer ul.social li a:hover{
                color:#eeeeee;
            }
            #footer ul.quick-links li{
                padding: 3px 0;
                -webkit-transition: .5s all ease;
                -moz-transition: .5s all ease;
                transition: .5s all ease;
            }
            #footer ul.quick-links li:hover{
                padding: 3px 0;
                margin-left:5px;
                font-weight:700;
            }
            #footer ul.quick-links li a i{
                margin-right: 5px;
            }
            #footer ul.quick-links li:hover a i {
                font-weight: 700;
            }

            @media (max-width:767px){
                #footer h5 {
                padding-left: 0;
                border-left: transparent;
                padding-bottom: 0px;
                margin-bottom: 10px;
            }
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

        </style>
</head>
<body>
    <div class="landing" >
        <div class="container p-5">
            <div class="row p-5">
                <div class="col-12 p-5">
                    <h1 class="display-3 d-flex  text-center p-5" >Sakec Student's Portal</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container menu-link" style="position: absolute;top:80%;left:50%">
          <a href="#pic" id="scroll">
          <div class="chevron"></div>
          <div class="chevron"></div>
          <div class="chevron"></div>
        <span class="text">Scroll down</span></a>
    </div>
    <div class="container" id="pic">
        <div class="row column">
            <div class="column">
                <div class="post col-6">
                    <img src="https://images.pexels.com/photos/50987/money-card-business-credit-card-50987.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940" alt="image not found" style="width:50vw;height:100vh;">
                    
                    <div class="post-s">
                        <a href="modules/borrow.php"  style="text-decoration:none"><h2 button id="myBtn" > BORROW</h2></a>
                        
                    </div>
                </div>
            </div>
            <div class="column1">
                <div class="post col-6  ">
                    <img src="https://images.pexels.com/photos/271168/pexels-photo-271168.jpeg?cs=srgb&dl=bracelets-cash-crumpled-271168.jpg&fm=jpg" alt="image not found" style="width:50vw;height:100vh;">
                        
                        <div class="post-s">
                            <a href="modules/donate.php" style="text-decoration:none"><h2 button id="myBtn1"  > DONATE</h2></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <section id="footer">
        <div class="container">
            <h5>Quick links</h5>
            <div class="row text-center text-xs-center text-sm-left text-md-left pl-5">

                <div class="col-xs-12 col-sm-3 col-md-3 pl-5">
                    
                    <ul class="list-unstyled quick-links ">
                        <li><a href="http://localhost/SakecStudentsPortal/index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="http://localhost/SakecStudentsPortal/index.php?#"><i class="fa fa-angle-double-right"></i>About</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 pl-5">
                    <ul class="list-unstyled quick-links">
                        <li><a href="http://localhost/SakecStudentsPortal/index.php?#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="http://localhost/SakecStudentsPortal/modules/ebooks.php"><i class="fa fa-angle-double-right"></i>Ebooks</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 pl-5">
                    <ul class="list-unstyled quick-links">
                        <li><a href="http://localhost/SakecStudentsPortal/modules/donate.php"><i class="fa fa-angle-double-right"></i>Donate</a></li>
                        <li><a href="http://localhost/SakecStudentsPortal/modules/borrow.php"><i class="fa fa-angle-double-right"></i>Borrow</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 pl-5">
                    <ul class="list-unstyled quick-links">
                        <li><a href="http://localhost/SakecStudentsPortal/modules/signup.php"><i class="fa fa-angle-double-right"></i>Signup</a></li>
                        <li><a href="http://localhost/SakecStudentsPortal/modules/login.php"><i class="fa fa-angle-double-right"></i>Login</a></li>
                    </ul>
                </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>  
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6"> All  Copyright Reserved.<a class="text-green ml-2" href="http://localhost/sakecstudentsportal/">SakecStudentsPortal</a></p>
                </div>
                </hr>
            </div>  
        </div>
    </section>
    <!-- ./Footer -->
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