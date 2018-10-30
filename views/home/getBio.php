<div class="container"style="margin-bottom:20px">
    <div class="row" style="padding-top:10px;padding-bottom:30px">
        <div class="col"></div>
        <div class="col-lg-10">
        <form method="post">
            <div class="card">
                <div class="card-img-top" style="background-color:#343a40;">
                    <div class="row align-items-center">
                        <img class="col" style="max-height:200px;max-width:200px;" src="images/<?php echo $user['first_name'] ?>.jpg" >
                        <div class="col form-group" style="margin-right:20px;">
                            <label class="text-light" for="userQuote">Quote</label>
                            <input type="text" id="userQuote" class="form-control form-control-lg"  name="quote" value="<?php echo $user['quote'] ?>">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group float-right" style="margin-right:20px;">
                        <input class="btn" type="submit" name="submit" value="Submit Changes">
                    </div>
                    <h4 class="card-title"><?php echo ucwords($user['first_name'] . " " . $user['last_name']); ?></h4>
                    <h5 class="card-subtitle mb-2">ROLE: </h5>
                    <input type="text" id="userRole" class="form-control" name="role" value="<?php echo ucwords($user['role']); ?>">
                    <div style="margin-right:20px;margin-top:20px;">
                        <h5 for="userBio">Bio</h5>
                        <p id="userBIo" style="min-height:370px;"><?php echo $user['bio'] ?></p>
                    </div>
                </div>	
            </div>
        <input type="hidden" value="<?php echo $_GET['id'] ?>" name="userID">
        </form>
        </div>
        <div class="col"></div>
    </div>
</div>