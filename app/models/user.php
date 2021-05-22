<?php

namespace APP\models;

use APP\core\model;

class user {

    public function GetAllUsers()
    {
       $data= model::db()->run("select * FROM user")->fetchAll();
       return $data;
    }

    public function GetUser($email,$password){
        $userdata= model::db()->run("select * FROM user where email = '$email' && password = '$password'")->fetchAll();
        return $userdata;
    }

    public function InsertUser($username,$email,$password){

      


        $insertData = model::db()->insert('user', ['name' => $username, 'email' => $email,'password' => $password]);
        return $insertData;



    }
}





?>