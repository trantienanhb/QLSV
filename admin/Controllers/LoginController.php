<?php
session_start();

class LoginController extends BaseController{

    public function __construct()
    {
        $this->loadModel('LoginModel');
        $this->LoginModel = new LoginModel();
    }

    public function index() {
        return $this->view('student.login');
    }

    public function loginuser(){
        $username = $_POST['username'] ?? '';
        $password = $_POST['password']?? '';
        if(!$username || !$password) {
            return $this->view('student.login');
        }

        $user = $this -> LoginModel -> getUser($username,$password);

        if(!empty($user)){
            $_SESSION['user'] = $user;
            return $this->view('student.home');
        }else{
            return $this->view('student.login');
        }

        
    }

    public function logout() {
        
        unset($_SESSION['user']);
        return $this->view('student.login');
    }

}
?>