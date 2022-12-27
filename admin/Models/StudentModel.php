<?php

class StudentModel extends BaseModel
{
    public function getAllStudent(){
        $sql = 'SELECT * FROM SinhVien';
        $query = $this->query($sql);
        $array = [];
        while($row = $query->fetch()){
            array_push($array, $row);
        }
        return $array;
    }

    public function getById($id){
        $sql = "SELECT * FROM SinhVien where id = '$id'";
        $query = $this->query($sql);
        $array = [];
        while($row = $query->fetch()){
            array_push($array, $row);
        }
        return $array;
    }

    public function store($name, $age, $address){
        $sql = "INSERT INTO SinhVien(name, age, address)
                VALUES ('$name', '$age', '$address')";
        $query = $this->query($sql);

        if($query){
            return true;
        }
        return false;
    }

    public function update($id, $name, $age, $address){
        $sql = "UPDATE SinhVien set name = '$name', age = '$age', address = '$address' where id = '$id'";
        $query = $this->query($sql);
        if($query){
            return true;
        }
        return false;
    }

    public function destroy($id){
        $sql = "DELETE from SinhVien where id = '$id'";
        $this->query($sql);
    }
}