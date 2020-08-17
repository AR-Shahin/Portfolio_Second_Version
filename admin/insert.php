<?php
require_once '../vendor/autoload.php';
use App\classes\Session;
use App\classes\Services;
Session::init();
//INSERT SERVICES
if(isset($_POST['service-btn']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $ob = new Services();
    $rtn_txt = $ob->addServices($_POST);
    header('location:addservice.php');
}


//reply INSERT
if(isset($_POST['reply-btn'])){
    $userOb = new \App\classes\Mail();
    $rtn_txt =  $userOb->saveReply($_POST);
    header('location:inbox.php');
}


?>