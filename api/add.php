<?php
  include_once "../base.php";
   
  if(!empty($_POST['table']) && !empty($_POST['data'])){
  
    $table = $_POST['table'];
    $data = $_POST['data'];
    print_r($data);

    echo save($table,$data);
}else{
  echo  $name = $_POST['name'];
  echo  $addr = $_POST['addr'];
  echo  $tel = $_POST['tel'];
  echo  $email = $_POST['email'];
  echo  $birthday = $_POST['birthday'];
  echo  $des = $_POST['des'];
   $data =[$name , $addr ,$tel ,$birthday,$email, $des];
   echo save('data',$data);
   to("../admin.php");
}

?>
