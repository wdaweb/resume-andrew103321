<?php
  include_once "../base.php";
    $data = $_POST["data"];
   $table_in = $_POST["table_in"];
    $id = $_POST["id"];
    updata($table_in,$id,$data); 

   
    
?>