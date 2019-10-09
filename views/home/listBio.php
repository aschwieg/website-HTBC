<div class="container"style="margin-bottom:20px">
	<?php foreach($users as $user) : ?>
		<div class="row" style="padding-top:10px;padding-bottom:10px">
			<div class="col">
				<div class="card mb-3 <?php if($user['disciplineLevel'] > 1) : ?> border-danger <?php endif; ?>">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="images/<?php echo $user['first_name'] ?>.jpg" class="card-img" alt="<?php echo $user['first_name'] ?> ">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<?php if($_SESSION['user']->userID != $user['userID'] && $_SESSION['user']->authorityLevel > 0) : ?>
									<div class="float-right">
										<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
										<a href="home.php?action=get&item=bio&id=<?php echo $user['user_informationID'] ?>">EDIT</a>
									</div>
									<br>
								<?php endif; ?>
								<h4 class="card-title"><?php echo ucwords($user['first_name'] . " " . $user['last_name']); ?> (<i><?php echo ucwords($user['role']); ?></i>)</h4>
								<p class="card-text text-muted">"<?php echo $user['quote'] ?>"</p>
								<p class="card-text">
									<?php echo $user['bio'] ?>
									<br/>
									<?php if($_SESSION['user']->authorityLevel > 0) : ?>
										<?php if($user['disciplineLevel'] < 3) : ?>
											<a class="float-right text-danger" href="updateDiscipline.php?id=<?php echo $user['userID'] ?>&action=increase"><small>Increase Discipline level</small></a>
										<?php endif; ?>
										<?php if($user['disciplineLevel'] > 0) : ?>
											<a class="float-left text-primary" href="updateDiscipline.php?id=<?php echo $user['userID'] ?>&action=decrease"><small>Decrease Discipline level</small></a>
										<?php endif; ?>
									<?php endif; ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>