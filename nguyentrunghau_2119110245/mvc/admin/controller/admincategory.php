<?php 
    class AdminCategory extends AdminController
    {
        public function AddCategory(){
            // Xử lý dữ liệu nhận được
            if(isset($_POST['submit'])){
                $admincategorymodel = new AdminCategoryModel;
                $admincategorymodel->doAddCategory();
            }
            // Hiển thị form addCategory
            $catmodel = new AdminCategoryModel;
            $data['cats'] = $catmodel->getAll(['trash'=>0,'status'=>1]);
            $this->loadAdminView("adminmaster1","admincategory/addcategory",$data);
        } 
        public function categoryList($limit=LIMIT,$offset=0)
        {
            //Yêu cầu model thực hiện
            $admincategorymodel= new AdminCategoryModel;
            $data=$admincategorymodel->categoryList($limit,$offset);
            //Gửi dữ liệu cho view\
            $this->loadAdminView('adminmaster1','admincategory/categoryList',$data);
        }
        public function categoryListInTrash($limit=LIMIT,$offset=0)
        {
            //Yêu cầu model thực hiện
            $admincategorymodel= new AdminCatrgoryModel;
            $data=$admincategorymodel->categoryListInTrash($limit,$offset);
            //Gửi dữ liệu cho view\
            $this->loadAdminView('adminmaster1','admincategory/categoryListInTrash',$data);
        }
        public function categoryToggleTrash($catId)
        {
            //Yêu cầu model thực hiện
            $admincategorymodel= new AdminCatrgoryModel;
            $data=$admincategorymodel->toggleTrash($catId);
        }
        public function UpdateCategory($catId)
        {
            //Xử lý dữ liệu nhận được
            $admincategorymodel= new AdminCategoryModel;
            if(isset($_POST['submit']))
            {
                $admincategorymodel->doUpdateCategory($catId);
            }

            // Hiển thị form updateCategory
            $catmodel = new AdminCategoryModel;
            $data['cats'] = $catmodel->getAll(['trash'=>0,'status'=>1]);
            $data['oldcat']=$admincategorymodel->get(['catId'=>$catId]);
            $this->loadAdminView("adminmaster1","admincategory/updatecategory",$data);
        }
        public function categoryDelete($catId)
        {
            //Yeu cau model thuc hien
            $adminprodutmodel= new AdminCategoryModel;
            $data=$adminprodutmodel->categoryDelete($catId);
        }

    }
?>