<?php
    class ProductModel extends BaseModel{
        protected $table = DB_PREFIX.'product';
        //protected $key = 'productId';
        public function home($limit,$offset){
            // Lấy sản phẩm khuyến mãi, giới hạn sản phẩm, vị trí offset
            $sql = "select * from $this->table where trash=0 and status = 1 and saleprice<>0 limit $offset,$limit";
            $data['products']= $this->queryAll($sql);
            // Chuẩn bị dữ liệu để phân trang
            $sql = "select * from $this->table where trash=0 and status = 1 and saleprice<>0";
            $totalRecords = count($this->queryAll($sql));
            $data['paging'] = new Paging('product/home/',$totalRecords,$limit,$offset);
            return $data;
    }
    public function productByCat($catAlias,$limit,$offset){
        // Nhóm sản phầm có catAlias là $catAlias
        $catModel = new CategoryModel;
        $cat=$catModel->get(['alias'=>$catAlias]);
        $data['cat'] = $cat;
        // Lấy các sản phầm thuộc nhóm có catId là $cat['catId']
        $data['products']=$this->getAllLimit(['trash'=>0,'status'=>1,'catId'=>$cat['catId']],$limit,$offset);
        // Chuẩn bị dữ liệu phân trang
        $totalRecords=count($this->getAll(['trash'=>0,'status'=>1,'catId'=>$cat['catId']]));
        $data['paging'] = new Paging('product/productByCat/'.$catAlias.'/',$totalRecords,$limit,$offset);
        return $data;
    }

    public function productByBrand($brandAlias,$limit,$offset){
        
        $brandModel = new BrandModel;
        $brand=$brandModel->get(['alias'=>$brandAlias]);
        $data['brand'] = $brand;
        // Lấy các sản phầm thuộc nhóm có brandId là $brand['brandId']
        $data['products']=$this->getAllLimit(['trash'=>0,'status'=>1,'brandId'=>$brand['brandId']],$limit,$offset);
        // Chuẩn bị dữ liệu phân trang
        $totalRecords=count($this->getAll(['trash'=>0,'status'=>1,'brandId'=>$brand['brandId']]));
        $data['paging'] = new Paging('product/productByBrand/'.$brandAlias.'/',$totalRecords,$limit,$offset);
        return $data;
    }

    public function productSearch($searchKey,$limit=LIMIT,$offset = 0){
        $sql = "select * from $this->table where status = 1 and trash = 0 and productName like '%$searchKey%' order by productId limit $offset,$limit";
        $data['products']= $this->queryAll($sql);
        // tính tổng số sản phẩm được tìm thấy
        $sql = "select * from $this->table where status = 1 and trash = 0 and productName like '%$searchKey%' order by productId";
         $totalRecords = count($this->queryAll($sql));
         $data['totalRecords'] = $totalRecords;
         // chuẩn bị paging
         $data['paging']=new Paging('product/productSearch/',$totalRecords,$limit,$offset);
         return $data;
    }
    public function productDetail($productAlias){
        //Lấy sản phẩm
        $data['currentProduct']=$this->get(['alias'=>$productAlias]);
        $currentCatId = $data['currentProduct']['catId'];
        //Lấy sản phẩm tương tự
        $data['sameProducts']=$this->getAllLimit(['status'=>1,'trash'=>0,'catId'=>$currentCatId],LIMIT,0);
        return $data;
    }
    public function productByPriceUp($limit,$offset){
        // Lấy sản phẩm theo giá tăng dần, giới hạn sản phẩm, vị trí offset
        $sql = "select * from $this->table where trash=0 and status = 1 ORDER BY $this->table .price ASC  limit $offset,$limit";
        $data['products']= $this->queryAll($sql);
        // Chuẩn bị dữ liệu để phân trang
        $sql = "select * from $this->table where trash=0 and status = 1";
        $totalRecords = count($this->queryAll($sql));
        $data['paging'] = new Paging('product/productByPriceUp/',$totalRecords,$limit,$offset);
        return $data;
    }
    public function productByPriceDown($limit,$offset){
        // Lấy sản phẩm khuyến mãi, giới hạn sản phẩm, vị trí offset
        $sql = "select * from $this->table where trash=0 and status = 1  ORDER BY $this->table .price DESC  limit $offset,$limit";
        $data['products']= $this->queryAll($sql);
        // Chuẩn bị dữ liệu để phân trang
        $sql = "select * from $this->table where trash=0 and status = 1";
        $totalRecords = count($this->queryAll($sql));
        $data['paging'] = new Paging('product/productByPriceDown/',$totalRecords,$limit,$offset);
        return $data;
    }
}
