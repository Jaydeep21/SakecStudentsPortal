<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box;
border-radius: 2%;}
body {margin:0;
padding:1%;}    

/* Style the tab */
.tab {
    float: left;
    border: 3px ridge black;
    background-color: black;
    width: 30%;
    height:100%;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: white;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
    border-radius: 10;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color:rgba(255, 0, 0, 0.527);
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: rgba(255, 0, 0, 0.781);
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 2px 12px;
    border: 3px ridge black;
    width: 69.5%;
    
    margin-left: 0.5%;

}
hr{
   border-width: 1%;
   border-color: black;
   margin: 0;
}
.image{
    margin:1% 0;
    padding:0;
    position: absolute;
    
}
.article{
    margin:1% 0 0 51% ;
    padding:0;
    float:left;
    position: relative;
}
p{
    padding: 1%;
}
.btn{
    margin:10% 0 2% 0;
    float:left;
    background-color: rgba(214, 12, 12, 0.836);
    color:white;
    

}
.btn:hover{
    background-color:black;
    color:white;
    
}
    
/* Full-width input fields */
input[type=text], input[type=text] {
    width: 950px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: 1000px;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Drafter')" id="defaultOpen">Drafter</button>
  <button class="tablinks" onclick="openCity(event, 'Calculator')">Calculator</button>
  <button class="tablinks" onclick="openCity(event, 'Container')">Container</button>
</div>

<div id="Drafter" class="tabcontent">
  <h2>Drafter</h2>
  <hr>
  <p>
  <img src="../assets/img/drafter.jpg" align="left">
  
      <br><br>&nbsp Mini drafter is an important device used for making drawing quickly & accurately.<br> This instrument gives faster drawing as it like the purpose of T Square, Set Square, Protractor and scales.
  </p>
  
  <button type="button" class="btn btn-danger btn-block" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">BORROW</button> 
</div>

<div id="Calculator" class="tabcontent">
  <h2>Calculator</h2>
  <hr><p>
  <img src="../assets/img/calci.jpg" align="left">
  <br><br>&nbsp A scientific calculator is a calculator designed to help you calculate science, engineering, and mathematics problems.<br> It has way more buttons than your standard calculator that just lets you do your four basic arithmetic operations of addition, subtraction, multiplication, and division.</p>
   <button type="button" class="btn btn-danger btn-block" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">BORROW</button> 
</div>

<div id="Container" class="tabcontent">
  <h2>Container</h2>
  <hr><p>
  <img src="../assets/img/container.jpg" align="left" >
  <br><br>
      jkhuszhxshxkishaijzkgjausxusahxisahxisazjk   jhbcahcsujsajcsgj yvaycbsyjbsacau jyacbjucbauscsubcs sagiucbh<br>xhasxvhasv</p>
      <button type="button" class="btn btn-danger btn-block" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">BORROW</button> 
</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">


    <div class="container">
      <label for="year"><b>Year</b></label><br>
      <select>
  <option value="fe">FE</option>
  <option value="se">SE</option>
  <option value="te">TE</option>
  <option value="be">BE</option>
</select><br><br>

      <label for="div"><b>Division</b></label><br>
      <select>
  <option value="one">1</option>
  <option value="two">2</option>
  <option value="three">3</option>
  <option value="four">4</option>
  <option value="five">5</option>
  <option value="six">6</option>
  <option value="seven">7</option>
  <option value="d">D</option>
</select><br><br>
        
       
      <label for="rollno"><b>Roll Number</b></label>
      <input type="text" placeholder="Enter Roll Number" name="rollno" required>       
       <label>
        <input type="checkbox" name="terms and condition" required> I agree to T&C
      </label>  
        <button type="submit" style="width:1035px">Borrow</button>
    </div>

    <div class="container" style="background-color:#f1f1f1;width:1035px;">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html> 