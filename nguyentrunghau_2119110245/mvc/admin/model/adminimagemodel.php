<?php
    class AdminImageModel extends ImageModel
    {
        protected $field=['title','image','imageName','position','trash','status'];
        protected $key='id';
        public function doAddImage()
        { 
            
            $newimage['title'] = $_POST['inputtitle'];
            $newimage['image'] = $_POST['inputimage'];
            $newimage['imageName'] = $_POST['inputimageName'];
            $newimage['position'] = $_POST['inputposition'];
            $newimage['status'] = $_POST['inputStatus'];
            $newimage['trash'] = 0;
            
            $_SESSION['msg']='';
            if($this->insert($newimage))
                        $_SESSION['msg'] .="Thêm hình ảnh thành công";
                    else
                        $_SESSION['msg'] .= "Thêm hình ảnh thất bại";

        }
        public function imageList($limit=LIMIT,$offset=0)
        {
            //Lấy danh sách sản phẩm
            $data['images']=$this->getAllLimit(['trash'=>0],$limit,$offset);
            //Tính tổng số sản phầm
            $totalRecords=count($this->getAll(['trash'=>0]));
            //Chuẩn bị paging
            $data['paging']=new Paging('adminimage/imageList/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function imageListInTrash($limit=LIMIT,$offset=0)
        {
            //Lấy danh sách sản phẩm
            $data['images']=$this->getAllLimit(['trash'=>1],$limit,$offset);
            //Tính tổng số sản phầm
            $totalRecords=count($this->getAll(['trash'=>1]));
            //Chuẩn bị paging
            $data['paging']=new Paging('adminimage/imageListInTrash/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function imagetoggleTrash($id)
        {
           if($this->toggle('trash',$id))
           $_SESSION['msg']="Thực hiện thành công";
           else
           $_SESSION['msg']="Thực hiện thất bại";
           header("location:".BASE_URL."adminimage/imageList/".LIMIT."/0");
        }
        public function imagetoggleStatus($id)
        {
           if($this->toggle('status',$id))
           $_SESSION['msg']="Thực hiện thành công";
           else
           $_SESSION['msg']="Thực hiện thất bại";
           header("location:".BASE_URL."adminiage/imageList/".LIMIT."/0");
        }
        public function imageDelete($id)
        {
           
            if( $this->delete($id))
            $_SESSION['msg']="Thực hiện thành công";
            else
            $_SESSION['msg']="Thực hiện thất bại";
            header("location:".BASE_URL."adminimage/imageList/".LIMIT."/0");
        }
        public function doUpdateImage($id)
        {
            //Lấy dữ liệu sản phẩm mới
            $newimage['image']=$_POST['inputimage'];
            $newimage['title']=$_POST['inputtitle'];
            $newimage['trash']=$_POST['inputTrash'];
            $newimage['status']=$_POST['inputStatus'];

            //Tạo chuỗi alias
            $helper= new Helper;
            if($newimage['alias']=='')
            $newimage['alias']=$helper->to_alias($newimage['image']);

             
            if($this->insert($newimage))
            $_SESSION['msg']='Cập nhật hình ảnh thành công!';
            else
            {
                $_SESSION['msg']='Cập nhật hình ảnh thất bại!';
                header('Location:'.BASE_URL."adminimage/imagelist");
                exit;
            }
        }
    }
?>

