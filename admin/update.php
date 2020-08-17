<?php
require_once '../vendor/autoload.php';
use App\classes\Session;

Session::init();

//SITE UPDATE
if(isset($_POST['site-btn'])){

    $upSite = new \App\classes\Site();
    $result = $upSite->updateSite($_POST);
    header('location:logo.php');
}


//SOCIAL LINK UPDATE
if(isset($_POST['link-btn'])){

    $upSite = new \App\classes\Site();
    $result = $upSite->updateSocialLink($_POST);
    header('location:social.php');
}

//SERVICE UPDATE
if(isset($_POST['update-service-btn'])){
    $upUser = new \App\classes\Services();
    $result = $upUser->updateService($_POST);
    header('location:manageservice.php');
}

?>