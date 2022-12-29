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
        $password = $_POST['password'] ?? '';
        if (isset($_POST["remember"])) {
            setcookie ("username",$_POST["username"],time()+ 3600);
            setcookie ("password",password_hash($_POST["password"],PASSWORD_BCRYPT),time()+ 3600);

        }else{
            setcookie ("username",'');
            setcookie ("password",'');
    }
        if(!$username || !$password) {
            return $this->view('student.login');
        }

        $user = $this -> LoginModel -> getUser($username,$password);

        if(!empty($user)){
            $_SESSION['user'] = $user;
            return $this->view('student.home');
        }else{
            $_SESSION['message']="Nhập lại tài khoản và mật khẩu!";
            return $this->view('student.login');
        }

        
        
    }

    public function home() {
        return $this->view('student.home');
    }

    public function logout() {

        if (isset($_COOKIE["username"]) AND isset($_COOKIE["password"])){
            setcookie("username", '', time() - (3600));
            setcookie("password", '', time() - (3600));
        }
        unset($_SESSION['user']);
        return $this->view('student.login');
    }

}
?>