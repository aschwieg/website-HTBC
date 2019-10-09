<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>HTBC</title>
	<link rel="icon" href="images/logo.png">

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
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
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#404040">
  			<a class="navbar-brand text-white" href="home.php">
			  	<img src="images/logo.png" height="30" width="30;" class="d-inline-block align-top" alt="">
			  	The Hot Tub Book Club
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php if(isset($_SESSION['user'])) : ?>
					<ul class="navbar-nav mr-auto ">	
						<li class="nav-item active">
							<a class="nav-link text-white" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="home.php?action=list&item=bio">Member Bios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="home.php?action=list&item=enemies">Public Enemies</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="home.php?action=list&item=posts">Posts</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="home.php?action=view&item=history">History</a>
						</li>
					</ul>
					<span class="navbar-text text-white">
						Welcome <?php echo ucwords($_SESSION['user']->username) ?>!
					</span>			
					<span class="navbar-text">
						<a class="nav-link text-white" href="changePassword.php"><u>Change Password</u></a>
					</span>
					<span class="navbar-text">
						<a class="nav-link text-white" href="logout.php"><u>Logout</u></a>
					</span>
				<?php else : ?>
					<span class="navbar-text">
						<a class="nav-link text-white" href="login.php"><u>Login</u></a>
					</span>
				<?php endif; ?>
			</div>
		</nav>
		<main class="<?php if($_GET['item'] == "enemies") : ?>grey<?php endif;?>">
			<?php echo $content; ?>
		</main>
		<footer>
			<p>Copyright &copy; 2019 Hot Tub Book Club Organization</p>
		</footer>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>