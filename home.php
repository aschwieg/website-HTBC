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
                $sql = get_sql('getMembers');
                $users = $database->query($sql);
            }
            if ($action == 'get') {
                $sql = get_sql('getMember');
                $params = array(
                    'user_informationID' => $_GET['id']
                );
                $users = $database->query($sql, $params);
                $user = $users[0];
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $sql = get_sql('editMember');
                    $params = array(
                        'user_informationID' => $_POST['user_informationID'],
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
        case 'posts':
            if ($action == 'list') {
                $sql = get_sql('getPosts');
                $posts = $database->query($sql);
            }
            else if ($action == 'add') {
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $sql = get_sql('addPost');
                    $params = array(
                        'userID' => $_POST['userID'],
                        'title' => $_POST['title'],
                        'text' => $_POST['text'],
                        'time' => date("Y-m-d H:i:s")
                    );
                    $database->executeQuery($sql, $params);
                    header("location: home.php?action=list&item=posts");
                    die();
                }
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