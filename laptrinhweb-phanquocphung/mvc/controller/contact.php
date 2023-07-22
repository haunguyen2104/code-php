<?php 
    class Contact extends UserController{
        public function newContact(){
            if(isset($_POST['submit'])){
                $contactmodel = new ContactModel;
                $contactmodel->doContact();
            }
            $this->loadView('master2','contact/showContact',[]);
        }
    }
?>