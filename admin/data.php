<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/file.css"> 
    <style>
        #submit_data{
            position:absolute;
            top: 88%;
            left: 114%;
        }
    
    </style>
</head>
<body>
    <form action="./api/add.php" method="post">
    <div  id='data_tb'>
    <table>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td>地點</td>
            <td><input type="text" name="addr" id="addr"></td>
        </tr>
        <tr>
            <td>電話</td>
            <td><input type="text" name="tel" id="tel" ></td>
        </tr>
        <tr>
            <td>生日</td>
            <td><input type="day" name="birthday" id="birthday"></td>
        </tr>
        <tr>
            <td>電子信箱</td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td>簡介</td>
            <td><textarea name="des" id="des" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="更新" id='submit_data'></td>
        </tr>
    </table>
    </form>
    </div>
</body>
</html>
