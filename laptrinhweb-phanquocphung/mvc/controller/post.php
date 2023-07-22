<?php 
    class Post extends UserController{
        private $postmodel;
        function __construct()
        {
            $this->postmodel = new PostModel;
        }
        public function home($limit=LIMIT,$offset=0){
            $data = $this->postmodel->home($limit,$offset);
            $this->loadView('master2','post/home',$data);
        }
    }
?>