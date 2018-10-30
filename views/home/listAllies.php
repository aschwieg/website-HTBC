<div class="container"style="margin-bottom:20px;z-index:1;">
    <div class="row" style="padding-top:10px;padding-bottom:30px;">
	    <?php foreach($allies as $ally) : ?>
			<div class="col-md-4">
				<div class="card"style="z-index:1;margin-bottom:30px;background-color:#e6e6e6">
					<div class="card-img-top" style="background-color:#343a40;">
						<img class="img-fluid card-img-top" src="images/<?php echo $ally['first_name'] . $ally['allyID'] ?>.jpg" style="max-height:600px;">
					</div>
					<div class="card-body">
						<h4 class="card-title text-center"><?php echo ucwords($ally['first_name'] . " " . $ally['last_name']); ?></h4>
						<p class="card-text" style="min-height:100px;"><?php echo $ally['bio'] ?></p>
					</div>	
				</div>
			</div>
        <?php endforeach; ?>
    </div>
</div>