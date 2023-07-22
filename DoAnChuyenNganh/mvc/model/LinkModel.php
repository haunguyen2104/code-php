<?php
    class LinkModel extends BaseModel
    {
        protected $table=DB_PREFIX.'link';
        public function showLink($id){
            $data['links'] = $this->getAll(['id'=>$id]);
            return $data;
    }}?>
