<?php

class BaseModel extends Database
{
    public function __construct()
    {
        $this->connect =$this->connect();
    }

    public function query($sql)
    {
        return $this->connect()->query($sql);
    }

}