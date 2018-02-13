<?php include('component/header.php'); ?>

<div class="panel panel-success">
	<div class="panel-heading">
		<ol class="breadcrumb">
			<li><a href="home.php" style="font-size:18px;"><i class="fa fa-arrow-circle-left" aria-hidden="true" title="Go to home page"></i></a></li>
		  	<li><a href="home.php">Home</a></li>
		  	<li class="active">Login</li>
		</ol>
	</div>
	<div class="panel-body">
		<em>Welcome ... Happy to see you again.</em>
	    <br /><hr />
	    <div class="row">
	    	<div class="col-md-4">
	    		<form class="form-horizontal">
				  	<div class="form-group">
				    <label for="" class="col-sm-5 control-label">Phone Number Or Email</label>
				    <div class="col-sm-7">
				      <input type="email" class="form-control"  placeholder="Phone Number Or Email" />
				    </div>
				  	</div>
				  	<div class="form-group">
				    <label for="" class="col-sm-5 control-label">Password</label>
				    <div class="col-sm-7">
				      <input type="password" class="form-control"  placeholder="Password" />
				    </div>
				  	</div>
				  	<div class="form-group">
				    <div class="col-sm-offset-5 col-sm-7">
				    	<a href="">Forgot your password?</a>
				    </div>
				  	</div>
				  	<div class="form-group">
				    <div class="col-sm-offset-5 col-sm-7">
				      <button type="submit" class="btn btn-success">Log in</button>
				    </div>
				  	</div>
				</form>
	    	</div>
	    	<div class="col-md-4 text-right">
	    		Or Login With
	    		<div><a href="#" class="btn btn-primary" style="width:50%; margin:5px;"><i class="fa fa-facebook"></i>acebook</a></div>
	    		<div><a href="#" class="btn btn-danger" style="width:50%; margin:5px;"><i class="fa fa-google"></i>oogle</a></div>
	    		<br /><br />
	    	</div>
	    	<div class="col-md-4">
	    		Don’t have an account? <a href="register.php">Join Us</a>
	    	</div>
	    </div>
	</div>
</div>

<?php include('component/footer.php'); ?>
