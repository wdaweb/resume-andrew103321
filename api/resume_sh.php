<?php
    include_once "../base.php"; 
  
   $sql = "select `id` from  `job` where 1";
   $row = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC); 
  //  print_r($row) ;
   echo $_POST['sh'];

foreach($row as $r){
  foreach($r as $s){
    // print_r($s);
    $data['sh']=($s==$_POST['sh'])?1:0;
    
    echo  $sql="update `job` set `sh`='".$data['sh']."' where `id`='$s'";
    $pdo->exec($sql);
    echo  $sql="update `school` set `sh`='".$data['sh']."' where `id`='$s'";
    $pdo->exec($sql);
    echo  $sql="update `auto` set `sh`='".$data['sh']."' where `id`='$s'";
    $pdo->exec($sql);
  }
}  

// to("../admin.php?do=file_data");
?>  