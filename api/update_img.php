<?php
  include_once "../base.php";
  print_r($_POST['id']);
  echo $_POST['sh'];
  foreach($_POST['id'] as $key => $id){
 
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
       
        echo $sql = "delete from files where `id`='".$id."'";

        $pdo->exec($sql);
    

    }else{
        $data=find('files',$id);
        $data['sh']=($id==$_POST['sh'])?1:0;
        echo  $sql = "update `files` SET `sh`='".$data['sh']."' WHERE `id`='".$id."' ";
        $pdo->exec($sql);
    }
    
 }  

    to("../admin.php?do=file_img");
?>