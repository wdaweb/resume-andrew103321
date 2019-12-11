<?php
    include_once "../base.php";

    $acc=$_GET["acc"];
    $pw=$_GET["pw"];
    
    $sql = "SELECT * FROM `user` WHERE acc='$acc' && pw='$pw'";   
        
    //   echo   $sql;
     $data = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    //  print_r($data);

    if(!empty($data)){
      echo  $_SESSION["login"]=1;
      //  header("location:admin.php");
   
    }else{  
       echo '0';
    }
?>