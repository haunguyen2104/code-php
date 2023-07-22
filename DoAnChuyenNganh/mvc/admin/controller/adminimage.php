<?php 
    class AdminImage extends AdminController{
        // Funtion add Image
        public function addImage(){
            // Xử lý dữ liệu nhận được
            if(isset($_POST['submit'])){
                $adminimagemodel = new AdminImageModel;
                $adminimagemodel->doAddImage();
            }
            // Hiện thị form
            $imagemodel = new AdminImageModel;
            $data['imgs'] = $imagemodel->getAll(['trash'=>0,'status'=>1]);
            $this->loadAdminView("adminmaster1","adminimage/addimage",$data);
        }
        public function imageList($limit = LIMIT,$offset = 0){
            // Yêu cầu model thực hiện
            $adminimagemodel = new AdminImageModel;
            $data=$adminimagemodel->imageList($limit,$offset);
            // Gửi dữ liệu cho view
            $this->loadAdminView('adminmaster1','adminimage/imagelist',$data);
        }
        public function imageToggleStatus($imageId){
             // Yêu cầu model thực hiện
             $adminimagemodel = new AdminImageModel;
             $data = $adminimagemodel->toggleStatus($imageId);
        }
        public function imageToggleTrash($imageId){
            // Yêu cầu model thực hiện
            $adminimagemodel = new AdminImageModel;
            $data=$adminimagemodel->toggleTrash($imageId);
        }
        public function UpdateImage($imageId){
            // Xử lý dữ liệu nhận được
            $adminimagemodel = new AdminImageModel;
            if(isset($_POST['submit'])){
                $adminimagemodel->doUpdateImage($imageId);
            }
            // Hiển thị form updateImage
            $imgmodel = new AdminImageModel;
            $data['imgs'] = $imgmodel->getAll(['trash'=>0,'status'=>1]);

            $data['oldimg'] = $adminimagemodel->get(['id'=>$imageId]);

            $this->loadAdminView('adminmaster1',"adminImage/updateImage",$data);
        }
        public function imageListInTrash($limit=LIMIT,$offset=0){
            $adminimagemodel = new AdminImageModel;
            $data=$adminimagemodel->imageListInTrash($limit,$offset);
            // Gửi dữ liệu cho view
            $this->loadAdminView('adminmaster1','adminImage/imageListInTrash',$data);
        }
        public function imageDelete($imageId){
            // Yêu cầu model thực hiện
            $adminimagemodel = new AdminImageModel;
            $adminimagemodel->imageDelete($imageId);
        }
    }
?>