<?php 
    class UsModel extends BaseModel{
        protected $table = DB_PREFIX.'us';
        public function showUs($usId){
           
            $data['us'] = $this->getAll(['usId'=>$usId]);
            return $data;
        }
    }
?>