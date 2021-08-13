<?php include('header.php');?>
</div>
<div class="content">
<video style="position:fixed;top:0;right:0;left:0;bottom:0;min-width:110%;min-height:90%;" autoplay muted loop>
                   <source src="images/v5.mp4" type="video/mp4" >
                 </video>
	<div class="wrap">
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				  <div class="panel-heading" href="http://127.0.0.1:5000/">Login</div>
				  <div class="panel-body">
				  	<?php include('msgbox.php');?>
				<p class="login-box-msg">Sign in to start your session</p>
				<form action="process_login.php" method="post">
      <div class="form-group has-feedback">
        <input name="Email" type="text" size="25" placeholder="Email" class="form-control" placeholder="Email"/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="Password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary" >Login</button>
 
          <p class="login-box-msg" style="padding-top:20px">New Here? <a href="registration.php">Register</a></p>
      </div>
      </div>
</div>
    </form>
			</div>
		</div>
		<div class="clear"></div>	
		
	</div>
<?php include('footer.php');?>
</div>