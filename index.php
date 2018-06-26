<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Simplicia Shop</title>
		<link rel="stylesheet" href="w3.css">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<link rel="shortcut icon" href="simpliciashop.ico">
		<style></style>
		
<!--------------------------------------------------------------------------------------------------->
		<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
    $(this).bind("contextmenu", function(e) {
        e.preventDefault();
    });
}); 
</script>
<script type="text/JavaScript"> 
    function killCopy(e){ return false } 
    function reEnable(){ return true } 
    document.onselectstart=new Function ("return false"); 
    if (window.sidebar)
    { 
        document.onmousedown=killCopy; 
        document.onclick=reEnable; 
    } document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
}
</script>
<!------------------------------------------------------------------------------------------------------>
	</head>
	
<body oncontextmenu="return false;">
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Simplicia Shop</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
				<li><a href="phome.php"><span class="glyphicon glyphicon-modal-window"></span>&nbsp;Product</a></li>
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" placeholder="Search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Cart&nbsp;<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in Tk.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in Tk.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;SignIn</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<!--<div class="panel-heading">Products</div>-->
					<div class="panel-body">
						<!--<div id="get_product">
							<!--Here we get product jquery Ajax Request
						</div>-->
<!------------------------------------------------------------------------------->
						
					<div class="w3-content w3-display-container">
  <img class="mySlides w3-animate-fading" src="slider_image/f1.jpg" style="width:100%" draggable="false">
  <img class="mySlides w3-animate-fading" src="slider_image/f2.jpg" style="width:100%" draggable="false">
  <img class="mySlides w3-animate-fading" src="slider_image/f3.jpg" style="width:100%" draggable="false">
  <img class="mySlides w3-animate-fading" src="slider_image/f4.jpg" style="width:100%" draggable="false">
  <img class="mySlides w3-animate-fading" src="slider_image/f5.jpg" style="width:100%" draggable="false">
  <img class="mySlides w3-animate-fading" src="slider_image/f6.jpg" style="width:100%" draggable="false">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div><script>
var slideIndex = 1;
showDivs(slideIndex);


function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
var myInd = 0;
carouse3();

function carouse3() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myInd++;
    if (myInd > x.length) {myInd = 1}    
    x[myInd-1].style.display = "block";  
    setTimeout(carouse3, 8000);    
}
</script>
					</div>
					<!--<div class="panel-footer">&copy; All rights reserved</div>-->
				</div>
	<!-------------------------------------------------------------------------------------------->			
				<div class="panel panel-info">
					<!--<div class="panel-heading">Products</div>-->
					<div class="panel-body">
						<!--<div id="get_product">
							<!--Here we get product jquery Ajax Request
						</div>--><div class="w3-content w3-display-container">
  <img class="mySlide w3-animate-right" src="slider_image/e1.jpg" style="width:100%" draggable="false">
  <img class="mySlide w3-animate-right" src="slider_image/e2.jpg" style="width:100%" draggable="false">
  <img class="mySlide w3-animate-right" src="slider_image/e3.jpg" style="width:100%" draggable="false">
  <img class="mySlide w3-animate-right" src="slider_image/e4.jpg" style="width:100%" draggable="false">
   <img class="mySlide w3-animate-right" src="slider_image/e5.jpg" style="width:100%" draggable="false">
  <img class="mySlide w3-animate-right" src="slider_image/e6.jpg" style="width:100%" draggable="false">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs1(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs1(1)">&#10095;</button>
</div>
	<script>
var slideIndex = 1;
showDiv(slideIndex);



function plusDivs1(n) {
  showDiv(slideIndex += n);
}
function showDiv(n) {
  var i;
  var x = document.getElementsByClassName("mySlide");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
var myInde = 0;
carouse2();

function carouse2() {
    var i;
    var x = document.getElementsByClassName("mySlide");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myInde++;
    if (myInde > x.length) {myInde = 1}    
    x[myInde-1].style.display = "block";  
    setTimeout(carouse2, 3000);    
}
</script>
					</div>
					
					
					<!--<div class="panel-footer">&copy; All rights reserved</div>-->
				</div>
				
<!-------------------------------------------------------------------------------------------->

<div class="panel panel-info">
					<!--<div class="panel-heading">Products</div>-->
					<div class="panel-body">
						<!--<div id="get_product">
							<!--Here we get product jquery Ajax Request
						</div>-->
						<div class="w3-content w3-display-container">
  <img class="mySlid w3-animate-bottom" src="slider_image/d1.jpg" style="width:100%" draggable="false">
  <img class="mySlid w3-animate-bottom" src="slider_image/d2.jpg" style="width:100%" draggable="false">
  <img class="mySlid w3-animate-bottom" src="slider_image/d3.jpg" style="width:100%" draggable="false">
  <img class="mySlid w3-animate-bottom" src="slider_image/d4.jpg" style="width:100%" draggable="false">
  <img class="mySlid w3-animate-bottom" src="slider_image/d5.jpg" style="width:100%" draggable="false">
  <img class="mySlid w3-animate-bottom" src="slider_image/d6.jpg" style="width:100%" draggable="false">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs2(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs2(1)">&#10095;</button>
</div>
					
					
					<script>
var slideIndex = 1;
showDi(slideIndex);

function plusDivs2(n) {
  showDi(slideIndex += n);
}
function showDi(n) {
  var i;
  var x = document.getElementsByClassName("mySlid");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlid");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}
</script>
</div>
					<!--<div class="panel-footer">&copy; All rights reserved</div>-->
				</div>
				<div class="panel-footer"><center><img src="copyr.png" height="15px" width="15px">&nbsp;<img src="simpliciashop.ico" height="15px" width="15px">&nbsp;Simplicia Shop&nbsp;All rights reserved.</center></div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
