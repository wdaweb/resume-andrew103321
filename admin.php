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
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
            overflow:hidden;
        }
        #main
        {   
            width:100%;
            margin: auto;
            position: relative;
            left:150px;
            top: 100px;
            display:inline-block
        }
        #center 
        {
            position: absolute;
            left: 350px;
            margin: auto;
            width: 900px;
            height: 600px;
            border-radius:10px;
            background: white;
            box-shadow: 0px 0px 7px 5px rgba(0, 0, 0, 0.7);
          
        }
        #top 
        {
            width: 100%;
            height: 60px;
            font-size: 30px;
            background:  black;
        }
        #back
        {
            width: 100%;
            height: 200px;
            background-image:linear-gradient(to right , #3a414b 33%,  #2f2f2f 66%,  #242424 99%) ;
        }
        #mySign 
        {
            text-decoration: none;
            color: white;
        }
        a{
            text-decoration: none;
        }
        #left
        {  
            position: absolute;
            left: 200px;
            top: 76px;
            line-height: 3;  
        }
        #left tr > td :link
        {
            font-size: 20px;
            text-decoration: none;
            color:black;
        }
        #left tr > td :visited 
        {
            font-size: 20px;
            text-decoration: none;
            color:black;
        }
        #left tr > td :active  
        {
            font-size: 20px;
            padding: 10px 10px;
            background: #66b7f6;
            color: white;
            border-radius:10px;
        }
        #data_tb
        {   position:absolute;
            left:50px;
            top:60px;
            font-size:20px;
            line-height: 2.5;
           
        }
        #modal{
            display:none;
            width:100%;
            height:100vh;
            background:rgba(200,200,200,0.7);
            position:absolute;
            z-index: 90;
            top:0;
            left:0;
        }
        #input{
            background:white;
            width: 900px;
            height: 600px;
            border-radius:10px;
            position: relative;
            left:calc(50vw - 450px);
            top:calc(50vh - 300px);
            text-align: center;
            border:1px solid #999;
            box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.25);
            padding:30px;
            line-height: 35px;
        }
        #resume_list_in
        {
            display:flex;
            font-size:25px;
            justify-content: space-around;
            cursor: pointer;
        }
        #resume_list_in >div:active{
            color: #555;
            cursor: pointer;
            border: 1px solid #ddd;
            background:red;
        }
        #content_in>div{
            font-size: 30px;
        }
        tr>td>input{
            font-size: 20px;
            padding: 5px 10px;
        }
        tr>td>textarea{
            font-size: 20px;
        
        }
        #content_in>div>textarea:hover{
            background-color: #fefadf;
        }
      
        #img_flex{
            /* width: 600px; */
            /* position:absolute;
            top: 44px;
            left:126px; */
         

            display:flex;
            justify-content:space-around;
            flex-wrap:wrap;
            
        }
        #head{
                position:absolute;
                left:332px;
                width:150px;
                height:190px;
                background:red;
        }
        
        
      
    </style>
</head>
<body>

    <div id="modal">
         <div id="input">
         <div id="resume_list_in">   
                
                <div>求職條件/描述管理</div>
                <div>學經歷管理</div>
                <div>自傳管理</div>
                <div class='out'>退出</div>
            
        </div> 
         <div id="content_in">
                <div id='job'>
                <table>
                    <tr>
                        <td>履歷名稱 :</td>
                        <td><input type="text" name="resume" id="resume_in"></td>
                    </tr>
                    <tr>
                        <td>希望職務名稱 :</td>
                        <td><input type="text" name="jobname" id="jobname_in"></td>
                    </tr>
                    <tr>
                        <td>希望產業類別 :</td>
                        <td><input type="text" name="jobtype" id="jobtype_in"></td>
                    </tr>
                    <tr>
                        <td>希望工作地點 :</td>
                        <td><input type="text" name="location" id="location_in"></td>
                    </tr>
                    <tr>
                        <td>希望薪資待遇 :</td>
                        <td><input type="text" name="Million" id="Million_in">萬</td>
                        <td><input type="text" name="thousand" id="thousand_in">千</td>
                    </tr>
                    <!-- <tr>
                        <input type="hidden" name='sh_in' id="sh_in">
                    </tr> -->
                </table>
                    <button id='updata' style="padding: 20px 10px;  float: right;">更新</button>
                    <!-- <button class='out' style="padding: 20px 10px;  float: right;">退出</button> -->
                </div>
                <div>
                <table>
                    <tr>
                        <td>學校 :</td>
                        <td><input type="text" name="school" id="school_in"></td>
                    </tr>
                    <tr>
                        <td>科系 :</td>
                        <td><input type="text" name="jorname" id="depname_in"></td>
                    </tr>
                    <tr>
                        <td>狀態 :</td>
                        <td>
                            <input type="radio" name="mode" id="mode_in" value="1">畢業
                            <input type="radio" name="mode" id="mode_in" value="2">肄業
                            <input type="radio" name="mode" id="mode_in" value="3">就學
                        </td>
                    </tr>
                    <tr>
                       <td>證照 :</td>
                        <td><textarea name="License" id="License_in" cols="30" rows="10"></textarea></td>
                    </tr>
                </table>
                    <button id='updata_1' style="padding: 20px 10px;  float: right;">更新</button>
                    <!-- <button class='out' style="padding: 20px 10px;  float: right;">退出</button> -->
                </div>

                <div>
                    <textarea name="auto"_in id="auto_in" rows="15" style="font-size:20px; width: 510px;"></textarea>
                    <button id='updata_2' style="padding: 20px 10px;  float: right;">更新</button>
                    <!-- <button class='out' style="padding: 20px 10px;  float: right;">退出</button> -->
                </div>
                <button class='out' style="padding: 20px 10px;  float: right;">退出</button>
        </div>
              
         </div>
    </div>
    <div id="top" >
            <a href="./logout.php" id="mySign" >Home</a>
        <div id='back' > 
            <div id='head'>
                <?php
                $r = find('files',['sh'=>1]);
                $a  = substr($r['path'],1);
                echo "<img src='$a' id='head_img' style='width:150px;height:190px;'>"
                ?>
            </div>
        </div>
    </div>
    <div id='main'>
        <div id="left">
        <table>
            <tr>
                <td><a href="?do=data" id="self_data">個人資料管理</a></td>
            </tr>
            <tr>
                <td><a href="?do=file_data" id="file_data" >履歷表管理</a></td>
            </tr>
            
            <tr>
                <td><a href="?do=file_img">圖片管理</a></td>
            </tr>
        </table>
    </div>
    <div id="center">
        
            <?php
                $do = (!empty($_GET['do']))?$_GET['do']:"data";
                $path ="./admin/".$do.".php";

                if(file_exists($path)){
                    include ($path);
                }else{
                    include "./admin/asd.php";
                }
            ?>
        
    </div>
    
    </div>

    <script src="./js/jquery-3.4.1.min.js"></script>
    <script>

    //    $(".imgid").on("click",function(){
    //         console.log("dsasd")
    //        let id  = $(this).data('photo');
    //        $("#head_img").attr("src",id)
        

    //    })



        var table = "";
        var table_in ="";
        $("#modal").hide();
        $("#content div").eq(0).hide();
        $("#content div").eq(0).siblings().hide();

        $("#resume_list div").on("click",function(){
             let list =  $(this).index()
             $("#content div").eq(list).show()
             $("#content div").eq(list).siblings().hide();

             if(list==0){
                 table = "job";
                 console.log(table)
             }else if(list==1){
                 table = "school";
                 console.log(table);
             }else{
                table = "auto";
                 console.log(table);
             }

        })
       
    

        function del(id){
             $.post("./api/delete.php",{id},function(res){
                 console.log(res)
            })
            query("data");
        }

 

        query("data");
        function query(c1){
                $.get("./api/get.php",{c1},function(res){
                        console.log(res);
                    let res_data = JSON.parse(res);
                        console.log(res_data) ;
                     
                        $("#name").val(res_data.name);
                        $("#addr").val(res_data.addr);
                        $("#tel").val(res_data.tel);
                        $("#birthday").val(res_data.birthday);
                        $("#email").val(res_data.email);
                        $("#des").val(res_data.des);
                
                // $("#display_r").on("click",function(){
                //            data()
                //     $.post("./api/add.php",{"table":job,data},function(res){
                //         console.log(res) ;
                //     })
                // })
                $("#submit_re").on("click",function(){ 
                   
                
                    console.log("dsadas")
                })

                $(".sh").on("click",function(){
                        let sh = $(this).val()  
                        
                        $.post("./api/resume_sh.php",{sh},function(res){
                            console.log(res)
                        })
                   
                })         
               
                $(".edit-user").on("click",function(){
                    $("#modal").show();
                    let id  = $(this).data('edit');

                    $("#content_in div").eq(0).hide();
                    $("#content_in div").eq(0).siblings().hide();

                    $("#resume_list_in div").on("click",function(){
                         let list_in =  $(this).index()
                         $("#content_in div").eq(list_in).show()
                         $("#content_in div").eq(list_in).siblings().hide();

                         if(list_in=="" || list_in==0){
                                table_in = "job";
                                console.log(table_in)
                            }else if(list_in==1){
                                table_in = "school";
                                console.log(table_in);
                            }else{
                               table_in = "auto";
                                console.log(table_in);
                            }
                    
                         
                          
                         
                
                    $.get("./api/get_data.php",{"c1":id, table_in},function(data){
                         console.log(data)
                        let stu_data = JSON.parse(data)
                        console.log(stu_data) 
                       

                    $("#resume_in").val(stu_data.resume)
                    $("#jobname_in").val(stu_data.jobname)
                    $("#jobtype_in").val(stu_data.jobtype)
                    $("#location_in").val(stu_data.location)
                    $("#Million_in").val(stu_data.Million)
                    $("#thousand_in").val(stu_data.thousand)
                    $("#sh").val(stu_data.sh)
               

                                           
                    $("#school_in").val(stu_data.school)
                    $("#depname_in").val(stu_data.depname)
                    $("#mode_in").val(stu_data.mode)
                    $("#License_in").val(stu_data.License)

                    $("#auto_in").val(stu_data.auto)
                 
                    })
                    

                    $("#updata").on("click",function(){
                        $("#content_in div").eq(0).hide();
                        
                        let data=[ $("#resume_in").val(), $("#jobname_in").val(), 
                                $("#jobtype_in").val(), $("#location_in").val(), $("#Million_in").val(), $("#thousand_in").val()]
                        
                        $.post("./api/updata_data.php",{table_in,id,data},function(res){
                            console.log(res)
                        })
                    })

                    $("#updata_1").on("click",function(){
                        $("#content_in div").eq(1).hide();
                           
                        let data=[ $("#school_in").val(), $("#depname_in").val(), 
                                $("#mode_in").val(), $("#License_in").val()]
                        
                        $.post("./api/updata_data.php",{table_in,id,data},function(res){
                            console.log(res)
                        })
                    })

                    $("#updata_2").on("click",function(){
                        $("#content_in div").eq(2).hide();
                           
                        let data=[$("#auto_in").val()]
                        
                        $.post("./api/updata_data.php",{table_in,id,data},function(res){
                            console.log(res)
                        })
                    })
                   

                }) 
                })

               

                 $(".del-user").on("click",function(){
                    let id  = $(this).data('del');
                    console.log(id);
                    del(id)
                    window.location.href =  './admin.php?do=file_data';
                 
                })

                })
            
        }

        $("#self_data").on("click",function(){
                query("data");
            })

        $(".out").on("click",function(){
            window.location.href =  './admin.php?do=file_data';
        })   
      
            
          
            $("#content").hide();
            $("#resume_list").hide() ;
            $("#add").on("click",function(){
                $("#content_in").hide();
                $("#content").show()  ;
                $("#resume_list").show();
                $(".div_add").hide();
                $("#add").hide();
                $("#submit").hide();

                
            $("#insert").on("click",function(){
                $("#content div").eq(0).hide();
                $("#insert").hide();
                let a = $("#resume").val()
                console.log(a)
                let data = [$("#resume").val(), $("#jobname").val(), $("#jobtype").val(), 
                             $("#location").val(),$("#Million").val(),$("#thousand").val()];
                            
                $.post( "./api/add.php", {table,data}, function(res){
                    console.log(res)
                })

            })
                
            $("#insert_1").on("click",function(){
                $("#content div").eq(1).hide();
                $("#insert_1").hide();

                let data = [$("#school").val(),$("#jorname").val(),$("#mode").
                            val(),$("#License").val()];

                $.post( "./api/add.php", {table,data}, function(res){
                    console.log(res);
                })

            })
                
            $("#insert_2").on("click",function(){
                $("#content div").eq(2).hide();
                $("#insert_2").hide();

                let data = [$("#auto").val()];

                $.post( "./api/add.php", {table,data}, function(res){
                    console.log(res);
                })

            })
          

        })
           

    </script>
</body>
</html>