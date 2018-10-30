<?php

Class User {
    
    function __construct ($userID = 0) {

    }
    
    static function authenticate ($username, $password) {
        global $database;
       
        $sql = get_sql('authenticateUser');
        $params = array('username' => $username );
        $users = $database->query($sql, $params);
        
        if(!empty($users)) {
            $existingHashFromDB = $users[0]['password'];
            $isPasswordCorrect = password_verify($password, $existingHashFromDB);
        
            if($isPasswordCorrect) {
                $sql = get_sql('getUserInfo');
                $params = array('username' => "$username");
                $users = $database->queryObject('User', $sql, $params);
                $_SESSION['user'] = $users[0];
                return TRUE;
            }
            //password_verify returned false
            else {
                return FALSE;
            }
        }
        //Database returned no rows (users)
        else {
            return FALSE;
        }
    }
    
    static function authenticatePlainText ($username, $password) {
        global $database;
        $sql = get_sql('authenticateUserPlainText');
        $params = array('username' => $username, 'password' => $password);
        $users = $database->query($sql, $params);
        if(!empty($users)) {
            $_SESSION['user'] = $users[0];
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    
    static function createNewUser ($username, $password,$firstName,$lastName,$bio) {
        global $database;
        // Hash a new password for storing in the database.
        // The function automatically generates a cryptographically safe salt.
        $hashToStoreInDB = password_hash($password, PASSWORD_BCRYPT);
        
        $sql = get_sql('addNewUser');
        $params = array(
            'username' => $username, 
            'password' => $hashToStoreInDB,
            'firstname' => $firstName,
            'lastname' => $lastName,
            'bio' => $bio
        );
        $database->executeQuery($sql, $params);
    }
    
    static function removeUser ($id) {
        global $database;
        $sql = get_sql('removeUser');
        $params = array('id' => $id);
        $database->executeQuery($sql, $params);
    }
}
