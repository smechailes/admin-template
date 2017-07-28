<?php include 'inc/header.php';
	  include 'inc/config.php';?>
	  <div class="container">
	  	<div class="row">
	  			<div class="col-md-6 col-md-offset-3">
					<form class="form-horizontal" method="POST" action="login-process.php">
					  <div class="form-group">
					    <label for="inputUsername" class="col-sm-2 control-label login-ele">Email</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="username">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 control-label login-ele">Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <div class="checkbox">
					        <label class="login-ele">
					          <input type="checkbox" name="remember" value="1"> Remember me
					        </label>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-success" name="signin">Sign in</button>
					       <button type="reset" class="btn btn-danger" name="reset">Reset</button>
					    </div>
					  </div>
					</form>
				</div>
		</div>
</div>


<?php include 'inc/footer.php'; 
?>