<div class="container"style="margin-bottom:20px">
	<div class="row" style="padding-top:10px">
		<div class="col">
			<?php if($_SESSION['user']->authorityLevel > 0) : ?><a href="home.php?action=add&item=posts" class="btn btn-primary btn-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add Post</a><?php endif;?>
		</div>	
	</div>
	<?php foreach($posts as $post) : ?>
		<div class="row" style="padding-top:10px;padding-bottom:30px">
			<div class="col">
				<div class="card" style="background-color:#e6e6e6">
					<div class="card-body">
						<h3 class="card-title">
							<?php echo $post['postTitle'] ?>
						</h3>
						<hr/>
						<p class="card-text">
							<?php echo $post['postText'] ?>
						</p>
					</div>	
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>