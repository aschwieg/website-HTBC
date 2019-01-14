<div class="container"style="margin-bottom:20px">
	<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
	<a href="home.php?action=add&item=posts">Add Post</a>
	<?php foreach($posts as $post) : ?>
		<div class="row justify-content-center" style="padding-top:10px;padding-bottom:30px">
			<div class="col-md">
				<div class="card" style="background-color:#e6e6e6">
					<div class="card-body">
						<h4 class="card-title"><?php echo $post['postTitle'] ?></h4>
						<p class="card-text"><?php echo $post['postText'] ?></p>
					</div>	
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>