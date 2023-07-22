<?php 
    class Us extends UserController{
        private $usmodel;
        function __construct()
        {
            $this->usmodel = new UsModel;
        }
        public function showUs($usId){
            $data = $this->usmodel->showUs($usId);
            $this->loadView('master2','us/showus',$data);
        }
    }
?>