<?php
include('db.php');
$act = $_REQUEST['act'];
GLOBAL $db;
GLOBAL $authResult;
$db = new dbClass();
switch ($act){
    case 'auth':
        $username = $_REQUEST['username'];
        $password = md5($_REQUEST['password']);
        $db->setQuery(" SELECT  id
                        FROM    users
                        WHERE   actived = 1 AND `username` = '$username' AND `password` = '$password'");
        $USERID = $db->getResultArray();
        $USERID = $USERID['result'][0]['id'];
        if($USERID == ''){
            $authResult = 'NO';
        }
        else{
            $_SESSION['USERID'] = $USERID;
        }
        
    break;
}
if(isset($_SESSION['USERID'])){
    include('main.php');
}
else{
    include('login.php');
}
?>