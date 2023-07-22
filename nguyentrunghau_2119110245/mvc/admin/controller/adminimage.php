<?php 
    class AdminImage extends AdminController{
        public function AddImage(){
            // Xử lý dữ liệu nhận được
            if(isset($_POST['submit'])){
                $adminimagemodel = new AdminImageModel;
                $adminimagemodel->doAddImage();
            }
            // Hiển thị form addCategory
            $imagemodel = new AdminImageModel;
            $data['images'] = $imagemodel->getAll(['trash'=>0,'status'=>1]);
            $this->loadAdminView("adminmaster1","adminimage/addimage",$data);
        }
         
        public function imageList($limit=LIMIT,$offset=0)
        {
            //Yêu cầu model thực hiện
            $adminimagemodel= new AdminImageModel;
            $data=$adminimagemodel->imageList($limit,$offset);
            //Gửi dữ liệu cho view\
            $this->loadAdminView('adminmaster1','adminimage/imageList',$data);
        }
        public function UpdateImage($id)
        {
            //Xử lý dữ liệu nhận được
            $adminimagemodel= new AdminImageModel;
            if(isset($_POST['submit']))
            {
                $adminimagemodel->doUpdateImage($id);
            }

            // Hiển thị form updateCategory
            $imagemodel = new AdminImageModel;
            $data['images'] = $imagemodel->getAll(['trash'=>0,'status'=>1]);
            $data['oldimage']=$adminimagemodel->get(['id'=>$id]);
            $this->loadAdminView("adminmaster1","adminimage/updateimage",$data);
        }
        public function imageDelete($id)
        {
            //Yeu cau model thuc hien
            $adminimagemodel= new AdminImageModel;
            $data=$adminimagemodel->imageDelete($id);
        }

    }
?>
