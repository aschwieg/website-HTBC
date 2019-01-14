<div class="container"style="margin-bottom:20px">
    <div class="row" style="padding-top:100px;padding-bottom:150px">
        <div class="col"></div>
        <div class="col-lg-8">
        <form method="post">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Title: <input type="text" name="title"></h4>
                    <div style="margin-right:20px;margin-top:20px;">
                        <h5>Text</h5>
                        <textarea name="text" rows="12"></textarea>
                    </div>
                </div>
                <div class="form-group float-right" style="margin-right:20px;">
                    <input class="btn" type="submit" name="submit" value="submit">
                </div>	
            </div>
        <input type="hidden" value="<?php echo $_SESSION['user']->userID ?>" name="userID">
        </form>
        </div>
        <div class="col"></div>
    </div>
</div>