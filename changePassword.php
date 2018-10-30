<?php

include( 'config.php' );

$template = new Template(TEMPLATE_ROOT . 'index.php');

$template->set('page_title', 'Home Page');

checkUserPermissions();

ob_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    $hashToStoreInDb = password_hash($password, PASSWORD_BCRYPT);
    $newPassword = $hashToStoreInDb;

    $sql = get_sql('changePassword');
    $params = array(
        'userID' => $_POST['userID'],
        'password' => $newPassword
    );
    $database->executeQuery($sql, $params);
    header("location: home.php");
    die();
}
?>

<div class="text-center" style="padding:200px;padding-bottom:500px;">
    <form method="post" class="form loginBox">
        <div class="form-group">
            <h1>Change Password?</h1>
            <input class="form-control" type="password" name="password" style="margin-bottom:20px;" placeholder="Enter new password...">
            <input type="hidden" name="userID" value="<?php echo $_SESSION['user']->userID ?>">
            <input class="form-control btn btn-primary" type="submit" name="submit" value="Submit Password">
        </div>
    </form>
<div>
    
<?php 
$content = ob_get_clean();
$template->set('content', $content);

echo $template->fetch();
?>