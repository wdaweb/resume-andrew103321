<?php        
    include_once "../base.php";
        if(!empty($_FILES['file']['tmp_name'])){
            $type = $_FILES['file']['type'];
            $filename = $_FILES['file']['name'];
            $path ="../img/".$filename;
            move_uploaded_file($_FILES['file']['tmp_name'],$path);
            
            $data=[$filename,$type,$path];
            save('file',$data);

        }
            to("../admin.php?do=file_img");
          
?> 