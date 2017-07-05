<?php
session_start();
if(!isset($_SESSION['name'])){
	header('Location: index.php');
}

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Signup And LogIn Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />
<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900);
[am-LatoSans] {
  font-family: 'Lato', sans-serif;
}
[am-TopLogo] {
    max-height: 70px;
    max-width: 210px;
    margin: 12px 11px;
}
[am-CallNow] {
    font-weight: 200;
    color: #333;
    vertical-align: middle;
    line-height: 35px;
    font-size: 19px;
    padding-right: 8px;
}
/*
  Relevant styles below
*/
.topper {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
}

.navbar.navbar-inverse {
  background-image: linear-gradient(#9f9f9f, #535353 3%, #1f1f1f 17%, #212121 49%, #191919 89%, #000000 100%);
  border-top: 1px inset rgba(255, 255, 255, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
  border-radius: 10px;
  margin-top: 10px;
}

.navbar .navbar-nav > li > a {
  color: #d1d1d1;
  font-weight: 700;
  text-rendering: optimizeLegibility;
  text-shadow: 0px -1px black, 0px 1px rgba(255, 255, 255, 0.25);
  line-height: 18px;
}

.navbar .navbar-nav > li.active {
  color: #f8f8f8;
  background-color: #080808;
  box-shadow: inset 0px -28px 23px -21px rgba(255, 255, 255, 0.15);
  border-left: 1px solid #2A2A2A;
  border-right: 1px solid #272727;
}

.btn.btn-gradient-blue {
  background-color: #0c5497 !important;
  background-image: -webkit-linear-gradient(top, #127bde 0%, #072d50 100%);
  background-image: -o-linear-gradient(top, #127bde 0%, #072d50 100%);
  background-image: linear-gradient(to bottom, #127bde 0%, #072d50 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff127bde', endColorstr='#ff072d50', GradientType=0);
  border-color: #072d50 #072d50 #0c5497;
  color: #fff !important;
  text-shadow: 0 -1px 0 rgba(31, 31, 31, 0.29);
  -webkit-font-smoothing: antialiased;
}
</style>
</head>

<body>


	

	

    <div class="container">
  <!-- Topper w/ logo -->
 
  <!-- Navigation -->
  <div class="row">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs-inline-block nav-logo" href="/"><img src="/images/logo-dark-inset.png" class="img-responsive" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav js-nav-add-active-class">
            <li><a href="/index.html">Home</a></li>
            
          </ul>
          <ul class="nav navbar-nav js-nav-add-active-class navbar-right">
          	<li><a href=""><?php echo "&nbsp;".$_SESSION['name'];?></a></li>
          	<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
        </div>
        </nav>

	</div>
	</div>


    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/jquery-1.11.2.min.js"></script>
    <script src="assets/jquery.validate.min.js"></script>
    <script src="assets/register.js"></script>

</body>
</html>
