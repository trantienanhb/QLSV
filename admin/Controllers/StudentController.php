<?php

class StudentController extends BaseController
{

    public function __construct()
    {
        $this->loadModel('StudentModel');
        $this->StudentModel = new StudentModel();
    }

    public function index(){
        $infoStudents = $this->StudentModel->getAllStudent();
        return $this->view('student.index', ['infoStudents'=> $infoStudents]);
    }

    public function create(){
        return $this->view('student.create');
    }
    
    public function store(){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $rs = $this->StudentModel->store($name, $age, $address);

        return header('location: ?Controller=student&action=index');
    }

    public function edit(){
        $id = $_GET['id'];
        $student = $this->StudentModel->getById($id);
        return $this->view('student.update', ['student' => $student]);
    }

    public function update(){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $rs = $this->StudentModel->update($id, $name, $age, $address);

        if($rs){
            return header('location: ?Controller=student&action=index');
        }
        else{
            echo 'Update failed';
        }
    }

    public function delete(){
        $id = $_GET['id'];

        $this->StudentModel->destroy($id);

        return header('location: ?Controller=student&action=index');
    }

}