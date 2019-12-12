<?php
include_once "./base.php";
 
    if(!empty($_SESSION['login'])){
        header("location:admin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/animate.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box;
          
        }
        #top{
            width:100%;
            height:60px;
            font-size: 30px;
            line-height: 50px;
            background: rgba(55, 61, 73, 0.975);
        }
        body{
            background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(./bg.jpg);
            background-size: cover;
            background-attachment: fixed;
            background-position:center ;
            font-family:var(--font-family-sans-serif),'Microsoft JHengHei';
        }
        a{
            text-decoration: none;
            color: white
        }
        #modal{
            display: none;
            width: 100%;
            height: 100vh;
            background: rgba(200, 200 ,200 ,0.7);
            position:absolute;
            z-index: 90;
            top:0;
            left:0;
        }
        #input{
            background:white;
            width: 300px;
            height: 250px;
            position: relative;
            left:calc(50vw - 150px);
            top:calc(50vh - 150px);
            text-align: center;
            border:1px solid #999;
            box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.25);
            padding:30px;
            line-height: 35px;
        }
        .in1{
            padding: 5px 10px;
            line-height: 1.75;
            margin: 10px;
           
        }
        #head_p{
            width:300px;
            height:300px;
            background:red;
        }
        #content_list{
            position:relative;
            top: 195px;
            left: 30%;

        }
        #head_p{
            position: absolute;
            top: 196px;
            left: 181px;
        }
        #center{
            width:50%;
            height:600px;
            background:yellow;
            background: rgba( 200, 200,200, 0.9);
            position: relative;
            top: 120px;
            left: 28%; 
            font-size: 25px;

           
           
        }
        .d1{
            position: absolute;
            top: -122px;
            left: -16%;
        }
        #head_p2{
    
            position: absolute;
            top: -195px;
            left:  -18%;
            display: flex;
            justify-content: space-between;
            width: 70%;
            height: 500px;
            flex-wrap: wrap;
        }
        #head_p2 div{
            margin: 20px;
    
        }
        
        

    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
      
      <a class="navbar-brand" href="#" style='font-size:30px;'>
          <img src="./img/top.png" width="50" height="50" class="d-inline-block">
         
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" id='data_list'>
              <li class="nav-item active">
                  <a class="nav-link" href="#" id="mySign" style='font-size:30px;' >
                      <i class="fas fa-home" ></i>&nbsp;  Sign in
                      <span class="sr-only">(current)</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white" href="#" style='font-size:30px;'>
                  <i class="fas fa-user-edit"></i></i> 個人資訊
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white" href="#" style='font-size:30px;'>
                  <i class="fas fa-tasks"></i></i> 學經歷
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white" href="#" style='font-size:30px;'>
                  <i class="far fa-images"></i> 自傳
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white" href="#"  style='font-size:30px;'>
                  <i class="far fa-calendar-alt"></i> 求職條件/描述
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white" href="#"  style='font-size:30px;'>
                  <i class="fas fa-cubes"></i> 作品管理
                  </a>
              </li>
          </ul>
      </div> 　
</nav>
<div id='center'>
<div id="content_list">
            <div></div>
            <div class='d1'>
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
                            <td><textarea name="des" id="des" cols="30" rows="8"></textarea></td>
                        </tr>
                    </table>
                    </div>
                <div class='d1'>
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

                <div class='d1'>
                    自傳:
                    <textarea name="auto" id="auto" rows="15" style="font-size:20px; width: 510px;"></textarea>
                </div>
                <div class='d1'>
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
            
            <div id='head_p2'>
                <?php

                $rows = all("files", ['sh2' => 1]);
                foreach ($rows as $r) {
                    echo "<div>";
                    echo "<img src=" . substr($r['path'], 1) . " style='width:120px;height:120px'; >";
                    echo "</div>";
                }

                ?>
            </div>
            </div>
            </div>
        
        <div id='head_p'>
        <?php
          
                  $rows = all("files",['sh'=>1]);
                  foreach($rows as $r){
               
                    echo "<img src=".substr($r['path'],1)." style='width:300px;height:300px'; >";
                  }
           
        ?>
         </div>
        
   
    
    <div id="modal">
        <div id="input"  class='zoomInDown wow'> 
        <input type="hidden" value="" id="no">
        <span >帳號或密碼錯誤，請重新輸入</span>
            <form>
               <span class="fas fa-user"></span> <input type="text" name="acc" placeholder="帳號" class="in1" id='acc'>
               <span class="fas fa-key"></span><input type="password" name="pw" placeholder="密碼"class="in1" id='pw' >
               <input type="button" value="登入" id="mysub">
               <input type="button" value="退出" id="back">
            </form>
        </div>
    </div>
    
  
           
         <script src="./js/jquery-3.4.1.min.js"></script>
            <script src="./js/wow.min.js"></script>
         <script src="./js/bootstrap.bundle.min.js"></script>
    <script>
         new WOW().init()
       
        $("#modal").hide();
        $("#content_list div").eq(1).hide();
        $("#content_list div").eq(1).siblings().hide();

        $("#data_list li").on("click",function(){
             let list =  $(this).index()
             $("#content_list div").eq(list).show()
             $("#content_list div").eq(list).siblings().hide();

             if(list==1){
              
                 table = "data";

                 console.log(list)
                 console.log(table)
             }else if(list==2){
                 table = "school";
                 console.log(list)
                 console.log(table);
             }else if(list==3){
                table = "auto";
                console.log(list)
                 console.log(table);
             }else if(list==4){
                table = "job";
                console.log(list)
                 console.log(table);
             }else if(list==0){
                console.log(list)
                console.log(table);
                $("#content_list div").eq(list).hide()
               
             }

                  $.get("./api/get.php",{"c1":table},function(res){
                        console.log(res);
                    let res_data = JSON.parse(res);
                        console.log(res_data) ;
                     
                        $("#name").val(res_data.name);
                        $("#addr").val(res_data.addr);
                        $("#tel").val(res_data.tel);
                        $("#birthday").val(res_data.birthday);
                        $("#email").val(res_data.email);
                        $("#des").val(res_data.des);
                    })   


                     $.get("./api/get_data.php",{table},function(data){
                      console.log(data)
                     let stu_data = JSON.parse(data)
                     console.log(stu_data) 
                       

                    $("#resume").val(stu_data.resume)
                    $("#jobname").val(stu_data.jobname)
                    $("#jobtype").val(stu_data.jobtype)
                    $("#location").val(stu_data.location)
                    $("#Million").val(stu_data.Million)
                    $("#thousand").val(stu_data.thousand)

                    $("#school").val(stu_data.school)
                    $("#depname").val(stu_data.depname)
                    $("#mode_in").val(stu_data.mode)
                    $("#License").val(stu_data.License)
                    
                    $("#auto").val(stu_data.auto)

                 
                })        

        })

        $("#back").on("click",function(){
            $("#modal").hide();
            $("#no").next().hide()
        })
        
        
     
        $("#mySign").on("click",function(){
            $("#modal").show();
            $("#no").next().hide()
        })

    
        $("#mysub").on("click",function(){
            $("#modal").hide();
            let acc =$("#acc").val();
            let pw =$("#pw").val();
        
        
            $.get("./api/login_api.php",{acc,pw},function(res){
                console.log(res);
                if(res==1){
                    window.location = "admin.php";          
                }else{
                    $("#modal").show();
                    $("#no").next().show()
                    $("#no").next().css("color","red")
                }
            })
       
        })


    </script>
    
</body>
</html>