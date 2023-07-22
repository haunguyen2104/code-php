<?php 
    class Auth extends Controller{
        public function adminLogin(){
            // Xử lý dữ liệu gọi tới
            if(isset($_POST['login'])){
                $authmodel = new AuthModel;
                $authmodel->adminLogin();
            }
            $this->loadView('master4','auth/login',[]);
        }
        public function adminLogout(){
            if(isset($_SESSION['username'])){
                unset($_SESSION['username']);
                unset($_SESSION['level']);
                header('Location: '.BASE_URL."auth/adminlogin");
                exit;
            }
        }
    }
?>