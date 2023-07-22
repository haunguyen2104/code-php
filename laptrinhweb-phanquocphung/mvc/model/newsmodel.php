<?php
    class NewsModel extends BaseModel{
        protected $table = DB_PREFIX.'newsbrand';
        public function newsByBrand($brandAlias,$limit,$offset){
        
            $topicmodel = new TopicModel;
            $topic=$topicmodel->get(['alias'=>$brandAlias]);
            $data['topic'] = $topic;
            // Lấy các sản phầm thuộc nhóm có brandId là $brand['brandId']
            $data['news']=$this->getAllLimit(['trash'=>0,'status'=>1,'topicId'=>$topic['topicId']],$limit,$offset);
            // Chuẩn bị dữ liệu phân trang
            $totalRecords=count($this->getAll(['trash'=>0,'status'=>1,'topicId'=>$topic['topicId']]));
            $data['paging'] = new Paging('news/newsbybrand/'.$brandAlias.'/',$totalRecords,$limit,$offset);
            return $data;
        }
        public function newsByDetail($newsAlias){
            //Lấy sản phẩm
            $data['currentNews']=$this->get(['alias'=>$newsAlias]);
            $currentNewsId = $data['currentNews']['topicId'];
            //Lấy sản phẩm tương tự
            $data['sameNews']=$this->getAllLimit(['status'=>1,'trash'=>0,'topicId'=>$currentNewsId],LIMIT,0);
            return $data;
        }
    }
?>