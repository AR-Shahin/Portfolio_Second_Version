<?php


namespace App\classes;


class Database
{
    public static function db(){
        $link = mysqli_connect('localhost:3307','root','','portfolio');
        return $link;
    }
    public static function test(){
        echo 'test';
    }

}