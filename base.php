<?php
   
    $dsn = "mysql:host=localhost;charset=utf8;dbname=resume";
    $pdo = new PDO($dsn,'root','');
    session_start();
    

    function all($table,...$arg){
        global $pdo;
    
        $sql="select * from $table ";
    
        if(!empty($arg[0])){
            foreach($arg[0] as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
    
            $sql = $sql . " where " . implode(" && ",$tmp);
    
        }
    
        if(!empty($arg[1])){
            $sql=$sql . $arg[1];
        }
        // echo $sql . "<BR>";
    
       return $pdo->query($sql)->fetchAll();
       
    }


    function find($table,...$arg){
        global $pdo;

        $sql = "select * from $table where ";
        
        if(is_array($arg[0])){
    
            foreach($arg[0] as $key => $value){
                $tmp[]=sprintf("`%s`='%s'" ,$key,$value);
            }
            $sql = $sql . implode(" && " ,$tmp);
    
    
        }else{
           $sql = $sql ."id='".$arg[0]."'";
        }
        return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    function save($table,$data){
        global $pdo;
        switch($table){
            case "job":
                $sql = "INSERT INTO `job`(`resume`, `jobname`, `jobtype`, `location`, `Million`, `thousand`) 
                VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";
            break;
            case "school":
                $sql = "INSERT INTO `school`(`school`, `depname`, `mode`, `License`)
                 VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')";
            break;
            case "auto":
                $sql = "INSERT INTO `auto`(`auto`) VALUES ('$data[0]')";
            break;
            case "file":
              echo  $sql = "INSERT INTO `files`( `name`, `type`, `path`) 
                VALUES ('$data[0]','$data[1]','$data[2]')";
            break;
            case "data":
              echo  $sql = "UPDATE `data` SET `name`='$data[0]',`addr`='$data[1]',
              `tel`='$data[2]',`birthday`='$data[3]',`email`='$data[4]',`des`='$data[5]' WHERE 1";
            break;
        }   
        return $pdo->exec($sql);
    }

    function updata($table_in,$id,$data){
        global $pdo;
        switch($table_in){
            
            case "job":
            echo    $sql = "UPDATE `job` SET `resume`='$data[0]',
                `jobname`='$data[1]',`jobtype`='$data[2]',`location`='$data[3]',
                `Million`='$data[4]',`thousand`='$data[5]' WHERE 1";
            break;    
            case "school":
            echo    $sql = "UPDATE `school` SET `school`='$data[0]',
                `depname`='$data[1]',`mode`='$data[2]',`License`='$data[3]' WHERE 1";
            break;    
            case "auto":
            echo    $sql = "UPDATE `auto` SET `auto`='$data[0]' WHERE 1";
            break;    
            
        }
       return $pdo->exec($sql);
    }

    function del($id){
        global $pdo;
        $a = ['`job`','`school`','`auto`'];
     
        for($i=0;$i<3;$i++){
          
            echo  $sql = "delete from ".$a[$i]." where `id`='".$id."'";

            $pdo->exec($sql);
        }
        return "刪除成功";
        
    }   

    function to($path){
        header("location:".$path);
    }
     
?>
