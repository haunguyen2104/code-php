<?php
    class Product extends UserController
    {
        private $productmodel;
        function __construct()
        {
            $this->productmodel=new ProductModel;
        }
        public function home($limit=LIMIT+1,$offset=0)
        {
            $data=$this->productmodel->home($limit,$offset);
            $this->loadview('master2','product/home',$data);
        }
        public function productByCat($catAlias,$limit=LIMIT,$offset=0)
        {
            $limit+=2;
            $data=$this->productmodel->productByCat($catAlias,$limit,$offset);
            $this->loadview('master1','product/productbycat',$data);
        }
        public function productDetail($productAlias)
        {
            $data=$this->productmodel->productDetail($productAlias);
            $this->loadview('master1','product/productdetail',$data);
        }
        public function productSearch($limit=LIMIT,$offset=0)
        {
            //Xác định $searchKey
            /*
            if(isset($_SESSION['searchKey'])) 
                $searchKey=$_SESSION['searchKey'];
            else
            {*/
                if(isset($_POST['searchKey']))
                {
                    //$_SESSION['searchKey']=$_POST['searchKey'];
                    $searchKey=$_POST['searchKey'];
                }
                else
                {
                    $searchKey='';
                }
           // }
            //Chuẩn bị dữ liệu
            $data=$this->productmodel->productSearch($searchKey,$limit,$offset);
            $this->loadview('master1','product/productSearch',$data);
            
        }
        public function productByBrand($brandAlias,$limit=LIMIT,$offset=0)
        {
            $limit+=2;
            $data=$this->productmodel->productByBrand($brandAlias,$limit,$offset);
        
            $this->loadview('master1','product/productbybrand',$data);
        }
    }
?>
