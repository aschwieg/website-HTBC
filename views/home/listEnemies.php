<div class="container"style="margin-bottom:20px;z-index:1;">
	<?php foreach($enemies as $enemy) : ?>
		<div class="row" style="padding-top:10px;padding-bottom:30px;">
			<div class="col"></div>
			<div class="col-md-9">
				<div class="card"style="z-index:1;background-color:#e6e6e6">
					<div class="card-img-top" style="background-color:#343a40;">
						<img class="img-fluid card-img-top" src="images/<?php echo $enemy['first_name'] ?>.jpg" style="border:5px solid red;max-height:600px;">
					</div>
					<div class="card-body">
						<h4 class="card-title text-center">RANK: <?php echo ucwords($enemy['rank']); ?></h4>
						<h6 class="card-subtitle mb-2"><?php echo ucwords($enemy['first_name'] . " " . $enemy['last_name']); ?></h6>
						<p class="card-text"><?php echo $enemy['bio'] ?></p>
					</div>	
				</div>
			</div>
			<div class="col"></div>
		</div>
	<?php endforeach; ?>
</div>
<div style="background-image:url('images/animated-fire-gif-transparent-background-11.gif');height:350px;position:fixed;bottom:0;background-repeat: repeat-x;">
	<div style="height:400px;width:10000px">
	</div>
</div>