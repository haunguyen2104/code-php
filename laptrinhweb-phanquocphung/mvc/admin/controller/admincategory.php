<?php 
    class AdminCategory extends AdminController{
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

        public function CategoryList($limit = LIMIT,$offset = 0){
            //Yêu cầu model thực hiện
            $admincategorymodel = new AdminCategoryModel;
            $data=$admincategorymodel->CategoryList($limit,$offset);
            // Gửi dữ liệu cho view
            $this->loadAdminView('adminmaster1','admincategory/categorylist',$data);   
        }
        public function categoryToggleTrash($catId){
            //Yêu cầu model thực hiện
            $admincategorymodel = new admincategorymodel;
            $data=$admincategorymodel->toggleTrash($catId);
        }
        public function categoryToggleStatus($catId){
            //Yêu cầu model thực hiện
            $admincategorymodel = new admincategorymodel;
            $data=$admincategorymodel->toggleStatus($catId);
        }
        public function UpdateCategory($catId){
            // Xử lý dữ liệu nhận được
            $admincategorymodel = new AdminCategoryModel;
            if(isset($_POST['submit'])){
                $admincategorymodel->doUpdateCategory($catId);
            }
            // Hiển thị form updateCategory
            $catmodel = new AdminCategoryModel;
            $data['cats'] = $catmodel->getAll(['trash'=>0,'status'=>1]);

            $data['oldcat'] = $admincategorymodel->get(['catId'=>$catId]);

            $this->loadAdminView('adminmaster1',"admincategory/updatecategory",$data);
        }

        public function categoryListInTrash($limit = LIMIT,$offset = 0){
            //Yêu cầu model thực hiện
            $admincategorymodel = new AdminCategoryModel;
            $data=$admincategorymodel->categoryListInTrash($limit,$offset);
            // Gửi dữ liệu cho view
            $this->loadAdminView('adminmaster1','admincategory/categorylistintrash',$data);   
        }
        public function categoryDelete($catId){
            // Yêu cầu model thực hiện
            $admincategorymodel = new AdminCategoryModel;
            $admincategorymodel->categoryDelete($catId);
        }
    }
?>