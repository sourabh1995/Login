
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Signup And LogIn Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />
</head>

<body>


	<?php

	session_start();
	$_SESSION['token'] = hash('md5','123!@#ABCabc');


	?>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li ><a href="login.php">Index 1</a></li>
      <li><a href="index2.php">Index 2</a></li>
      
    </ul>
  </div>
</nav>

	<div class="container">

    <div class="signup-form-container">

         <!-- form start -->
         <form method="post" role="form" id="register-form" autocomplete="off" action="submit.php">

         <div class="form-header">
         	<h3 class="form-title"><i class="fa fa-user"></i> Sign Up</h3>

         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>

         </div>

         <div class="form-body">
					 <?php if(isset($_SESSION['errorE'])){
						 ?>
						<div class="form-group">
							<span class="alert alert-danger"><?php echo $_SESSION['errorE']; ?></span>
						</div>
						<?php

						unset($_SESSION['errorE']);
					}
					?>
         	  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="name" type="text" class="form-control" placeholder="Username">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>

              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="email" type="text" class="form-control" placeholder="Email">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>

              <div class="row">

                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <span class="help-block" id="error"></span>
                   </div>

                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="cpassword" type="password" class="form-control" placeholder="Retype Password">
                        </div>
                        <span class="help-block" id="error"></span>
                   </div>

             </div>


            </div>
            <input type="hidden" name="indexPage" value="1">
						<input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
            <div class="form-footer">
                 <button type="submit" class="btn btn-info" name="submit" value="submit">
                 <span class="glyphicon glyphicon-log-in"></span> Sign Me Up !
                 </button>
                 <a href="login.php" class="btn btn-success pull-right">
                 <span class="glyphicon glyphicon-log-in"></span> LogIn !
                 </a>
            </div>


            </form>
            

           </div>

	</div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/jquery-1.11.2.min.js"></script>
    <script src="assets/jquery.validate.min.js"></script>
    <script src="assets/register.js"></script>

</body>
</html>
