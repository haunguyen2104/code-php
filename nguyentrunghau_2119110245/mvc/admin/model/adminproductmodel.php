<?php
    class AdminProductModel extends AdminModel
    {
        protected $table =DB_PREFIX.'product';
        protected $field=['productName','alias','catId','brandId','detail','price','salePrice','Image','trash','status'];
        protected $key='productId';
        //Các function cần thiết
        public function productList($limit=LIMIT,$offset=0)
        {
            //Lấy danh sách sản phẩm
            $data['products']=$this->getAllLimit(['trash'=>0],$limit,$offset);
            //Tính tổng số sản phầm
            $totalRecords=count($this->getAll(['trash'=>0]));
            //Chuẩn bị paging
            $data['paging']=new Paging('adminproduct/productList/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function productListInTrash($limit=LIMIT,$offset=0)
        {
            //Lấy danh sách sản phẩm
            $data['products']=$this->getAllLimit(['trash'=>1],$limit,$offset);
            //Tính tổng số sản phầm
            $totalRecords=count($this->getAll(['trash'=>1]));
            //Chuẩn bị paging
            $data['paging']=new Paging('adminproduct/productListInTrash/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function toggleTrash($productId)
        {
            var_dump($productId);
           if($this->toggle('trash',$productId))
           $_SESSION['msg']="Thực hiện thành công";
           else
           $_SESSION['msg']="Thực hiện thất bại";
            header("location:".BASE_URL."adminproduct/productList/".LIMIT."/0");
        }
        public function toggleStatus($productId)
        {
           if($this->toggle('status',$productId))
           $_SESSION['msg']="Thực hiện thành công";
           else
           $_SESSION['msg']="Thực hiện thất bại";
           header("location:".BASE_URL."adminproduct/productList/".LIMIT."/0");
        }
        public function productDelete($productId)
        {
            if($this->delete($productId))
            $_SESSION['msg']="Thực hiện thành công";
            else
            $_SESSION['msg']="Thực hiện thất bại";
            header("location:".BASE_URL."adminproduct/productList/".LIMIT."/0");
        } 
        public function doAddProduct()
        {
            //Lấy dữ liệu sản phẩm mới
            $newpro['productName']=$_POST['inputProductName'];
            $newpro['alias']=$_POST['inputAlias'];
            $newpro['catId']=$_POST['inputCatId'];
            $newpro['brandId']=$_POST['inputBrandId'];
            $newpro['detail']=$_POST['inputDetail'];            
            $newpro['price']=$_POST['inputPrice'];
            $newpro['salePrice']=$_POST['inputSalePrice'];
            $newpro['Image']=basename($_FILES['inputFileUpload']['name']);
            $newpro['trash']=0;
            $newpro['status']=$_POST['inputStatus'];

            //Tạo chuỗi alias
            $helper= new Helper;
            if($newpro['alias']=='')
            $newpro['alias']=$helper->to_alias($newpro['productName']);

            //Kiểm lỗi
            $_SESSION['msg']='';
            if ($newpro['price']<$newpro['salePrice']) 
            {  
                $_SESSION['msg']='Giá sale phải nhỏ hơn giá bán!';
            }
            else
            {
                $uploadSuccess=$helper->doUpload('inputFileUpload');
                if ($uploadSuccess) 
                {
                   if($this->insert($newpro))
                   $_SESSION['msg']='Thêm sản phẩm thành công!';
                   else
                   $_SESSION['msg']='Thêm sản phẩm thất bại!';
                }
            }
        }
        public function doUpdateProduct($productId)
        {
            //Lấy dữ liệu sản phẩm mới
            $newpro['productName']=$_POST['inputProductName'];
            $newpro['alias']=$_POST['inputAlias'];
            $newpro['catId']=$_POST['inputCatId'];
            $newpro['brandId']=$_POST['inputBrandId'];
            $newpro['trash']=$_POST['inputTrash'];
            $newpro['status']=$_POST['inputStatus'];
            $newpro['detail']=$_POST['inputDetail'];            
            $newpro['price']=$_POST['inputPrice'];
            $newpro['salePrice']=$_POST['inputSalePrice'];

            //Tạo chuỗi alias
            $helper= new Helper;
            if($newpro['alias']=='')
            $newpro['alias']=$helper->to_alias($newpro['productName']);

             //Kiểm lỗi
             $_SESSION['msg']='';
             if ($newpro['price']<$newpro['salePrice']) 
             {  
                 $_SESSION['msg']='Giá sale phải nhỏ hơn giá bán!';
             }
             else
             {
                 $uploadSuccess=$helper->doUpload('inputFileUpload');
                 if ($uploadSuccess) 
                 {
                    if($this->insert($newpro))
                    $_SESSION['msg']='Cập nhật sản phẩm thành công!';
                    else
                    $_SESSION['msg']='Cập nhật sản phẩm thất bại!';
                    header('Location:'.BASE_URL."adminproduct/productlist");
                    exit;
                 }
             }
        }

    }
?>