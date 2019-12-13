<?php
  include_once "../base.php";
  $_POST['sh2'];
  print_r($_POST['file-name']);
  $_POST['id'];
//   echo $_POST['sh'];
  foreach($_POST['id'] as $key => $id){
 
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
       
        $sql = "delete from files where `id`='".$id."'";

        $pdo->exec($sql);

    }else{
        $data=find('files',$id);
        $data['sh']=($id==$_POST['sh'])?1:0;
     
          $sql = "update `files` SET `name`= '".$_POST['file-name'][$key]."',`sh`='".$data['sh']."' WHERE `id`='".$id."' ";
          $pdo->exec($sql);
     
    }

    if(!empty($_POST['sh2'])){
        $data=find('files',$id);
        $data['sh2']=(in_array($id,$_POST['sh2']))?1:0;

        
         $sql = "update `files` SET  `name`= '".$_POST['file-name'][$key]."', `sh2`='".$data['sh2']."' WHERE `id`='".$id."' ";
        $pdo->exec($sql);
   
    }
    
 }  

    to("../admin.php?do=file_img");
