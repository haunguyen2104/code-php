<?php 
    class AdminLink extends AdminController{
        //funtion thêm Link
        public function addLink(){
            if(isset($_POST['submit'])){
                $adminlinkmodel = new AdminLinkModel;
                $adminlinkmodel->doAddLink();
            }
            // Hiển thị form addLink
            $linkmodel = new AdminLinkModel;
            $data['links']=$linkmodel->getAll(['trash'=>0,'status'=>1]);
            $this->loadAdminView('adminmaster1','adminlink/addlink',$data);
        }
        // function LinkList
        public function linkList($limit=LIMIT,$offset=0){
            $adminlinkmodel = new AdminLinkModel;
            $data=$adminlinkmodel->linkList($limit,$offset);
            // Gửi dữ liệu cho vỉew
            $this->loadAdminView('adminmaster1','adminLink/linkList',$data);
        }
        // funtion linkToggleStatus
        public function linkToggleStatus($linkId){
            $adminlinkmodel = new AdminLinkModel;
            $data=$adminlinkmodel->toggleStatus($linkId);
        }
        // function linkToggleTrash
        public function linkToggleTrash($linkId){
            $adminlinkmodel = new AdminLinkModel;
            $data=$adminlinkmodel->toggleTrash($linkId);
        }
        // function updateLink
        public function UpdateLink($linkId){
            // Xử lý dữ liệu nhận được
            $adminlinkmodel = new AdminLinkModel;
            if(isset($_POST['submit'])){
                $adminlinkmodel->doUpdateLink($linkId);
            }
            // Hiển thị form updateImage
            $linkmodel = new AdminLinkModel;
            $data['links'] = $linkmodel->getAll(['trash'=>0,'status'=>1]);

            $data['oldlink'] = $adminlinkmodel->get(['id'=>$linkId]);

            $this->loadAdminView('adminmaster1',"adminlink/updateLink",$data);
        }
        public function linkListInTrash($limit=LIMIT,$offset=0){
            $adminlinkmodel = new AdminLinkModel;
            $data=$adminlinkmodel->linkListInTrash($limit,$offset);
            // Gửi dữ liệu cho view
            $this->loadAdminView('adminmaster1','adminLink/linkListInTrash',$data);
        }
        public function linkDelete($imageId){
            // Yêu cầu model thực hiện
            $adminlinkmodel = new AdminLinkModel;
            $adminlinkmodel->linkDelete($imageId);
        }
    }
?>