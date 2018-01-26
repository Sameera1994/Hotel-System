<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Customer Ragistration form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
video#bgvid{
	min-width: 100%;
	min-height: 100%;
	width: auto;
	height: auto;
	background: url("https://www.hotel-offenburg-city.com/gch-city/ehm-hotels/offenburg/gastronomie/off51-hotel-bar1.low-res.gif")no-repeat;
	background-size: cover;
}
#image1{
  min-width: 100%;
  min-height: 100%;
  width: 170px;
  height: 170px;
}	
</style>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: auto;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #red;
  font-size: 50px;
  padding: 8px 12px;
  position: absolute;
  bottom: 50%;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 4.0s;
  animation-name: fade;
  animation-duration: 4.0s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
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

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:left;width:50%}

/* Add padding to container elements */
.container {
    padding: 0px;
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

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

</style>
</head>

<body>
<div class="row">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hotel Hilro</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Rooms</a></li>
      <li><a href="index">Facilities</a></li>
      <li><a href="#">Login</a></li>
      <li><a href="#">Customer</a></li>
      <li><a href="index">Reviews</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
    <div class="slideshow-container">
<div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="https://www.claytonhotels.com/wp-content/uploads/2017/04/Clayton-Hotel-Burlington-Road-exterior.jpg" style="width:100%">
      <div class="text">Hotel Hilro
        <div class="banner-text-w3-agileits">
        <h2>Customer Stafication are high!!</h2>
          <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Booking Now</button>
          </div>
        </div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://epoca-es.com/wp-content/uploads/2017/07/TCOI_Hotel_TopImage_1920x1000_low.jpg" style="width:100%">
  <div class="text">Room Avaliable
  <div class="banner-text-w3-agileits">
        <h2>Easy pay for our service</h2>
        <div class="botton">
           <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Booking Now</button>
        </div>
  </div>
 </div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://www.safarihotelsnamibia.com/wp-content/uploads/2014/11/Safari-Court-Hotel-Pool.jpg" style="width:100%">
  <div class="text">Hotel Hilro
  <div class="banner-text-w3-agileits">
        <h2>Online booking System</h2>
        <div class="botton">
          <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Booking Now</button>
        </div>
  </div>
 </div>
</div>
</div>
  <br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
    </div>
  </div>
<div class="row">
  <div class="col-md-12">
    <div class="col-md-3" style="background-color:#E3E9E4;">
    <h3 align="center">Our Location</h3>
    <img src="http://maps.googleapis.com/maps/api/staticmap?center=Via+Cristoforo+Colombo,Soverato&zoom=17&size=628x500&key=AIzaSyAa8UxOHrLo74oxer5SG6zIc8ySJ3JPESk&markers=color:0xAE021A|label:N|Via+Cristoforo+Colombo,Soverato&sensor=false" align="center" width="300px" height="180px">
  </div>
    <div class="col-md-6">
    <p>
    Welcome to Cinnamon Hotels & Resorts, a chain of 13 distinct hotels and resorts in Sri Lanka and the Maldives, with a passion for style and a penchant for fun.. The diversity of the Cinnamon way of doing things means we have unique experiences in each of the hotels from rooms on the beach to rooms in the ocean and views of the city, the jungle and horizons, so take your pick and we’ll deliver. We create holistic, inspiring adventures and light-hearted fun for one-of-a-kind island adventures. There’s so much to see and plenty to do in our tropical corner of the world, so why not do it the Cinnamon way?
    </p><br>
    <p>
      and we’ll deliver. We create holistic, inspiring adventures and light-hearted fun for one-of-a-kind island adventures. There’s so much to see and plenty to do in our tropical corner of the world, so why not do it the Cinnamon way?
    </p>
    </div>

    <div class="col-md-3">
        <img id="image1" src="http://www.georgesintl.com/wp-content/uploads/2014/12/hotel-reviews.jpg">
    </div>

  </div>
</div>
<br><br><br>
<div class="row">
  <div class="col-md-12">
    <div class="col-md-3">
    <img id="image1" src="https://www.corinthia.com/application/files/1014/8430/4273/CHB---Acoustic-Friday-11-Mar-2016-65.jpg">
    </div>
    <div class="col-md-3">
    <img id="image1" src="http://falcon-hotels.com/uploads/Images/Dsc_0256.jpg">
    </div>
    <div class="col-md-3">
    <img id="image1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcV0p_kVcsrRKZ928J-kcgTCRu4wVgys81BJdMh1m3jEHkxZjp">
    </div>
    <div class="col-md-3">
    <img id="image1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFCbGTfPp3SW2plKf8LOMzNtS8vh-A-iGQ7syi60d0jS23lDaj">
    </div>
  </div>
</div>
<br><br><br>
<div class="container" style="background-color:#E3E9E4;">
  <div align="center" height="200px" >
  <div class="col-md-4">
   Welcome to Cinnamon Hotels & Resorts, a chain of 13 distinct hotels and resorts in Sri Lanka and the Maldives, with a passion for style and a penchant for fun..
  </div>
  <div class="col-md-4" style="background-color:#E3E0E4;">
  <input type="text" name="email"><p><b>Subcribe</b></p>
  </div>
  <div class="col-md-4">

    <li>ffrgfregreg</li>
    <li>fefrgregergef wdwd</li>
    <li>efefefr fvve</li>
    <li>dewewfxaq</li>
  </div>
  </div>
</div>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="/action_page.php">
    <div class="container">
    <label><b>Cheak in</b></label>
      <input type="date" placeholder="" name="checkin_date" required>
      <br><br>
      <label><b>Cheak out</b></label>
      <input type="date" placeholder="" name="checkout_date" required>
      <br><br>
      <label><b>days</b></label>
      <input type="password" placeholder="Enter you want how many days to booking" name="psw" required>

      <label><b>Number of rooms</b></label>
      <input type="password" placeholder="You need how many rooms" name="psw-repeat" required>
      <input type="checkbox" checked="checked"> I want to book
      <p>I want book and I agree to your <a href="#">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Search</button>
      </div>
    </div>
  </form>
</div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
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