<?php
class LoginController extends BaseController{

    public function __construct()
    {
        $this->loadModel('LoginModel');
        $this->LoginModel = new LoginModel();
    }

    public function loginuser(){
        session_start();
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
            $user = $this -> LoginModel -> getUser($username,$password);
            if(!empty($user)){
                header("location: Views/student/home.php");
            }else{
                
                header("Location: Views/student/login.php");
                $_SESSION['message']="Nhập lại tài khoản và mật khẩu!";

            }
            if (isset($_POST["remember"])) {
                    setcookie ("username",$_POST["username"],time()+ 3600);
                    setcookie ("password",$_POST["password"],time()+ 3600);

                }else{
                    setcookie ("username",'');
                    setcookie ("password",'');
            }

    }

}
?>