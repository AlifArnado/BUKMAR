<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>BUKMAR</title>
   <link rel="icon" href="<?php echo base_url("image/icon.jpg"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("node_modules/bootstrap/dist/css/bootstrap.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("node_modules/material/dist/css/material.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("node_modules/material/dist/css/ripples.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("node_modules/css/style_catalog.css"); ?>">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
   <script type="text/javascript" src="<?php echo base_url("node_modules/bootstrap/js/dropdown.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("node_modules/material/dist/js/ripples.min.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("node_modules/material/dist/js/material.min.js"); ?>"></script>
  <script type="text/javascript">
      $.material.init();
   </script>
</head>

<style type="text/css" media="screen">
	.navbar {
		height: 10px;
	}

	.nav li > a {
		margin-top: -8px;
	}

	.hover-link a {
		color: black;
	}

</style>

<body>
	<!-- <div class="container-fluid"> -->
		<nav class="navbar navbar-info navbar-fixed-top" role="navigation" style="border-bottom:6px #8fc800 solid; height: 14px auto;">
			<div class="container-fluid">
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#">Selamat Datang Warung Sembako Online</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="hover-link"><a href="#"> Login</a></li>
	               <li class="hover-link"><a href="#"> Daftar Member</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	<!-- </div> -->
	<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                </li>
                <li>
                  <div class="box-profil">
                     <img src="<?php echo base_url("image/icon.jpg"); ?>" alt="image not found" width="200" height="150">
                  </div>
                </li>
                <li>
                	<img src="<?php echo base_url("image/banner.jpeg"); ?>" alt="image not found" width="200" height="250">
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

         <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xs-8 col-sm-8 col-md-12">

							<?php for ($i = 1; $i <= 12; $i++): ?>

                  	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                  		<div class="panel panel-default">
                  			<div class="panel-body">
                  				<img src="<?php echo base_url("image/masako.jpg"); ?>" class="img-responsive" alt="Image" height="140" width="180">
                  				<p align="center">Bumbu Masako 1 Pack</p>
                  				<p align="center" style="font-family: sans-serif; font-weight: bold;">Rp. 5.000.00,-</p>
                  			</div>
                  		</div>
                  	</div>

                  	<?php endfor ?>

                  </div> <!-- end col content -->
               </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
   </div> <!-- end wrapper menu left -->
</body>
</html>
