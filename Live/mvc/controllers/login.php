<?php
class Login extends Controller{ 
    public function dangxuat()
    {
        session_destroy();
        $this->views("loginView");
        exit();
    }

    public function loginSubmit()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->models("loginModel");
        if($user->checkUser($username,$password))
        {
            header("Location: /live/home"); 
            // echo "Đăng nhập thành công";
        }
        else
        {   
            $errFlag= "true";
            $this->views("loginView",["errFlag"=>"true"]);
            
        }
    }

    public function default(){
        $this->views("loginView");
    }
}
?>