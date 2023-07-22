<?php
    class AuthModel extends BaseModel
    {
      protected $table=DB_PREFIX.'admin';
      public function adminLogin()
      {
          //hung du lieu
        if(isset($_POST['login']))
        {
          $username=$_POST['inputUsername'];
          $password=md5(md5($_POST['inputPassword']));
          //lay user tu bang admin
          $u=$this->get(['username'=>$username,'trash'=>0]);
          //Kiem tra pas
          var_dump($u);
          var_dump($password);
          if(isset($u)&&($u['pass']==$password))
            {
                $_SESSION['username']=$username;
                $_SESSION['level']=$u['level'];
                return 1;
            }
          else 
            {
                $_SESSION['msg']="Đăng nhập thất bại. Vui lòng đăng nhập lại để thực hiện chức năng.";
            }
        }
          return 0;
      }
    }
?>