<div class="container"style="margin-bottom:20px">
    <div class="row" style="padding-top:100px;padding-bottom:150px">
        <div class="col"></div>
        <div class="col-lg-8">
        <form method="post">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style="width:100%">Title: <input type="text" name="title"></h4>
                    <div style="margin-right:20px;margin-top:20px;">
                        <h5>Text</h5>
                        <textarea name="text" rows="12" style="width:100%"></textarea>
                    </div>
                    <input class="btn btn-secondary btn-lg" type="submit" name="Submit" value="Submit" style="margin-top:20px;">
                </div>    
            </div>
            <input type="hidden" value="<?php echo $_SESSION['user']->userID ?>" name="userID">
        </form>
        </div>
        <div class="col"></div>
    </div>
</div>