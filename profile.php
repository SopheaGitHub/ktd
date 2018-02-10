<?php include('component/header.php'); ?>
<?php include('component/header_profile_menu.php'); ?>
<?php include('component/left.php'); ?>
<div class="col-md-8">
	<div class="profile clearfix">                         
        <div class="image">
            <img src="img/download.jpg" style="width:100%;" class="img-cover">
        </div>                            
        <div class="user clearfix">
          <div class="avatar">
              <img src="img/user-453533-fdadfd.png" class="img-thumbnail img-profile">
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <h2>Martin maoth</h2>
              <div class="info">
                <p><span class="title"><i class="fa fa-book" aria-hidden="true"></i> Skills :</span>  Photoshop, Illustrator, PHP, Javascript</p>                                    
                <p><span class="title"><i class="zmdi zmdi-phone-forwarded"></i> Contact:</span> 010922393 | Email : </p>
              	<p>hi i am a  professional graphic designer.i work many online offline project i work since 2 years in  graphic design .i like to show my creativity   i give 100% satisfaction to  client for verified  i am professional graphic designer.
thank you.</p>
              </div>
            </div>
          </div>                                                                                             
        </div>                       
        <!-- <div class="info">
            <p><span class="glyphicon glyphicon-globe"></span> <span class="title">Address:</span>  St. Revutskogo, Kiev, Ukraine</p>                                    
            <p><span class="glyphicon glyphicon-gift"></span> <span class="title">Date of birth:</span> 14.02.1989</p>                                
        </div>  -->                             
    </div>

    <nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <!-- <a class="navbar-brand" href="#">Profile</a> -->
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="active li-file-menu" id="overview"><a href="#" class="profile-menu" data-menu="overview">Overview</a></li>
	        <li class="li-file-menu" id="project"><a href="#" class="profile-menu" data-menu="project">Project</a></li>
	        <li class="li-file-menu" id="bid"><a href="#" class="profile-menu" data-menu="bid">Bid</a></li>
	        <li class="li-file-menu" id="showcase"><a href="#" class="profile-menu" data-menu="showcase">Showcase</a></li>
	        <!-- <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li> -->
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div style="border: 1px solid #D5D5D5; background:#fff; min-height: 100px;">
		<div id="load-image" class="text-center">
        	<?php include_once('img/loading.php'); ?>
      	</div>
      	<div id="load-page" style="padding: 20px;">
        	<?php include_once('component/overview.php'); ?>
      	</div>
	</div>
	<br />
</div>
<?php include('component/right.php'); ?>
<?php include('component/chat.php'); ?>
<?php include('component/footer.php'); ?>
