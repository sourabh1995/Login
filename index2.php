
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Signup And LogIn Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />

<style>
.nav-tabs {
	margin-bottom: 15px;
}
.sign-with {
	margin-top: 25px;
	padding: 20px;
}
</style>
</head>

<body>

	<?php

  session_start();
  $_SESSION['login-token'] = hash('md5','123!@#ABCabc');


  ?>
	<?php

	
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
      <li><a data-toggle="modal" data-target="#myModal">
    Open Login</a></li>
    </ul>
  </div>
</nav>

	<div class="container">

		<!-- Large modal -->


 <button style="visibility: hidden;" id="clickButton" data-opentab="1"></button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" >
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                            	<!-- form start -->
         				<form method="post" role="form" id="login-form" autocomplete="on" action="welcome.php">
                            <div class="form-header">
					          <h3 class="form-title"><i class="fa fa-user"></i> Login</h3>

					         <div class="pull-right">
					             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
					         </div>

					         </div>

					         <div class="form-body">
          							<?php if(isset($_SESSION['login-errorE'])){
						             ?>
						            <div class="form-group">
						              <span class="alert alert-danger"><?php echo $_SESSION['login-errorE']; ?></span>
						            </div>
						            <?php

						            unset($_SESSION['login-errorE']);
						          }
						          ?>
            

					              <div class="form-group">
					                   <div class="input-group">
					                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
					                   <input name="email" type="text" class="form-control" placeholder="Email">
					                   </div>
					                   <span class="help-block" id="error"></span>
					              </div>

					              

					               <div class="form-group">
					                    <div class="input-group">
					                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
					                    <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
					                    </div>
					                    <span class="help-block" id="error"></span>
					               </div>

					         </div>
					         <div class="form-footer">
					         	<input type="hidden" name="loginPage" value="2">
           						<input type="hidden" name="login-token" value="<?php echo $_SESSION['login-token']; ?>">
				                 <button type="submit" class="btn btn-info" name="submit" value="submit">
				                 <span class="glyphicon glyphicon-log-in"></span> LogIn !
				                 </button>
				            </div>
				            </form>

                            </div>
                            <div class="tab-pane" id="Registration">
							<form method="post" role="form" id="register-form" autocomplete="on" action="submit.php">

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
			             <input type="hidden" name="indexPage" value="2">
			 			<input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
			             <div class="form-footer">
			                  <button type="submit" class="btn btn-info" name="submit" value="submit">
			                  <span class="glyphicon glyphicon-log-in"></span> Sign Me Up !
			                  </button>
			             </div>


			             </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


	</div>
	<script src="assets/jquery-1.11.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/jquery.validate.min.js"></script>
    <script src="assets/login.js"></script>
    <script src="assets/register.js"></script>
    <?php if(isset($_SESSION['errorE'])){
			 						 ?>
    	<script type="text/javascript">
    window.onload = function(){
  document.getElementById('clickButton').click();
}
      $('#clickButton').on('click', function() {
    whichtab = $(this).data('opentab');
    $('#myModal').modal('show');
    $('.nav-tabs li:eq('+whichtab+') a').tab('show');
});
    </script>
    <?php
    unset($_SESSION['errorE']);
	}
	?>
    
		<script type="text/javascript">

		$('#myModal').modal('show');

   	</script>
</body>
</html>
