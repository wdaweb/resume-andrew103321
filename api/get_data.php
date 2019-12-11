<?php
  include_once "../base.php"; 
  
  if(!empty($_GET['c1']) && !empty($_GET['table_in'])){
        $c1=$_GET['c1'];
        $table_in=$_GET['table_in'];

        switch($table_in){
        case "job":    
            $stu = find($table_in,$c1);
            echo json_encode($stu);
        break;
        case "school":    
            $stu = find($table_in,$c1);
            echo json_encode($stu);
        break;
        case "auto":    
            $stu = find($table_in,$c1);
            echo json_encode($stu);
        break;         
        }

  }else{
        $table=$_GET['table'];
        $stu = find($table,['sh'=>'1']);
        echo json_encode($stu);
  }
?>