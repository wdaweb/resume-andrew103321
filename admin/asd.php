<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/file.css">
</head>
<body>
        <div id="resume_list">   
                
                    <div id=job>求職條件/描述管理</div>
                    <div id=school>學經歷管理</div>
                    <div id=auto>自傳管理</div>
                
                <!-- <input type="button" value="學經歷管理">
                <input type="button" value="求職條件/描述管理">
                <input type="button" value="自傳管理"> -->
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
                </table>
                </div>
                <div>
                <table>
                    <tr>
                        <td>學校 :</td>
                        <td><input type="text" name="school" id="school"></td>
                    </tr>
                    <tr>
                        <td>科系 :</td>
                        <td><input type="text" name="jorname" id="depname"></td>
                    </tr>
                    <tr>
                        <td>狀態 :</td>
                        <td>
                            <input type="radio" name="mode" id="mode" value="1">畢業
                            <input type="radio" name="mode" id="mode" value="2">肄業
                            <input type="radio" name="mode" id="mode" value="3">就學
                        </td>
                    </tr>
                    <tr>
                        <td>證照 :</td>
                        <td><textarea name="License" id="License" cols="30" rows="10"></textarea></td>
                    </tr>
                </table>
                </div>

                <div>
                    <textarea name="auto" id="auto" rows="15" style="font-size:20px; width: 510px;"></textarea>
                </div>
             
        </div>
</body>
</html>