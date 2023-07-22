<?php
    class AdminLink extends AdminController
    {
        public function linkList($limit=LIMIT,$offset=0)
        {
            //Yêu cầu model thực hiện
            $adminlinkmodel= new AdminLinkModel;
            $data=$adminlinkmodel->linkList($limit,$offset);
            //Gửi dữ liệu cho view\
            $this->loadAdminView('adminmaster1','adminlink/linkList',$data);
        }
        public function linkToggleTrash($id)
        {
            //Yêu cầu model thực hiện
            $adminlinkmodel= new AdminLinkModel;
            $data=$adminlinkmodel->toggleTrash($id);
        }
        public function linkToggleStatus($id)
        {
            //Yêu cầu model thực hiện
            $adminlinkmodel= new AdminLinkModel;
            $data=$adminlinkmodel->toggleStatus($id);
        }
        public function linkListInTrash($limit=LIMIT,$offset=0)
        {
            //Yêu cầu model thực hiện
            $adminlinkmodel= new AdminLinkModel;
            $data=$adminlinkmodel->linkListInTrash($limit,$offset);
            //Gửi dữ liệu cho view\
            $this->loadAdminView('adminmaster1','adminlink/linkListInTrash',$data);
        }
        public function addlink()
        {
            //Xử lý dữ liệu nhận được
            if(isset($_POST['submit']))
            {
                $adminlinkmodel=new AdminLinkModel;
                $adminlinkmodel->doAddlink();
            }
            //Hiển thị form Add
            $catmodel = new AdminLinkModel;
            $data['links'] = $catmodel->getAll(['trash'=>0,'status'=>1]);
            $this->loadAdminView("adminmaster1","adminlink/addlink",$data);
            
        }
        public function UpdateLink($id)
        {
            {
                //Xử lý dữ liệu nhận được
                $adminlinkmodel= new AdminLinkModel;
                if(isset($_POST['submit']))
                {
                    $adminlinkmodel->doUpdateLink($id);
                }
    
                // Hiển thị form updateCategory
                $linkmodel = new AdminLinkModel;
                $data['links'] = $linkmodel->getAll(['trash'=>0,'status'=>1]);
                $data['oldlink']=$adminlinkmodel->get(['id'=>$id]);
                $this->loadAdminView("adminmaster1","adminlink/updatelink",$data);
            }
        }
        public function linkDelete($id)
        {
            //Yeu cau model thuc hien
            $adminlinkmodel= new AdminLinkModel;
            $data=$adminlinkmodel->linkDelete($id);
        }
    }
?>