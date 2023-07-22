<?php
class AdminController extends Controller{
    function __Construct()
    {
        if(!isset($_SESSION['username'])||($_SESSION['level']!=0))
        {
            header('Location:'.BASE_URL.'auth/adminlogin');
        }
    }
    protected function loadAdminView($master, $view, $data){
        require_once PATH_TO_ADMINVIEW.strtolower($master).'.php';
    }
}
?>