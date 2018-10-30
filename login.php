<?php

include( 'config.php' );

$template = new Template(TEMPLATE_ROOT . 'index.php');

$template->set('page_title', 'Home Page');

ob_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $authResult = User::authenticate($_POST['username'], $_POST['password']);
    if ($authResult) {
        header("location:home.php");
    }
}
?>

<div class="text-center" style="padding:200px;padding-bottom:500px;">
    <form method="post" class="form loginBox">
        <div class="form-group">
            <h1 style="margin-bottom:10px;">Login</h1>
            <input class="form-control" type="text" placeholder="Username" name="username" required style="color:black;margin-bottom:10px;" autofocus>
            <input class="form-control" type="password" placeholder="Password" name="password" required style="color:black;margin-bottom:10px;">
            <button type="submit" class="btn btn-primary btn-lg" id="loginButton">Login</button>
        </div>
    </form>
<div>
    
<?php 
$content = ob_get_clean();
$template->set('content', $content);

echo $template->fetch();
?>