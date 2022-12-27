<?php

class LoginModel extends BaseModel
{

        public function getUser($username,$password)
        {

            $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
            $result=$this->query($sql);
            $user = $result->fetch();
            return $user;

        }
}

