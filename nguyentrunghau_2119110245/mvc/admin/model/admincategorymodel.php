<?php
    class AdminCategoryModel extends CategoryModel
    {
        protected $field=['catName','alias','parentId','trash','status'];
        protected $key='catId';
        public function doAddCategory(){
            $newcat['catName'] = $_POST['inputCatName'];
            $newcat['alias'] = $_POST['inputAlias'];
            $newcat['parentId'] = $_POST['inputParentId'];
            $newcat['status'] = $_POST['inputStatus'];
            $newcat['trash'] = 0;
            // Tao chuoi alias
            $helper = new Helper;
            if($newcat['alias']=='')
                $newcat['alias']=$helper->to_alias($newcat['catName']);
            $_SESSION['msg']='';
            if($this->insert($newcat))
                        $_SESSION['msg'] .="Thêm nhóm sản phẩm thành công";
                    else 
                        $_SESSION['msg'] .= "Thêm nhóm sản phẩm thất bại";

        }
        public function categoryDelete($id)
        {
            if($this->delete($id))
            $_SESSION['msg']="Thực hiện thành công";
            else
            $_SESSION['msg']="Thực hiện thất bại";
            header("location:".BASE_URL."admincategory/categoryList/".LIMIT."/0");
        } 
        public function categoryListInTrash($limit=LIMIT,$offset=0)
        {
            //Lấy danh sách sản phẩm
            $data['categorys']=$this->getAllLimit(['trash'=>1],$limit,$offset);
            //Tính tổng số sản phầm
            $totalRecords=count($this->getAll(['trash'=>1]));
            //Chuẩn bị paging
            $data['paging']=new Paging('admincategory/categoryListInTrash/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function toggleTrash($catId)
        {
           if($this->toggle('trash',$catId))
           $_SESSION['msg']="Thực hiện thành công";
           else
           $_SESSION['msg']="Thực hiện thất bại";
            header("location:".BASE_URL."admincategory/categoryList/".LIMIT."/0");
        }
        public function toggleStatus($catId)
        {
           if($this->toggle('status',$catId))
           $_SESSION['msg']="Thực hiện thành công";
           else
           $_SESSION['msg']="Thực hiện thất bại";
           header("location:".BASE_URL."admincategory/categoryList/".LIMIT."/0");
        }

        public function categoryList($limit=LIMIT,$offset=0)
        {
            //Lấy danh sách sản phẩm
            $data['cats']=$this->getAllLimit(['trash'=>0],$limit,$offset);
            //Tính tổng số sản phầm
            $totalRecords=count($this->getAll(['trash'=>0]));
            //Chuẩn bị paging
            $data['paging']=new Paging('admincategory/categoryList/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function doUpdateCategory($catId)
        {
            //Lấy dữ liệu sản phẩm mới
            $newcat['catName']=$_POST['inputCatName'];
            $newcat['alias']=$_POST['inputAlias'];
            $newcat['trash']=$_POST['inputTrash'];
            $newcat['status']=$_POST['inputStatus'];

            //Tạo chuỗi alias
            $helper= new Helper;
            if($newcat['alias']=='')
            $newcat['alias']=$helper->to_alias($newcat['catName']);

             //Kiểm lỗi
             $_SESSION['msg']='';
             
            if($this->insert($newcat))
            $_SESSION['msg']='Cập nhật nhóm sản phẩm thành công!';
            else
            {
                $_SESSION['msg']='Cập nhật nhóm sản phẩm thất bại!';
                header('Location:'.BASE_URL."admincategory/categorylist");
                exit;
            }
             

            
        }
    }
?>