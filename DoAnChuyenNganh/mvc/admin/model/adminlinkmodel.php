<?php 
    class AdminLinkModel extends AdminModel{
        protected $table = DB_PREFIX . 'link';
        protected $field = ['title', 'position','image','link','orders' ,'status', 'trash'];
        protected $key = 'id';
        // function addLink
        public function doAddLink(){
            $newlinks['title'] = $_POST['inputImageName'];
            $newlinks['position'] = $_POST['inputPosition'];
            $newlinks['image'] = basename($_FILES['inputFileUpload']['name']);
            $newlinks['link'] = $_POST['inputLink'];
            $newlinks['orders'] = $_POST['inputOrders'];
            $newlinks['status'] = $_POST['inputStatus'];
            $newlinks['trash'] = 0;
            // Kiểm lỗi
            $_SESSION['msg'] = "";
            if($this->insert($newlinks))
                $_SESSION['msg'] .= "Thêm liên kết thành công";
            else
                $_SESSION['msg'] .= "Thêm liên kết không thành công";
        } 
        // function danh sách liên kết
        public function linkList($limit,$offset){
            // Lấy danh sách link
            $data['links']=$this->getAllLimit(['trash'=>0],$limit,$offset);
            // Tính tổng số liên kết
            $totalRecords=count($this->getAll(['trash'=>0]));
            // Phân trang
            $data['paging'] = new Paging('adminLink/linkList/',$totalRecords,$limit,$offset);
            return $data;
        }
        // Toggle status
        public function toggleStatus($linkId){
            if($this->toggle('status',$linkId))
                $_SESSION['msg'] .= "Thực hiện thành công";
            else
                $_SESSION['msg'] .= "Thực hiện không thành công";
            header('location:'.BASE_URL.'adminLink/linkList/'.LIMIT.'/0');

        }
        // Toggle trash
        public function toggleTrash($linkId){
            if($this->toggle('trash',$linkId))
                $_SESSION['msg'] .= "Thực hiện thành công";
            else
                $_SESSION['msg'] .= "Thực hiện không thành công";
            header('location:'.BASE_URL.'adminLink/linkList/'.LIMIT.'/0');
        }
        // function updateLink
        public function doUpdateLink($linkId)
        {
            // Lấy liên kết mới
            $newlink['title'] = $_POST['inputTitle'];
            $newlink['position'] = $_POST['inputPosition'];
            $newlink['image'] = basename($_FILES['inputFileUpload']['name']);
            $newlink['trash'] = $_POST['inputTrash'];
            $newlink['status'] = $_POST['inputStatus'];
            // Kiểm lỗi
            $_SESSION['msg'] = '';
            if ($this->update($newlink, $linkId))
                $_SESSION['msg'] .= "Cập nhật liên kết thành công";
            else
                $_SESSION['msg'] .= "Cập nhật liên kết thất bại";
            header("Location: " . BASE_URL . "adminLink/linkList");
            exit;
        }
        public function linkListInTrash($limit,$offset){
            // Lấy danh sách sản phẩm
            $data['links'] = $this->getAllLimit(['trash'=>1],$limit,$offset);
            // Tính tổng số sản phẩm
            $totalRecords = count($this->getAll(['trash'=>1]));
            // Chuẩn bị paging
            $data['paging'] = new Paging('adminLink/linkListInTrash/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function linkDelete($linkId){
            if($this->delete($linkId))
                $_SESSION['msg'] .= "Xóa thành công";
            else
                $_SESSION['msg'] .= "Xóa không thành công";
            header("location: ".BASE_URL.'adminLink/linkListInTrash/'.LIMIT."/0");
            exit;
        }
    }
?>