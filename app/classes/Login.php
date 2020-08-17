<?php

namespace App\classes;
use App\classes\Database;
use App\classes\Session;


class Login
{
    public static function loginCheck($data){
        $user = $data['username'];
        $pass = $data['password'];
        if (!$user){
            Session::set('emptyUser',"Username Required");
            return ;
        }
        if(!$pass){
            Session::set('emptyPass',"Password Required");
            return ;
        }
        $sql = "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'";
        $res = mysqli_query(Database::db(),$sql);
        if($res){
            $row = mysqli_num_rows($res);
            if($row == 1){
                Session::set('loginSuccess',true);
                Session::set('userName',"$user");
                header('location: index.php');
            }else{
                Session::set('invaliduser',"Invalid Username or Password");
                return false;
            }
        }else{
            return ;
        }
    }
}