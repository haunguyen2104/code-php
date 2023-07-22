<?php 
    // Kiêm tra
    move_uploaded_file($_FILES['imgupload']['tmp_name'],"public/upload/".$_FILES['imgupload']['name']);
?>