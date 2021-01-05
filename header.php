
<?php
// here we can use (Function) instead of (If) , U will find the 2 methods below
function setActive($curname){
    global $pagename;
    if ( isset($pagename) && $pagename == $curname  ) {
        echo "class='activeee'";
    }
}

?>

<!DOCTYPE html>
    <html id="html">
        <head>
            <meta charset="utf-8"  name=description content="sign in form" >

            
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
			<link rel="stylesheet" href="css/bootstrap.css" />
			<link rel="stylesheet" href="css/font-awesome.min.css" />
			<link rel="stylesheet" href="css/mybotstrap.css" />
			<link rel="stylesheet" href="css/css.css" /> 
			<script src="js/jquery-3.5.1.min.js"></script>
			<script src="js/plugins.js"></script>
			<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
			<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
			<script src="js/bootstrap.min.js"></script>

			
			<!-- <link rel="stylesheet" href="css/animate.css"> -->


			<title><?php if(isset($pagename)){echo $pagename;} ?></title>
			<link rel="stylesheet" href="header.css" />
		</head>
		
        <body class=" <?php if ($pagename == 'Contact us')
            { echo 'bodyyy'; } ?>" >
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
				  <a class="navbar-brand" href="#"> <img src="img/logo2.png" class="img-fluid" style="max-width: 40px; max-height:40px;"> <span class="logo-name">Best</span> Trip</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">



					  <li class="nav-item <?php if ($pagename == 'Home')
         				   { echo 'activeee'; } ?> " >
						<a class="nav-link  <?php if ($pagename == 'Home')
         				   { echo 'activee'; } ?>" href="index.php" >Home <span class="sr-only">(current)</span></a>
				  </li>


					  <li class="nav-item <?php if ($pagename == 'Services')
        				    { echo 'activeee'; } ?> " >
							<a class="nav-link <?php if ($pagename == 'Services')
        				    { echo 'activee'; } ?>  " href="services.php" >Services</a>
					  </li>


					  

					  

					  <li class="nav-item <?php if ($pagename == 'Contact us')
          				  { echo 'activeee'; } ?>">
					  <a class="nav-link <?php if ($pagename == 'Contact us')
          				  { echo 'activee'; } ?> " href="contact.php"  >Contact us</a>
					  </li>

					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  About Us
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="aboutus.php">About Us</a>
						  <a class="dropdown-item" href="values-goals.php">Our Values</a>
						  <!-- <div class="dropdown-divider"></div> -->
						  <a class="dropdown-item" href="goals.php">Our Goals</a>
						</div>
					  </li>
					  
					 
					 
					</ul>
					  <!--
					<form class="form-inline my-2 my-lg-0">
					  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
-->
				  </div>
				</nav>
					