<?php 
    class PostModel extends BaseModel{
        protected $table = DB_PREFIX.'post';
        public function home($limit,$offset){
            // Lấy tất cả các bài viết không nằm trong thùng rác với số lượng giới hạn
            $sql = "select * from $this->table where trash = 0 and status = 1 limit $offset,$limit";
            $data['posts'] = $this->queryAll($sql);
            // Chuẩn bị dữ liệu để phân trang
            $sql = "select * from $this->table where status = 1 and trash=0";
            $totalRecords=count($this->queryAll($sql));
            $data['paging'] = new Paging('post/home/',$totalRecords,$limit,$offset);
            return $data;
        }
    }
?>