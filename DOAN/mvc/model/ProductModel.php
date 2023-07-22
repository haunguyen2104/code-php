<?php
    class ProductModel extends BaseModel
    {
        protected $table=DB_PREFIX.'product';
        public function home($limit,$offset)
        {
            //Lấy sản phẩm khuyến mãi, limit sản phầm vị trí offset
            $sql="select * from ".$this->table." where trash='0' and status='1' and salePrice<>'' limit $offset, $limit";
            $data['products']=$this->queryAll($sql);
            //Chuẩn bị dữ liệu để phân trang
            $sql="select * from ".$this->table." where trash='0' and status='1' and salePrice<>'' ";
            $totalRecords=count($this->queryAll($sql));
            $data['paging']=new Paging('product/home/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function productByCat($catAlias, $limit, $offset)
        {
            //Nhóm sản phẩm có catAlias là $catAlias
            $catmodel=new CategoryModel;
            $cat=$catmodel->get(['alias'=>$catAlias]);
            $data['cat']=$cat;
            //Lấy các sản phẩm thuộc nhóm có catId là $cat['catId']
            $data['products']=$this->getAllLimit(['trash'=>0,'status'=>1,'catId'=>$cat['catId']],$limit,$offset);
            //Chuẩn bị dữ liệu để phân trang
            $totalRecords=count($this->getAll(['trash'=>0,'status'=>1,'catId'=>$cat['catId']]));
            $data['paging']=new Paging('product/productByCat/'.$catAlias.'/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function productByBrand($brandAlias, $limit, $offset)
        {
            //Nhóm sản phẩm có catAlias là $catAlias
            $brandmodel=new BrandModel;
            $brand=$brandmodel->get(['alias'=>$brandAlias]);
            $data['brand']=$brand;
            //Lấy các sản phẩm thuộc nhóm có brangId là $brand['brandId']
            $data['products']=$this->getAllLimit(['trash'=>0,'status'=>1,'brandId'=>$brand['brandId']],$limit,$offset);
            //Chuẩn bị dữ liệu để phân trang
            $totalRecords=count($this->getAll(['trash'=>0,'status'=>1,'brandId'=>$brand['brandId']]));
            $data['paging']=new Paging('product/productByBrand/'.$brandAlias.'/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function productSearch($searchKey,$limit,$offset)
        {
            //Lấy ra các sản phẩm thỏa yêu cầu tìm kiếm
            $sql="select * from $this->table where trash='0' and status='1' and productName like '%$searchKey%' limit $offset, $limit";
            //Thực thi câu lệnh để lấy kết quả
            $data['products']=$this->queryAll($sql);
            $sql="select * from $this->table where trash='0' and status='1' and productName like '%$searchKey%'";
            $totalRecords=count($this->queryAll($sql));
            $data['totalRecords']=$totalRecords;
            $data['paging']=new Paging('product/productSearch/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function productDetail($productAlias)
        {
            //Lấy 1 sản phẩm có alias như vậy
            $data['currentproduct']=$this->get(['alias'=>$productAlias]);
            //Lấy các sản phẩm cùng nhóm
            $data['sameProducts']=$this->getAll(['trash'=>0,'status'=>1,'catId'=>$data['currentproduct']['catId']]); 
            return $data;
        }
        
    }
?>