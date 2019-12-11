<?php
  include_once "../base.php";

 $c1=$_GET['c1'];
  $stu = find($c1,1);
  echo json_encode($stu);
  
 ?>