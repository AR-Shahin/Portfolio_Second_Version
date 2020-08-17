<?php
require_once '../vendor/autoload.php';

use App\classes\Session;
Session::init();


//DELETE SERVICE
if(isset($_GET['manageservice'])){
    $id = $_GET['id'];
    $dlt = new \App\classes\Services();
    $dltTxt = $dlt->deleteService($id);
    header('location:manageservice.php');
}

//DELETE POST
if(isset($_GET['managepost'])){
    $id = $_GET['id'];
    $dlt = new \App\classes\Post();
    $dltTxt = $dlt->deletePost($id);
    Session::set('dltTxt',"$dltTxt");
    header('location:managepost.php');
}
//DELETE user
if(isset($_GET['manageuser'])){
    $id = $_GET['id'];
    $dlt = new \App\classes\UserLogin();
    $dltTxt = $dlt->deleteUser($id);
    Session::set('dltTxt',"$dltTxt");
    header('location:manageuser.php');
}
//DELETE TRASH EMAIL
if(isset($_GET['trashpage'])){
    $id = $_GET['id'];
    $dlt = new \App\classes\Mail();
    $dltTxt = $dlt->deleteMail($id);
    header('location:inbox.php');
}
