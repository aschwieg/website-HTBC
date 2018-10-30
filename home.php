<?php

include( 'config.php' );

$template = new Template(TEMPLATE_ROOT . 'index.php');

$template->set('page_title', 'Home Page');

checkUserPermissions();

ob_start();

if ( isset($_GET['action']) && isset($_GET['item']) ) {
    $action = get('action');
    $item = get('item');

    // DYNAMIC VIEW INCLUSION //
    switch($item) {
        case 'bio':
            if ($action == 'list') {
                $sql = get_sql('getUsers');
                $users = $database->query($sql);
            }
            if ($action == 'get') {
                $sql = get_sql('getUser');
                $params = array(
                    'userID' => $_GET['id']
                );
                $users = $database->query($sql, $params);
                $user = $users[0];
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $sql = get_sql('editUser');
                    $params = array(
                        'userID' => $_POST['userID'],
                        'quote' => $_POST['quote'],
                        'role' => $_POST['role']
                    );
                    $database->executeQuery($sql, $params);
                    header("location: home.php?action=list&item=bio");
                    die();
                }
            }
            break;
        case 'history':
            if ($action == 'view') { 
                
            }
            break;
        case 'allies':
            if ($action == 'list') { 
                $sql = get_sql('getAllies');
                $allies = $database->query($sql);
            }
            break;
        case 'enemies':
            if ($action == 'list') {
                $sql = get_sql('getEnemies');
                $enemies = $database->query($sql);
            }
            break;
        default:   
    }  
    $myItem = ucfirst($item);
    include("views/home/{$action}{$item}.php"); 
}  
else {
    include('views/home/panel.php');
}

$content = ob_get_clean();
$template->set('content', $content);

echo $template->fetch();