<div class="container"style="margin-bottom:20px">
	<?php foreach($users as $user) : ?>
		<div class="row justify-content-center" style="padding-top:10px;padding-bottom:30px">
			<div class="col-md">
				<div class="card bioCard" style="background-color:#e6e6e6">
					<div class="card-img-top" style="background-color:#343a40;">
						<div class="row align-items-center">
							<img class="bioImage" src="images/<?php echo $user['first_name'] ?>.jpg" >
							<p class="text-light bioQuote <?php if($user['quote'] == "CENSORED") {echo "text-danger";}?>">"<?php echo $user['quote'] ?>"</p>
						</div>
					</div>
					<div class="card-body">
						<h4 class="card-title"><?php echo ucwords($user['first_name'] . " " . $user['last_name']); ?></h4>
						<h6 class="card-subtitle mb-2 text-muted">ROLE: <?php echo ucwords($user['role']); ?></h6>
						<p class="card-text"><?php echo $user['bio'] ?></p>
						<?php if($_SESSION['user']->userID != $user['userID']) : ?>
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							<a href="home.php?action=get&item=bio&id=<?php echo $user['userID'] ?>">EDIT</a>
						<?php endif; ?>
					</div>	
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>