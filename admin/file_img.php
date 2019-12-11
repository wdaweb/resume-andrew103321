<?php include_once "./base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <style>
            input{
                padding:10px 10px;
            }
        
        
        </style>
</head>
<body>
    <div>
        <form action="./api/file_img.php" method="post" enctype="multipart/form-data">
            <input type="file" name='file' >
            <input type="submit" value="新增">
        </form>
           
        <div id='img_flex'> 
        <?php
    
          $rows = all("files");
            echo "<div>";   
            echo  "<form action='./api/update_img.php' method='post' enctype='multipart/form-data'>";
            foreach($rows as $r){
           
             echo "<img src=".substr($r['path'],1)." style='width:120px;height:120px';>";
                    if($r['sh']==1){
                        echo "<input type='radio' name='sh' id='sh' style='width:20px;height:20px;' checked  value=".$r['id']." >顯示";
                    }else{
                        echo "<input type='radio' name='sh' id='sh' style='width:20px;height:20px;' value=".$r['id']." >顯示";
                    }
             
             echo "<input type='checkbox' name='del[]' id='del' value=".$r['id']." style='width:20px;height:20px;'>刪除";
            //  echo "<input type='button' data-photo=".substr($r['path'],1)." value='設定頭貼' class=imgid>";
            echo "<input type='hidden' value=".$r['id']." name='id[]'>";
            }
           echo "<input type='submit' value='變更設定'>";
           echo "</form>";
           echo "</div>"; 
          
        ?>
    </div>
    </div>
</body>
</html>
