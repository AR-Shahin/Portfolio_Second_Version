<?php


namespace App\classes;

use App\classes\Database;
use App\classes\Helper;
use App\classes\Session;
class Services
{
    public static function countServices(){
        $sql = "SELECT * FROM `services`";
        $res = mysqli_query(Database::db(),$sql);
        if($res){
            $row = mysqli_num_rows($res);
            return $row;
        }else{
            return false;
        }
    }
    public static function addServices($data){
        $status = $data['status'];
        $title = $data['title'];
        $title = Helper::filter($title);
        $title = mysqli_escape_string(Database::db(),$title);
        $icon = $data['icon'];
        $icon = Helper::filter($icon);
        $icon = mysqli_escape_string(Database::db(),$icon);
        $des = $data['description'];
        $des = Helper::filter($des);
        $des = mysqli_escape_string(Database::db(),$des);
        if(empty($title)){
            Session::set('emptyTitle',"Title field required!");
            return;
        }
        if(empty($icon)){
            Session::set('emptyIcon',"Icon field required!");
            return;
        }
        if(empty($des)){
            Session::set('emptyDes',"Des field required!");
            return;
        }
        $sql = "INSERT INTO `services`(`title`, `icon`, `description`, `status`) VALUES ('$title','$icon','$des','$status')";
        $res = mysqli_query(Database::db(),$sql);
        if($res){
            Session::set('successInsert',"Services Inserted Successfully!");
            return;
        }else{
            Session::set('failInsert',"Services Not Inserted!");
            return;
        }
    }

    public static function displayAllServices(){
        $sql = "SELECT * FROM `services` ORDER BY id DESC";
        $res = mysqli_query(Database::db(),$sql);
        if($res){
            return $res;
        }else{
            return false;
        }
    }
    public static function displayAllActiveServices(){
        $sql = "SELECT * FROM `services` WHERE status = 1 ORDER BY id DESC";
        $res = mysqli_query(Database::db(),$sql);
        if($res){
            return $res;
        }else{
            return false;
        }
    }
    public static function inactiveService($id){
        $sql = "UPDATE `services` SET `status` = '0' WHERE `services`.`id` = $id";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public static function activeService($id){
        $sql = "UPDATE `services` SET `status` = '1' WHERE `services`.`id` = $id";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public static function deleteService($id){
        $sql = "DELETE FROM `services` WHERE `id` = '$id'";
        $res = mysqli_query(Database::db(),$sql);
        if($res){
            Session::set('deleteService' ,"Successfully delete!");
            return true;
        }else{
            return false;
        }
    }
    public static function updateService($data){
        $title = $data['title'];
        $title = Helper::filter($title);
        $title = mysqli_escape_string(Database::db(),$title);
        $icon = $data['icon'];
        $icon = Helper::filter($icon);
        $icon = mysqli_escape_string(Database::db(),$icon);
        $des = $data['description'];
        $des = Helper::filter($des);
        $des = mysqli_escape_string(Database::db(),$des);
        $id = $data['id'];
        $sql = "UPDATE `services` SET `title`= '$title' , `icon`= '$icon' ,`description`='$des'  WHERE `id` = '$id'";
        $res = mysqli_query(Database::db(),$sql);
        if($res){
            Session::set('updateService' ,"Successfully Update!");
            return true;
        }else{
            return false;
        }
    }
}