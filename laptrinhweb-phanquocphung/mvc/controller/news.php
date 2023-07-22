<?php 
    class News extends UserController{
        private $newsmodel;
        function __construct()
        {
            $this->newsmodel = new NewsModel;
        }
        public function newsByBrand($brandAlias,$limit = LIMIT,$offset = 0){
            $data=$this->newsmodel->newsByBrand($brandAlias,$limit,$offset);
            $this->loadView('master1','news/newsbybrand',$data);
        }
        public function newsByDetail($newsAlias){
            $data=$this->newsmodel->newsByDetail($newsAlias);
            $this->loadView('master1','news/newsbydetail',$data);
        }
    }
?>  