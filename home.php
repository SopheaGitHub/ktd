<?php include('component/header.php'); ?>

<div class="panel panel-success">
	<div class="panel-heading" style="padding: 0px;">
		<div class="row" style="margin-right: 0px; margin-left: 0px;">
			<div class="col-md-9">
				<ul class="nav nav-pills">
					<li><a href="home.php">LOGO</a></li>
				    <li class="dropdown">
				        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Hire Freelancers <span class="glyphicon glyphicon-triangle-bottom"></span></a>
				        <ul class="dropdown-menu">
				            <li><a href="skill.php">Post a Project</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Showcase</a></li>
				        </ul>
				    </li>
				    <li class="dropdown">
				        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Find Work <span class="glyphicon glyphicon-triangle-bottom"></span></a>
				        <ul class="dropdown-menu">
				            <li><a href="skill.php">Browse Projects</a></li>
				            <li><a href="skill.php">Browse Categories</a></li>
				        </ul>
				    </li>
				    <li><a href="#">How to use?</a></li>
				</ul>
			</div>
			<div class="col-md-3 text-right" style="margin-top:3px; margin-bottom:3px;">
				<button class="btn btn-sm btn-success">Post a Project</button>
				<button class="btn btn-sm btn-success">Upload Showcase</button>
			</div>
		</div>
	</div>
	<div class="panel-body" style="margin:0px; padding:2px 15px;">
		<div class="text-right">
			<ul class="nav nav-pills pull-right">
			    <li><a href="login.php">Login</a></li>
			    <li><a href="register.php">Join Us</a></li>
			</ul>
			<!-- <a href="#"><img src="img/user-453533-fdadfd.png" style="width:30px;"></a> &nbsp;&nbsp;&nbsp;
			<ul class="nav nav-pills pull-right">
			    <li class="dropdown">
			        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-comment"></span> <span style="position:absolute; top:0;">2</span></a>
			        <ul class="dropdown-menu">
			            <li>
			            	<div style="padding: 10px;">
			            		<div>New Message</div>
			            		<div style="height: 50px;">

			            		</div>
			            		<div class="text-center"><a href="#">See All</a></div>
			            	</div>
			            </li>
			        </ul>
			    </li>
			    <li class="dropdown">
			        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-globe"></span> <span style="position:absolute; top:0;">5</span></a>
			        <ul class="dropdown-menu">
			            <li>
			            	<div style="padding: 10px;">
			            		<div>Notification</div>
			            		<div style="height: 50px;">

			            		</div>
			            		<div class="text-center"><a href="#">See All</a></div>
			            	</div>
			            </li>
			        </ul>
			    </li>
			    <li class="dropdown">
			        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-triangle-bottom"></span></a>
			        <ul class="dropdown-menu">
			            <li><a href="skill.php">Skill</a></li>
			        	<li><a href="#">About</a></li>
			            <li class="divider"></li>
			            <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
			        </ul>
			    </li>
			</ul> -->
		</div>
	</div>


</div>

<div class="col-md-2">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Categories</h3>
	  </div>
	  <div class="panel-body">
	    <div class="list-group" style="margin-bottom:0px;">
		  <a href="#" class="list-group-item">Art <span class="badge">12</span></a>
		  <a href="#" class="list-group-item">Design <span class="badge">5</span></a>
		  <a href="#" class="list-group-item">Photography <span class="badge">3</span></a>
		  <a href="#" class="list-group-item">Web Develop <span class="badge">3</span></a>
		  <a href="#" class="list-group-item">Mobile App <span class="badge">3</span></a>
		</div>
	  </div>
	</div>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Favorite Tags</h3>
	  </div>
	  <div class="panel-body">
	    
		  <button type="button" class="btn btn-default btn-xs">Graphic Design</button>
		  <button type="button" class="btn btn-default btn-xs">Logo</button>
		  <button type="button" class="btn btn-default btn-xs">Design</button>
		  <button type="button" class="btn btn-default btn-xs">Logo Design</button>
	  </div>
	</div>
</div>
<div class="col-md-8">
	<div style="border: 1px solid #D5D5D5; background:#fff; min-height: 300px;">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/first-slide.svg" alt="First Slide" style="height:300px; width:100%;">
		      <div class="carousel-caption">
		        Hire Freelancers
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/second-slide.svg" alt="Second Slide" style="height:300px; width:100%;">
		      <div class="carousel-caption">
		        Find Projects
		      </div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<br />
	<div style="border: 1px solid #D5D5D5; background:#fff; padding:15px; min-height: 300px;">
		<form>
		  	<div class="row">
		  		<div class="col-md-4">
		  			<span><h4>Available Projects</h4></span><span><a href="#">See All</a></span>
		  		</div>
		  		<div class="col-md-8">
		  			<div class="form-group">
				    	<div class="input-group">
				      		<input type="text" class="form-control" placeholder="Find available projects?">
				     		<div class="input-group-addon">Search</div>
				    	</div>
				  	</div>
		  		</div>
		  	</div>
		</form>
		<hr />

		<div class="media">
		  <div class="media-left media-top">
		    <a href="#">
		      <img class="media-object img-circle img-thumbnail" src="img/profile_logo_22207730.jpg" style="width:70px;" style="width:70px;" alt="name">
		    </a>
		  </div>
		  <div class="media-body">
		    <h4 class="media-heading"><a href="#">Arabic and English App modern logo</a></h4>
		    <div>
		    	<span style="padding: 3px; background:red; color:#fff;">5.0</span>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>
		    	&nbsp;&nbsp;| &nbsp;&nbsp;<span>200$</span>
		    	&nbsp;&nbsp;| &nbsp;&nbsp;<span>4 weeks ago.</span>
		   	</div>
		   	<br />
		   	<p>
			  <button type="button" class="btn btn-default btn-xs">Graphic Design</button>
			  <button type="button" class="btn btn-default btn-xs">Logo Design</button>
			</p>
		   	<br />
		    <p>
		    	“this freelancer is gifted one which as endless ideas i recommend him, and i'll sure hire him again ”
		  	</p>
		  </div>
		</div>
		<hr />
		<div class="media">
		  <div class="media-left media-top">
		    <a href="#">
		      <img class="media-object img-circle img-thumbnail" src="img/default_avatar_male.jpg" width="100px" style="width:70px;" style="width:70px;" alt="name">
		    </a>
		  </div>
		  <div class="media-body">
		    <h4 class="media-heading"><a href="#">Design a pastry shop Logo</a></h4>
		    <div>
		    	<span style="padding: 3px; background:red; color:#fff;">4.0</span>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star-o" aria-hidden="true"></i>
		    	&nbsp;&nbsp;| &nbsp;&nbsp;<span>200$</span>
		    	&nbsp;&nbsp;| &nbsp;&nbsp;<span>4 weeks ago.</span>
		   	</div>
		   	<br />
		   	<p>
			  <button type="button" class="btn btn-default btn-xs">Graphic Design</button>
			  <button type="button" class="btn btn-default btn-xs">Logo Design</button>
			</p>
		   	<br />
		    <p>
		    	“this freelancer is gifted one which as endless ideas i recommend him, and i'll sure hire him again ”
		  	</p>
		  </div>
		</div>
		<hr />
		<div class="media">
		  <div class="media-left media-top">
		    <a href="#">
		      <img class="media-object img-circle img-thumbnail" src="img/profile_logo_22207730.jpg" style="width:70px;" style="width:70px;" alt="name">
		    </a>
		  </div>
		  <div class="media-body">
		    <h4 class="media-heading"><a href="#">Arabic and English App modern logo</a></h4>
		    <div>
		    	<span style="padding: 3px; background:red; color:#fff;">5.0</span>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>
		    	&nbsp;&nbsp;| &nbsp;&nbsp;<span>200$</span>
		    	&nbsp;&nbsp;| &nbsp;&nbsp;<span>4 weeks ago.</span>
		   	</div>
		   	<br />
		   	<p>
			  <button type="button" class="btn btn-default btn-xs">Graphic Design</button>
			  <button type="button" class="btn btn-default btn-xs">Logo Design</button>
			</p>
		   	<br />
		    <p>
		    	“this freelancer is gifted one which as endless ideas i recommend him, and i'll sure hire him again ”
		  	</p>
		  </div>
		</div>
		<hr />
		<div class="media">
		  <div class="media-left media-top">
		    <a href="#">
		      <img class="media-object img-circle img-thumbnail" src="img/default_avatar_male.jpg" width="100px" style="width:70px;" style="width:70px;" alt="name">
		    </a>
		  </div>
		  <div class="media-body">
		    <h4 class="media-heading"><a href="#">Design a pastry shop Logo</a></h4>
		    <div>
		    	<span style="padding: 3px; background:red; color:#fff;">4.0</span>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star-o" aria-hidden="true"></i>
		    	&nbsp;&nbsp;| &nbsp;&nbsp;<span>200$</span>
		    	&nbsp;&nbsp;| &nbsp;&nbsp;<span>4 weeks ago.</span>
		   	</div>
		   	<br />
		   	<p>
			  <button type="button" class="btn btn-default btn-xs">Graphic Design</button>
			  <button type="button" class="btn btn-default btn-xs">Logo Design</button>
			</p>
		   	<br />
		    <p>
		    	“this freelancer is gifted one which as endless ideas i recommend him, and i'll sure hire him again ”
		  	</p>
		  </div>
		</div>
		<hr />
		<div class="media">
		  <div class="media-left media-top">
		    <a href="#">
		      <img class="media-object img-circle img-thumbnail" src="img/profile_logo_22207730.jpg" style="width:70px;" alt="name">
		    </a>
		  </div>
		  <div class="media-body">
		    <h4 class="media-heading"><a href="#">Arabic and English App modern logo</a></h4>
		    <div>
		    	<span style="padding: 3px; background:red; color:#fff;">5.0</span>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>&nbsp;
		    	<i class="fa fa-star" aria-hidden="true" style="color:red;"></i>
		    	&nbsp;&nbsp;| &nbsp;&nbsp;<span>200$</span>
		    	&nbsp;&nbsp;| &nbsp;&nbsp;<span>4 weeks ago.</span>
		   	</div>
		   	<br />
		   	<p>
			  <button type="button" class="btn btn-default btn-xs">Graphic Design</button>
			  <button type="button" class="btn btn-default btn-xs">Logo Design</button>
			</p>
		   	<br />
		    <p>
		    	“this freelancer is gifted one which as endless ideas i recommend him, and i'll sure hire him again ”
		  	</p>
		  </div>
		</div>
		<hr />

	</div>
	<br />
	<div style="border: 1px solid #D5D5D5; background:#fff; padding:15px; min-height: 300px;">
		<form>
		  	<div class="row">
		  		<div class="col-md-4">
		  			<span><h4>Freelancers</h4></span><span><a href="#">See All</a></span>
		  		</div>
		  		<div class="col-md-8">
		  			<div class="form-group">
				    	<div class="input-group">
				      		<input type="text" class="form-control" placeholder="Find talented freelancers?">
				     		<div class="input-group-addon">Search</div>
				    	</div>
				  	</div>
		  		</div>
		  	</div>
		</form>
		<hr />
	</div>
	<br />
	<div style="border: 1px solid #D5D5D5; background:#fff; padding:15px; min-height: 300px;">
		<form>
		  	<div class="row">
		  		<div class="col-md-4">
		  			<span><h4>Showcase</h4></span><span><a href="#">See All</a></span>
		  		</div>
		  		<div class="col-md-8">
		  			<div class="form-group">
				    	<div class="input-group">
				      		<input type="text" class="form-control" placeholder="Find the best showcase?">
				     		<div class="input-group-addon">Search</div>
				    	</div>
				  	</div>
		  		</div>
		  	</div>
		</form>
		<hr />
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4">
			  	<div class="thumbnail box-showcase" style="overflow:hidden;">
			  		<span class="komalhover dhiraj">
				    	<img class="boximg" width="100%" height="auto" src="img/61f9b2.jpg" style="top: 0px" alt="61f9b2.jpg" />
				    	<div class="boxtitle">
				    		<a href="#"> Graphic Design </a>
				    	</div>
				    	<div class="overlay">
						    <div class="text">
						    	<a href="#" class="btn btn-sm btn-success">View</a>
						    </div>
						</div>
				    </span>
			  	</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
			  	<div class="thumbnail box-showcase" style="overflow:hidden;">
			  		<span class="komalhover dhiraj">
				    	<img class="boximg" width="100%" height="auto" src="img/a87e69.jpg" style="top: 0px" alt="61f9b2.jpg" />
				    	<div class="boxtitle">
				    		<a href="#"> Logo Design </a>
				    	</div>
				    	<div class="overlay">
						    <div class="text"><a href="#" class="btn btn-sm btn-success">View</a></div>
						</div>
				    </span>
			  	</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
			  	<div class="thumbnail box-showcase" style="overflow:hidden;">
			  		<span class="komalhover dhiraj">
				    	<img class="boximg" width="100%" height="auto" src="img/f0f2ae.jpg" style="top: 0px" alt="61f9b2.jpg" />
				    	<div class="boxtitle">
				    		<a href="#"> Logo Criative </a>
				    	</div>
				    	<div class="overlay">
						    <div class="text"><a href="#" class="btn btn-sm btn-success">View</a></div>
						</div>
				    </span>
			  	</div>
			</div>
			  
			<div class="col-xs-12 col-sm-6 col-md-4">
			  	<div class="thumbnail box-showcase" style="overflow:hidden;">
			  		<span class="komalhover dhiraj">
				    	<img class="boximg" width="100%" height="auto" src="img/f0f2ae.jpg" style="top: 0px" alt="61f9b2.jpg" />
				    	<div class="boxtitle">
				    		<a href="#"> Best Design </a>
				    	</div>
				    	<div class="overlay">
						    <div class="text"><a href="#" class="btn btn-sm btn-success">View</a></div>
						</div>
				    </span>
			  	</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-4">
			  	<div class="thumbnail box-showcase" style="overflow:hidden;">
			  		<span class="komalhover dhiraj">
				    	<img class="boximg" width="100%" height="auto" src="img/f8e626.jpg" style="top: 0px" alt="61f9b2.jpg" />
				    	<div class="boxtitle">
				    		<a href="#"> Wonderfull Logo </a>
				    	</div>
				    	<div class="overlay">
						    <div class="text"><a href="#" class="btn btn-sm btn-success">View</a></div>
						</div>
				    </span>
			  	</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-4">
			  	<div class="thumbnail box-showcase" style="overflow:hidden;">
			  		<span class="komalhover dhiraj">
				    	<img class="boximg" width="100%" height="auto" src="img/a87e69.jpg" style="top: 0px" alt="61f9b2.jpg" />
				    	<div class="boxtitle">
				    		<a href="#"> Simple Logo Design </a>
				    	</div>
				    	<div class="overlay">
						    <div class="text"><a href="#" class="btn btn-sm btn-success">View</a></div>
						</div>
				    </span>
			  	</div>
			</div>
			  
		</div>

	</div>
	<br />
</div>
<div class="col-md-2">
	<div class="panel panel-success">
	  <!-- <div class="panel-heading">
	    <h3 class="panel-title">Benefits</h3>
	  </div> -->
	  <div class="panel-body">
	    <h5>Benefits</h5>
	    <hr />
	    <p style="text-align: left;"><i style="font-size:20px; color:#5cb85c;" class="zmdi zmdi-check-circle"></i> Find experts, you can trust by browsing their samples of showcase or previous work and reading their profile reviews.</p>
	    <p style="text-align: left;"><i style="font-size:20px; color:#5cb85c;" class="zmdi zmdi-check-circle"></i> You’ll receive free bids from talented freelancers immediately.</p>
	    <p style="text-align: left;"><i style="font-size:20px; color:#5cb85c;" class="zmdi zmdi-check-circle"></i> You can diractly contact via live chat with your freelancers to get constant updates on the progress of your work.</p>
	  </div>
	</div>
	<div class="panel panel-success">
	  <!-- <div class="panel-heading">
	    <h3 class="panel-title">Benefits</h3>
	  </div> -->
	  <div class="panel-body">
	    <h5>For freelancers</h5>
	    <hr />
	    <p style="text-align: left;"><i style="font-size:20px; color:#5cb85c;" class="zmdi zmdi-check-circle"></i> Opportunity of bid projects to work.</p>
	    <p style="text-align: left;"><i style="font-size:20px; color:#5cb85c;" class="zmdi zmdi-check-circle"></i> Diractly contact via live chat with your customer to get constant updates on the progress of your work.</p>
	    <p style="text-align: left;"><i style="font-size:20px; color:#5cb85c;" class="zmdi zmdi-check-circle"></i> Showcase your talent to people around the world.</p>
	  </div>
	</div>
</div>
<div>
	<br /><br /><br />
</div>
<?php include('component/footer.php'); ?>
