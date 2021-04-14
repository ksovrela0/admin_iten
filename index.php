<?php
error_reporting(E_ERROR);
include('db.php');
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}


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
                                group_id,
                                object_id
                        FROM    users
                        WHERE   actived = 1 AND `username` = '$username' AND `password` = '$password'");
        $USERDATA = $db->getResultArray();
        $USERID = $USERDATA['result'][0]['id'];
        $USERGR = $USERDATA['result'][0]['group_id'];
        $USEROBJ = $USERDATA['result'][0]['object_id'];
        if($USERID == ''){
            $authResult = 'NO';
        }
        else{
            $_SESSION['USERID'] = $USERID;
            $_SESSION['GRPID'] = $USERGR;
            $_SESSION['OBJID'] = $USEROBJ;
        }
        
    break;
    case 'sign_out':
        session_destroy();
        unset($_SESSION['USERID']);
        unset($_SESSION['GRPID']);
        unset($_SESSION['OBJID']);
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