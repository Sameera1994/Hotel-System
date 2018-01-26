<!DOCTYPE html>
<?php
session_start();
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Receipt Ragistration form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*,
*:before,
*:after {
  box-sizing: border-box;
}
body {
  padding: 1em;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 15px;
  color: #b9b9b9;
  background-color: #e3e3e3;
}
h3 {
  color: #7ed321;
}

input,
input[type="radio"] + label,
input[type="checkbox"] + label:before,
select option,
select {
  width: 100%;
  padding: 1em;
  line-height: 1.4;
  background-color: #f9f9f9;
  border: 1px solid #e5e5e5;
  border-radius: 5px;
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
input:focus {
  outline: 0;
  border-color: #64ac15;
}
input:focus + .input-icon i {
  color: #7ed321;
}
input:focus + .input-icon:after {
  border-right-color: #7ed321;
}

input[type="radio"] {
  display: none;
}
input[type="radio"] + label,
select {
  display: inline-block;
  width: 50%;
  text-align: center;
  float: left;
  border-radius: 0;
}
input[type="radio"] + label:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
input[type="radio"] + label:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
input[type="radio"] + label i {
  padding-right: 0.4em;
}
input[type="radio"]:checked + label,
input:checked + label:before,
select:focus,
select:active {
  background-color: #7ed321;
  color: #fff;
  border-color: #64ac15;
}
input[type="checkbox"] {
  display: none;
}
input[type="checkbox"] + label {
  position: relative;
  display: block;
  padding-left: 1.6em;
}
input[type="checkbox"] + label:before {
  position: absolute;
  top: 0.2em;
  left: 0;
  display: block;
  width: 1em;
  height: 1em;
  padding: 0;
  content: "";
}
input[type="checkbox"] + label:after {
  position: absolute;
  top: 0.45em;
  left: 0.2em;
  font-size: 0.8em;
  color: #fff;
  opacity: 0;
  font-family: FontAwesome;
  content: "\f00c";
}
input:checked + label:after {
  opacity: 1;
}
select {
  height: 3.4em;
  line-height: 2;
}
select:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
select:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
select:focus,
select:active {
  outline: 0;
}
select option {
  background-color: #7ed321;
  color: #fff;
}
.input-group {
  margin-bottom: 1em;
  zoom: 1;
}
.input-group:before,
.input-group:after {
  content: "";
  display: table;
}
.input-group:after {
  clear: both;
}
.input-group-icon {
  position: relative;
}
.input-group-icon input {
  padding-left: 4.4em;
}
.input-group-icon .input-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 3.4em;
  height: 3.4em;
  line-height: 3.4em;
  text-align: center;
  pointer-events: none;
}
.input-group-icon .input-icon:after {
  position: absolute;
  top: 0.6em;
  bottom: 0.6em;
  left: 3.4em;
  display: block;
  border-right: 1px solid #e5e5e5;
  content: "";
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.input-group-icon .input-icon i {
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.container {
  max-width: 38em;
  padding: 1em 3em 2em 3em;
  margin: 0em auto;
  background-color: #fff;
  border-radius: 4.2px;
  box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
}
.row {
  zoom: 1;
}
.row:before,
.row:after {
  content: "";
  display: table;
}
.row:after {
  clear: both;
}
.col-half {
  padding-right: 10px;
  float: left;
  width: 50%;
}
.col-half:last-of-type {
  padding-right: 0;
}
.col-third {
  padding-right: 10px;
  float: left;
  width: 33.33333333%;
}
.col-third:last-of-type {
  padding-right: 0;
}
@media  only screen and (max-width: 540px) {
  .col-half {
    width: 100%;
    padding-right: 0;
  }
}

body {
    background-image: url("http://hotel-wellenberg.ch/images/uploads/backslider-images/_HAB6228-anim-coffee.gif");
    background-color: #cccccc;
}
.icon-bar {
    width: 200px; /* Full-width */
    background-color: #555; /* Dark-grey background */
    overflow: auto; /* Overflow due to float */
}

.icon-bar a {
    float: left; /* Float links side by side */
    text-align: center; /* Center-align text */
    width: 25%; /* Equal width (5 icons with 20% width each = 100%) */
    padding: 12px 0; /* Some top and bottom padding */
    transition: all 0.3s ease; /* Add transition for hover effects */
    color: white; /* White text color */
    font-size: 30px; /* Increased font size */
}

.icon-bar a:hover {
    background-color: green; /* Add a hover color */
}

text {
  padding: 20px;
  color: black;
}


</style>

</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hotel System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Receipt</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li align="center"></li>
    </ul>
    <h3><div align="center" id="timer"></div></h3>
  </div>
</nav>
<div class="row">
  <div class="col-third">
    <div class="icon-bar">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a> 
      <a href="#"><i class="fa fa-google"></i></a>
      <a href="#"><i class="fa fa-yahoo"></i></a> 
    </div> 
  </div>
  <div class="col-third">
    <h3>Select at Date</h3>
    <div class="input-group input-group-icon">
    <input name = "date" type="date" placeholder="0000-00-00" >
    <div class="input-icon"><i class="glyphicon glyphicon-calendar"></i></div>
    </div>
  </div>
  <div class="col-third">
    <h3>Recept Issue by</h3>
    <div class="input-group input-group-icon">
      <input type="text" name="user_name" placeholder="Created by"/>
      <div class="input-icon"><i class="glyphicon glyphicon-check"></i></div>
    </div>
  </div>
</div>

  <form>
  <div ng-app="">
    <div class="row"  align="center">
      <h3 align="center">Insert Items and amount</h3>
      <div class="input-group input-group-icon">
        <input type="text" ng-model="firstname" placeholder="Customer ID"/>
        <div class="input-icon"><i class="glyphicon glyphicon-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="title" placeholder="Title"/>
        <div class="input-icon"><i class="glyphicon glyphicon-glass"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="amount" placeholder="Amount"/>
        <div class="input-icon"><i class="glyphicon glyphicon-usd"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="discount" placeholder="Discount"/>
        <div class="input-icon"><i class="glyphicon glyphicon-gift"></i></div>
      </div>
    </div>

    <div class="row"  align="center">
    </div>
  <script type="text/javascript">
    $function(){
      $('.add').click(function)){
          var product = $('.product_id').html();

          var tr = '<tr><th class="no>1</th>'+
                    '<td><select name="product_id" class="form-control product_id">'+product+'</select></td> +
                    '<td><input type="text" name="qty[]" class="qty form-control"></td>' +
                    '<td><input type="text" name="price[]" class="price form-control"></td>' +
                    '<td><input type="text" name="dis[]" class="dis form-control"></td>' +
                    '<td><input type="text" name="amount[]" class="amount form-control"></td>' +
                    '<td><a href= "#" class btn btn-danger">Delete</a></td>';
          $('.body').append(tr);
        });
    });
</script>
    <div class="row"  align="center">
      <h3>Terms and Conditions</h3>
      <div class="input-group">
    <button type="button" class="btn btn-success">Add to recipt</button>
      </div>
    </div>
  </form>
  <div>

<script>setInterval(function() {
    var currentTime = new Date ( );    
    var currentHours = currentTime.getHours ( );   
    var currentMinutes = currentTime.getMinutes ( );   
    var currentSeconds = currentTime.getSeconds ( );
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
    var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
    document.getElementById("timer").innerHTML = currentTimeString;
}, 1000);
</script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

</body>
</html>
