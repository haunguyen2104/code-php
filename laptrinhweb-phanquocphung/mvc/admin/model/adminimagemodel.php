<?php
class AdminImageModel extends AdminModel
{
    protected $table = DB_PREFIX . 'image';
    protected $field = ['title', 'image', 'position', 'trash', 'status'];
    protected $key = 'id';

    public function doAddImage()
    {
        $newimgs['title'] = $_POST['inputImageName'];
        $newimgs['image'] = basename($_FILES['inputFileUpload']['name']);
        $newimgs['position'] = $_POST['inputPosition'];
        $newimgs['trash'] = 0;
        $newimgs['status'] = $_POST['inputStatus'];
        // Kiểm lỗi
        $_SESSION['msg'] = '';
        if ($this->insert($newimgs))
            $_SESSION['msg'] .= "Thêm hình ảnh thành công";
        else
            $_SESSION['msg'] .= "Thêm hình ảnh không thành công";
    }
    // Funtion xem danh sách hình ảnh
    public function imageList($limit, $offset)
    {
        // Lấy danh sách hình ảnh
        $data['imgs'] = $this->getAllLimit(['trash' => 0], $limit, $offset);
        // Tính tổng số hình ảnh
        $totalRecords = count($this->getAll(['trash' => 0]));
        // Phân trang
        $data['paging'] = new Paging('adminImage/imageList/', $totalRecords, $limit, $offset);
        return $data;
    }
    public function toggleStatus($imageId)
    {
        if ($this->toggle('status', $imageId))
            $_SESSION['msg'] = "Thực hiện thành công";
        else
            $_SESSION['msg'] = "Thực hiện không thành công";
        header("location:" . BASE_URL . "adminImage/imageList/" . LIMIT . "/0");
    }
    public function toggleTrash($imageId)
    {
        if ($this->toggle('trash', $imageId))
            $_SESSION['msg'] .= "Thực hiện thành công";
        else
            $_SESSION['msg'] .= "Thực hiện không thành công";
        header("location: " . BASE_URL . "adminImage/imageList/" . LIMIT . "/0");
    }
    public function doUpdateImage($imageId)
    {
        // Lấy sản phẩm mới

        $newimg['title'] = $_POST['inputTitle'];
        $newimg['image'] = basename($_FILES['inputFileUpload']['name']);
        $newimg['trash'] = $_POST['inputTrash'];
        $newimg['status'] = $_POST['inputStatus'];
        // Tạo chuỗi alias
        // Kiểm lỗi
        $_SESSION['msg'] = '';
        if ($this->update($newimg, $imageId))
            $_SESSION['msg'] .= "Cập nhật hình ảnh thành công";
        else
            $_SESSION['msg'] .= "Cập nhật hình ảnh thất bại";
        header("Location: " . BASE_URL . "adminImage/imageList");
        exit;
    }
    // funtion xem thùng rác của hình ảnh
    public function imageListInTrash($limit,$offset){
        // Lấy danh sách sản phẩm
        $data['imgs'] = $this->getAllLimit(['trash'=>1],$limit,$offset);
        // Tính tổng số sản phẩm
        $totalRecords = count($this->getAll(['trash'=>1]));
        // Chuẩn bị paging
        $data['paging'] = new Paging('adminImage/imageListInTrash/',$totalRecords,$limit,$offset);
        return $data;
    }
    public function imageDelete($imageId){
        if($this->delete($imageId))
            $_SESSION['msg'] .= "Xóa thành công";
        else
            $_SESSION['msg'] .= "Xóa không thành công";
        header("location: ".BASE_URL.'adminImage/imageListInTrash/'.LIMIT."/0");
        exit;
    }
}
