<?php
class ProductModel extends BaseModel{
    protected $table=DB_PREFIX.'product';
    public function home($limit,$offset)
    {
        $sql="select * from ".$this->table." where trash='0' and status='1' and salePrice <>'' limit $offset, $limit";
        $data['products']=$this->queryAll($sql);
        $sql="select * from ".$this->table." where trash='0' and status='1' and salePrice <>'' ";
        $totalRecords=count($this->queryAll($sql));
        $data['paging']=new Paging('product/home/', $totalRecords, $limit, $offset);
        return $data;
    }
    public function productByCat($catAlias, $limit, $offset)
    {
        //Nhom sp co catAlias la $catAlias
        $catmodel=new CategoryModel;
        $cat=$catmodel->get(['alias'=>$catAlias]);
        $data['cat']=$cat;
        //Lay sp thuoc nhom co catId la $cat['catId']
        $data['products']=$this->getAllLimit(['trash'=>0,'status'=>1,'catId'=>$cat['catId']], $limit, $offset);
        //Chuan bi du lieu phan trang
        $totalRecords=count($this->getAll(['trash'=>0,'status'=>1,'catId'=>$cat['catId']]));
        $data['paging']= new Paging('product/productByCat/'.$catAlias.'/', $totalRecords, $limit, $offset);
        return $data;
    }
    public function productByBrand($brandAlias, $limit, $offset)
    {
        //Nhom sp co brandAlias la $brandAlias
        $brandmodel=new BrandModel;
        $brand=$brandmodel->get(['alias'=>$brandAlias]);
        $data['brand']=$brand;
        //Lay sp thuoc nhom co brandId la $brand['brandId']
        $data['products']=$this->getAllLimit(['trash'=>0,'status'=>1,'brandId'=>$brand['brandId']], $limit, $offset);
        //Chuan bi du lieu phan trang
        $totalRecords=count($this->getAll(['trash'=>0,'status'=>1,'brandId'=>$brand['brandId']]));
        $data['paging']= new Paging('product/productByBrand/'.$brandAlias.'/', $totalRecords, $limit, $offset);
        return $data;
    }
    public function productDetail($productAlias)
    {
        //Lay 1 sp co alias nhu vay
        $data['currentproduct']=$this->get(['alias'=>$productAlias]);
        //Lay cac sp cung nhom
        $data['sameProducts']=$this->getAll(['trash'=>0, 'status'=>1, 'catId'=>$data['currentproduct']['catId']]);
        return $data;
    }
    public function productSearch($searchKey, $limit,$offset)
    {
        //Lay cac sp thoa yeu cau tim kiem, $limit, $offset
        $sql="select * from ".$this->table." where trash='0' and status='1' and productName like '%$searchKey%' limit $offset, $limit";
        //Thuc thi cau lenh
        $data['products']=$this->queryAll($sql);
        $sql="select * from ".$this->table." where trash='0' and status='1' and productName like '%$searchKey%'";
        $totalRecords=count($this->queryAll($sql));
        $data['totalRecords']=$totalRecords;
        $data['paging']=new Paging('product/productSearch/', $totalRecords, $limit, $offset);
        return $data;
    }
}
?>