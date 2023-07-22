<?php
class Auth extends Controller{
    public function adminLogin()
    {
        //Xu ly du lieu gui toi
        $authmodel=new AuthModel;         
        if($authmodel->adminLogin())
        {
            header("location:".BASE_URL."adminproduct/productlist/11/0");
        }
        else $this->loadView('master3','auth/adminlogin',[]);
    }
    public function adminLogout()
    {
        if(isset($_SESSION['username']))
        {
            unset($_SESSION['username']);
            unset($_SESSION['level']);
            header('Location:'.BASE_URL.'auth/adminlogin');
        }
    }
}
?>