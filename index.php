<?php
include('db.php');
$act = $_REQUEST['act'];
$page = $_REQUEST['page'];
GLOBAL $db;
GLOBAL $authResult;
$db = new dbClass();
switch ($act){
    case 'auth':
        $username = $_REQUEST['username'];
        $password = md5($_REQUEST['password']);
        $db->setQuery(" SELECT  id,
                                group_id
                        FROM    users
                        WHERE   actived = 1 AND `username` = '$username' AND `password` = '$password'");
        $USERDATA = $db->getResultArray();
        $USERID = $USERDATA['result'][0]['id'];
        $USERGR = $USERDATA['result'][0]['group_id'];
        if($USERID == ''){
            $authResult = 'NO';
        }
        else{
            $_SESSION['USERID'] = $USERID;
            $_SESSION['GRPID'] = $USERGR;
        }
        
    break;
    case 'sign_out':
        session_destroy();
        unset($_SESSION['USERID']);
    break;
}

if(isset($_SESSION['USERID'])){
    if($page == ''){
        include('main.php');
    }
    else{
        include($page.'.php');
    }
}
else{
    include('login.php');
}
?>