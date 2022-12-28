<?php
session_start();

class StudentController extends BaseController
{

    public function __construct()
    {
        $this->loadModel('StudentModel');
        $this->StudentModel = new StudentModel();
    }

    public function index(){
        
        if (empty($_SESSION["user"])) {
            return $this->header("location: /QLSV/admin/index.php?Controller=login&action=index");
        }
        
        $infoStudents = $this->StudentModel->getAllStudent();

        return $this->view('student.index', ['infoStudents'=> $infoStudents]);
    }

    public function create(){
        if (empty($_SESSION["user"])) {
            return $this->header("location: /QLSV/admin/index.php?Controller=login&action=index");
        }
        return $this->view('student.create');
    }
    
    public function store(){
       
        if(empty($_POST['name']) || empty($_POST['age']) || empty($_POST['address']))
        {   
            return $this->view('student.create', ['error'=> "Không được để trống các ô nhập liệu",
            
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'address' => $_POST['address']]); 
        }
        if(strlen($_POST['name'])>20)
        {
            return $this->view('student.create', ['error'=> "Không được nhập quá 20 kí tự name",
            
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'address' => $_POST['address']]); 
        }
        
        if(!is_numeric($_POST['age']) || $_POST['age']<0 ||$_POST['age'] > 100)
        {
            return $this->view('student.create', ['error'=> "Vui lòng nhập lại age",
           
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'address' => $_POST['address']]); 
        }
        if(strlen($_POST['address'])>20)
        {
            return $this->view('student.create', ['error'=> "Không được nhập quá 20 kí tự address",
         
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'address' => $_POST['address']]); 
        }
        
        else
        {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $rs = $this->StudentModel->store($name, $age, $address);

        return header('location: ?Controller=student&action=index');
        }
    }

    public function edit(){
        $id = $_GET['id'];
        $student = $this->StudentModel->getById($id);
        if (empty($_SESSION["user"])) {
            return $this->header("location: /QLSV/admin/index.php?Controller=login&action=index");
        }
        return $this->view('student.update', ['student' => $student]);
    }

    public function update(){

        if(empty($_POST['name']) || empty($_POST['age']) || empty($_POST['address']))
        {   
            return $this->view('student.update', ['error'=> "Không được để trống các ô nhập liệu",
            'id'=>$_GET['id'],
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'address' => $_POST['address']]); 
        }
        if(strlen($_POST['name'])>20)
        {
            return $this->view('student.update', ['error'=> "Không được nhập quá 20 kí tự name",
            'id'=>$_GET['id'],
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'address' => $_POST['address']]); 
        }
        
        if(!is_numeric($_POST['age']) || $_POST['age']<0 ||$_POST['age'] > 100)
        {
            return $this->view('student.update', ['error'=> "Vui lòng nhập lại age",
            'id'=>$_GET['id'],
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'address' => $_POST['address']]); 
        }
        if(strlen($_POST['address'])>20)
        {
            return $this->view('student.update', ['error'=> "Không được nhập quá 20 kí tự address",
            'id'=>$_GET['id'],
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'address' => $_POST['address']]); 
        }
        
        
        

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