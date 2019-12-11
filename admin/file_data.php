<?php
     include_once "./base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/file.css">
    <style>
        #submit_re{
            position:absolute;
            top:0px;
            left: 121px;
        }
    
    </style>
</head>
<body>
        <div id="resume_list">   
                
                <div>求職條件/描述管理</div>
                <div>學經歷管理</div>
                <div>自傳管理</div>
                <div class='out'>退出</div>
              
        </div> 
        <div id="content">
            <div id='job'>
            <table>
                <tr>
                    <td>履歷名稱 :</td>
                    <td><input type="text" name="resume" id="resume"></td>
                </tr>
                <tr>
                    <td>希望職務名稱 :</td>
                    <td><input type="text" name="jobname" id="jobname"></td>
                </tr>
                <tr>
                    <td>希望產業類別 :</td>
                    <td><input type="text" name="jobtype" id="jobtype"></td>
                </tr>
                <tr>
                    <td>希望工作地點 :</td>
                    <td><input type="text" name="location" id="location"></td>
                </tr>
                <tr>
                    <td>希望薪資待遇 :</td>
                    <td><input type="text" name="Million" id="Million">萬</td>
                    <td><input type="text" name="thousand" id="thousand">千</td>
                </tr>
                <tr>
                    <input type="hidden" name='sh'>
                </tr>
            </table>
            <button id='insert' style="padding: 20px 10px;  float: right;">儲存</button>
            <!-- <button class='out' style="padding: 20px 10px;  float: right;">退出</button> -->
            </div>

            <div>
            <table>
                <tr>
                    <td>學校 :</td>
                    <td><input type="text" name="school" id="school"></td>
                </tr>
                <tr>
                    <td>科系 :</td>
                    <td><input type="text" name="jorname" id="jorname"></td>
                </tr>
                <tr>
                    <td>狀態 :</td>
                    <td>
                        <input type="radio" name="mode" id="mode" value="畢業" checked style="width:20px;height:20px;">畢業
                        <input type="radio" name="mode" id="mode" value="肄業"  style="width:20px;height:20px;">肄業
                        <input type="radio" name="mode" id="mode" value="就學"  style="width:20px;height:20px;">就學
                    </td>
                </tr>
                <tr>
                    <td>證照 :</td>
                    <td><textarea name="License" id="License" cols="30" rows="10"></textarea></td>
                </tr>
            </table>
                <button id='insert_1' style="padding: 20px 10px;  float: right;">儲存</button>
                <!-- <button class='out' style="padding: 20px 10px;  float: right;">退出</button> -->
            </div>

            <div>
                <textarea name="auto" id="auto" rows="15" style="font-size:20px; width: 510px;"></textarea>
                <button id='insert_2' style="padding: 20px 10px;  float: right;">儲存</button>
                <!-- <button class='out' style="padding: 20px 10px;  float: right;">退出</button> -->
            </div>
           
            </div>
    <button style=" width: 120px; height: 40px;font-size: 20px;" id='add'>新增</button>
   
    
<?php
    $data = all("job",[]);
    foreach ($data as $r){
    ?>
    
    <div class='div_add'>
        <table border="1" cellpadding= 3 cellspacing="2" >
            <tr>
                <td>履歷名稱</td>
                <td>更新時間</td>
                <td colspan="3"></td>
               
            </tr>
            <tr>
                 <td><?=$r['resume']?></td>
                 <td><?=$r['time']?></td>
                 <td> <button class="edit-user" data-edit="<?=$r['id']?>">編輯</button></td>
                 <td><button class="del-user" data-del="<?=$r['id']?>">刪除</button></td>

                 <td><input type="radio" name='sh' value="<?=$r['id']?>" <?=($r['sh']==1)?"checked":"";?> style='width:20px;height:20px;' class="sh">顯示</td>
                 
                 <input type="hidden" name='id' data-hide="<?=$r['id']?>" value="<?=$r['id']?>">
            </tr>
    </div>
    <?php
    }
    ?>
      
      <!-- <button id="submit_re" style=" width: 120px; height: 40px;font-size: 20px;" ></button> -->
     <!-- <form action="./api/resume_sh.php" method="post">
     <input type="submit" value="顯示履歷" id="submit" style=" width: 120px; height: 40px;font-size: 20px;">
    </form>    -->
       
</body>
</html>


