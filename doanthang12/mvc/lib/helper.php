<?php 
    class Helper
    {
        public function to_alias($str)
        {
            $str=trim(mb_strtolower($str));
            $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
            $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
            $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
            $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
            $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
            $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
            $str = preg_replace("/(đ)/", "d", $str);
            $str = preg_replace('/([^a-z0-9-\s])/','',$str);
            $str = preg_replace('/([\s]+)/','-',$str);
            //$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
            return $str;
        } 
        //Mở doupload
		public function doUpload($inputFileUpload)
		{
			//Kiểm tra có dữ liệu fileupload trong $_FILES không
			//Nếu không có thì dừng
			$_SESSION['msg']='';
			if($_FILES[$inputFileUpload]['error']!=0)
				$_SESSION['msg']='Dữ liệu không đúng cấu trúc, Dữ liệu upload bị lỗi hoặc chưa chọn file Upload.<br>';
			else
			{
				//Đã có dữ liệu upload, thực hiện xử lý file upload
				//Thư mục bạn sẽ lưu file upload
				$target_dir="public/upload/";
				//Vị trí lưu file tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
				$target_file =$target_dir.basename($_FILES[$inputFileUpload]['name']);
				$allowUpload =true;
				//Lấy phần mở rộng của file (jpg, png,....)
				$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
				//Cỡ lớn nhất được upload (bytes)
				$maxfilesize=80000000;
				//Những loại file được upload
				$allowtypes=array('jpg','png','jpeg','gif');
				if(isset($_POST['submit']))
				{
					//Kiểm tra xem ảnh có phải là ảnh bằng hàm getimagesize
					$check=getimagesize($_FILES[$inputFileUpload]["tmp_name"]);
					if($check!==false)
					{
						$_SESSION['msg'].="Đây là file ảnh - ".$check["mime"].".<br>";
						$allowUpload=true;
					}
					else
					{
						$_SESSION['msg'].="Đây không là file ảnh.<br>";
						$allowUpload=false;
					}
				}
				//Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
				//Bạn có thể phát triển code để lưu thành một file tên khác
				if(file_exists($target_file))
				{
					$_SESSION['msg']="Tên file đã tồn tại trên server, không được ghi đè.<br>";
					$allowUpload=false;
				}
				//Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
				if($_FILES[$inputFileUpload]['size']>$maxfilesize)
				{
					$_SESSION['msg']="Không được upload ảnh lớn hơn $maxfilesize (bytes).<br>";
					$allowUpload=false;
				}
				//Kiểm tra kiểu file
				if(!in_array($imageFileType,$allowtypes))
				{
					$_SESSION['msg']="Chỉ được upload ảnh có định dạng JPG, PNG, JPEG, GIF.<br>";
					$allowUpload=false;
				}
				
				if($allowUpload)
				{
					//Xử lý di chuyển file tạm ra thư mục cần lưu trữ dùng hàm move_uploaded_file
					if( move_uploaded_file($_FILES[$inputFileUpload]["tmp_name"],$target_file))
					{
					$_SESSION['msg'].="public/upload/".basename($_FILES[$inputFileUpload]["name"])."Đã upload file thành công.<br>";
					$_SESSION['msg'].="File lưu tại".$target_file.'<br>';
					return true;
					}
					else
					{
						$_SESSION['msg'].="Không upload được file, có thể do file lớn, kiểu file không đúng....'<br>'";
						return false;
					}
				}
				else
				{
					$_SESSION['msg']="Không upload được file, có thể do file lớn , kiểu file không đúng...";
					return false;
				}
			}
		}
		//Đóng douplod
		


        
    }
?>