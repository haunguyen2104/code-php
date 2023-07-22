<?php
    class controller
    {
        public function home()
        {
            echo"Trang home cua Controller";
        }
        protected function loadview($master, $viewname,$data)
        {
            require_once PATH_TO_VIEW.strtolower($master).'.php';
        }
    }
?>