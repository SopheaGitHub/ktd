<?php include('component/header.php'); ?>

<div class="panel panel-success">
	<div class="panel-heading">
		<ol class="breadcrumb">
			<li><a href="home.php" style="font-size:18px;"><i class="fa fa-arrow-circle-left" aria-hidden="true" title="Go to home page"></i></a></li>
		  	<li><a href="home.php">Home</a></li>
		  	<li class="active">Join Us</li>
		</ol>
	</div>
	<div class="panel-body">
		<em>Join us now ... it's for free.</em>
	    <br /><hr />
	    <div class="row">
	    	<div class="col-md-4">
	    		<form class="form-horizontal">

	    			<div class="form-group">
				    <label for="" class="col-sm-3 control-label">First Name</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control"  placeholder="First Name" autofocus>
				    </div>
				  	</div>

				  	<div class="form-group">
				    <label for="" class="col-sm-3 control-label">Last Name</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control"  placeholder="Last Name" autofocus>
				    </div>
				  	</div>

				  	<div class="form-group">
				    <label for="" class="col-sm-3 control-label">Phone Number Or Email</label>
				    <div class="col-sm-9">
				      <input type="email" class="form-control"  placeholder="Phone Number Or Email" autofocus>
				    </div>
				  	</div>

				  	<div class="form-group">
				    <label for="" class="col-sm-3 control-label">Password</label>
				    <div class="col-sm-9">
				      <input type="password" class="form-control" placeholder="Password">
				    </div>
				  	</div>

				  	<div class="form-group">
				    <label for="" class="col-sm-3 control-label">Confirm Password</label>
				    <div class="col-sm-9">
				      <input type="password" class="form-control" placeholder="Confirm Password">
				    </div>
				  	</div>

				  	<div class="form-group">
	                    <div class="col-md-9 col-md-offset-3">
	                        <div class="checkbox">
	                            <label>
	                                <input type="checkbox" name="remember"> <a href="#" data-toggle="modal" data-target="#myModal">Accept Policy</a>
	                            </label>
	                        </div>
	                    </div>
	                </div>

				  	<div class="form-group">
				    <div class="col-sm-offset-3 col-sm-9">
				      <button type="submit" class="btn btn-success">Register</button>
				    </div>
				  	</div>
				</form>
	    	</div>
	    	<div class="col-md-4 text-right">
	    		Or Join Us With
	    		<div><a href="#" class="btn btn-primary" style="width:50%; margin:5px;"><i class="fa fa-facebook"></i>acebook</a></div>
	    		<div><a href="#" class="btn btn-danger" style="width:50%; margin:5px;"><i class="fa fa-google"></i>oogle</a></div>
	    		<br /><br />
	    	</div>
	    	<div class="col-md-4">
	    		Already have an account? <a href="login.php">Login</a>
	    	</div>
	    </div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Privacy title</h4>
      </div>
      <div class="modal-body">
        your text here
      </div>
    </div>
  </div>
</div>
<?php include('component/footer.php'); ?>
