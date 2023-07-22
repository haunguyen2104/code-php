<?php
class AdminProduct extends AdminController{
    public function productList($limit=LIMIT,$offset=0)
    {
        //Yeu cau model thuc hien
        $adminprodutmodel= new AdminProductModel;
        $data=$adminprodutmodel->productList($limit,$offset);
        //Gui du lieu cho view
        $this->loadAdminView('/adminmaster1','adminproduct/productList',$data);
    }
    public function productListInTrash($limit=LIMIT,$offset=0)
    {
        //Yeu cau model thuc hien
        $adminprodutmodel= new AdminProductModel;
        $data=$adminprodutmodel->productListInTrash($limit,$offset);
        //Gui du lieu cho view
        $this->loadAdminView('adminmaster1','adminproduct/productListintrash',$data);
    }
    public function productToggleTrash($productId)
    {
            //Yeu cau model thuc hien
        $adminprodutmodel= new AdminProductModel;
        $data=$adminprodutmodel->productToggleTrash($productId);
    }
    public function productToggleStatus($productId)
    {
           //Yeu cau model thuc hien
           $adminprodutmodel= new AdminProductModel;
           $data=$adminprodutmodel->productToggleStatus($productId);
    }
    public function addproduct()
    {
        //Xu li du lieu nhan duoc
        if(isset($_POST['submit']))
        {
            $adminprodutmodel=new AdminProductModel;
            $adminprodutmodel->doAddProduct();
        }
        //Hien thi form add
        $catmodel= new AdminCategoryModel;
        $data['cats']=$catmodel->getAll(['trash'=>0,'status'=>1]);
        $brandmodel= new AdminBrandModel;
        $data['brands']=$brandmodel->getAll(['trash'=>0,'status'=>1]);
        $this->loadAdminView('adminmaster1','adminproduct/addproduct',$data);
    }
    public function UpdateProduct($productId)
    {
        //Xu li du lieu nhan duoc
        $adminprodutmodel=new AdminProductModel;
        if(isset($_POST['submit']))
        {
            $adminprodutmodel->doAddProduct();
        }
        
        //Hien thi form update
        $catmodel= new AdminCategoryModel;
        $data['cats']=$catmodel->getAll(['trash'=>0,'status'=>1]);
        $brandmodel= new AdminBrandModel;
        $data['brands']=$brandmodel->getAll(['trash'=>0,'status'=>1]);
        $data['oldproduct']=$adminprodutmodel->get(['productId'=>$productId]);
        $this->loadAdminView('adminmaster1','adminproduct/updateproduct',$data);
    }
    public function productDelete($productId)
    {
           //Yeu cau model thuc hien
           $adminprodutmodel= new AdminProductModel;
           $data=$adminprodutmodel->productDelete($productId);
    }

}
?>