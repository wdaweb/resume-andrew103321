<?php
  include_once "../base.php";
  echo $_POST['sh2'];
  print_r($_POST['id']);
//   echo $_POST['sh'];
  foreach($_POST['id'] as $key => $id){
 
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
       
        echo $sql = "delete from files where `id`='".$id."'";

        $pdo->exec($sql);
    

    }else{
        $data=find('files',$id);
        $data['sh']=($id==$_POST['sh'])?1:0;
          $sql = "update `files` SET `sh`='".$data['sh']."' WHERE `id`='".$id."' ";
        $pdo->exec($sql);
    }

    if(!empty($_POST['sh2'])){
        $data=find('files',$id);
        $data['sh2']=(in_array($id,$_POST['sh2']))?1:0;

        echo  $sql = "update `files` SET `sh2`='".$data['sh2']."' WHERE `id`='".$id."' ";
        $pdo->exec($sql);
    }
    
 }  

    to("../admin.php?do=file_img");
