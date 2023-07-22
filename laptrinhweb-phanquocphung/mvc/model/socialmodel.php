<?php 
    class SocialModel extends BaseModel{
        protected $table = DB_PREFIX.'socialicon';
        public function showSocial($id){
            $data['social'] = $this->getAll(['id'=>$id]);
            return $data;
        }
    }
?>