<?php


namespace App\classes;
use App\classes\Database;
use App\classes\Helper;


class Site
{
    public static function siteIdenity(){
        $sql = "SELECT * FROM `site` ";
        $res = mysqli_query(Database::db(),$sql);
        if($res){
            return $res;
        }else{
            return false;
        }
    }
    public static function displayAllSiteData(){
        $sql = "SELECT * FROM `site` ";
        $res = mysqli_query(Database::db(),$sql);
        if($res){
            return $res;
        }else{
            return false;
        }
    }

    public static function updateSite($data){
        $ob = new Helper();
        $footer = $data['footer-txt'];
        $abt_txt  = $data['abt_txt'];
        $abt_txt = $ob->filter($abt_txt);
        $abt_txt = mysqli_escape_string(Database::db(),$abt_txt);
        if($_FILES['logo']['name'] == NULL){
            $sql = "UPDATE `site` SET `footer_txt`='$footer',`abt_txt`='$abt_txt' WHERE `id` = 1";
            $res = mysqli_query(Database::db(),$sql);
            if($res){
                Session::set('updatesite',"Update Successfully!");
                return;
            }
        }else{
            $image = $_FILES['logo']['name'];
            $img_ext = pathinfo($_FILES['logo']['name'],PATHINFO_EXTENSION);
            $image = 'logo'. '.' .$img_ext;
            $ext =  self::imageChecker($img_ext);
            if($ext == false){
                Session::set('extNotmatch',"Logo should be png format !");
                return;
            }else{
                $sql = "UPDATE `site` SET `footer_txt`='$footer',`abt_txt`='$abt_txt', logo = '$image' WHERE `id` = 1";
                $res = mysqli_query(Database::db(),$sql);
                if($res){
                    $upload = '../Resources/Images/' . $image;
                    move_uploaded_file($_FILES['logo']['tmp_name'],$upload);
                    Session::set('updatesite',"Update Successfully!");
                    return;
                }
            }
        }
    }
    public static function imageChecker($ext){
        if($ext == 'png' || $ext == 'PNG'){
            return true;
        }else{
            return false;
        }
    }
    public  static  function displaySocialLink(){
        $sql = "SELECT * FROM `social_links`";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    public static function updateSocialLink($data){
        $fb = $data['fb'];
        $tw = $data['tw'];
        $lin = $data['lin'];
        $stck = $data['stck'];
        $git = $data['git'];

        $sql = "UPDATE `social_links` SET `facebook` = '$fb',`twitter` = '$tw',`stackover`='$stck',`linkedin` = '$lin',`github` = '$git' WHERE id = 1";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            Session::set('updatelink',"Update Successfully!");
            return ;
        }else{
            Session::set('notupdatelink',"Not Update!");
            return ;
        }
    }
}