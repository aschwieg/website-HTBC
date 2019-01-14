<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>HTBC</title>

	<link rel="icon" href="images/logo.png">

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<!-- Site JS -->
	<script src="<?php echo TEMPLATE_BASE ?>js/site.js"></script>
	
	
	<!-- Site CSS -->
	<link rel="stylesheet" href="<?php echo TEMPLATE_BASE ?>css/style.css">
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	</head>

	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col">					
						<a href="home.php" ><h1><img src="images/logo.png" height="50px" width="50px;">The Hot Tub Book Club</h1></a>
					</div>
					<div class="col text-right">
						<?php if(!isset($_SESSION['user'])) : ?>	
							<a href="login.php" style="text-decoration:underline;float:right">Login</a>
						<?php else : ?>
							Welcome, <?php echo  ucwords($_SESSION['user']->first_name . " " . $_SESSION['user']->last_name) ?>
							<br>
							<a href="changePassword.php" style="text-decoration:underline;">Change Password?</a> or
							<a href="logout.php" style="text-decoration:underline;">Logout</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<?php if(isset($_SESSION['user'])) : ?>	
				<a href="home.php?action=list&item=bio">Member Bios</a> 
				<a href="home.php?action=list&item=enemies">Public Enemies</a> 
				<a href="home.php?action=list&item=allies">Allies</a> 
				<a href="home.php?action=list&item=posts">Posts</a>
				<a href="home.php?action=view&item=history">History</a>
			<?php endif; ?>
		</nav>
		<main class="<?php if($_GET['item'] == "enemies") : ?>grey<?php endif;?>">
			<?php echo $content; ?>
		</main>
		<!--<script src="js/scripts.js"></script>-->
		<footer>
			<p>Copyright &copy; 2018 Hot Tub Book Club Organization</p>
		</footer>
	</body>
</html>