<?php
    class Auth extends Controller
    {
        public function adminLogin()
        {
            //Xử lý dữ liệu gửi tới
            if(isset($_POST['login']))
            {
                $authmodel= new AuthModel;
                $authmodel->adminLogin();
            }
            $this->loadview('master3','auth/adminLogin',[]);
        }
        public function adminlogout()
        {
            if(isset($_SESSION['username']))
            {
                unset ($_SESSION['username']);
                unset ($_SESSION['level']);
                header('location:'.BASE_URL.'auth/adminlogin');
                exit;
            }
        }
    }
?>
