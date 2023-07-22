<?php
    class AdminLinkModel extends LinkModel
    {
        protected $field=['title','Position','Image','link','order','trash','status'];
        protected $key='id';
        public function doAddLink()
        {
            $newlink['title'] = $_POST['inputtitle'];
            $newlink['Position'] = $_POST['inputPosition'];
            $newlink['Image'] = $_POST['inputImage'];
            $newlink['link'] = $_POST['inputlink'];
            $newlink['order'] = $_POST['inputorder'];
            $newlink['status'] = $_POST['inputStatus'];
            $newlink['trash'] = 0;
            // Tao chuoi alias
            
            $_SESSION['msg']='';
            if($this->insert($newlink))
                        $_SESSION['msg'] .="Thêm liên kết thành công";
                    else
                        $_SESSION['msg'] .= "Thêm liên kết thất bại";

        }
        public function linkList($limit=LIMIT,$offset=0)
        {
            //Lấy danh sách sản phẩm
            $data['links']=$this->getAllLimit(['trash'=>0],$limit,$offset);
            //Tính tổng số sản phầm
            $totalRecords=count($this->getAll(['trash'=>0]));
            //Chuẩn bị paging
            $data['paging']=new Paging('adminlink/linkList/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function doUpdateLink($id)
        {
            //Lấy dữ liệu sản phẩm mới
            $newlink['title']=$_POST['inputtitle'];
            $newlink['Position']=$_POST['inputPosition'];
            $newlink['link']=$_POST['inputlink'];
            $newlink['order']=$_POST['inputorder'];
            $newlink['trash']=$_POST['inputTrash'];
            $newlink['status']=$_POST['inputStatus'];

             //Kiểm lỗi
             $_SESSION['msg']='';
             
            if($this->insert($newlink))
            $_SESSION['msg']='Cập nhật liên kết thành công!';
            else
            {
                $_SESSION['msg']='Cập nhật liên kết thất bại!';
                header('Location:'.BASE_URL."adminlink/linklist");
                exit;
            }
        }
    }
?>

