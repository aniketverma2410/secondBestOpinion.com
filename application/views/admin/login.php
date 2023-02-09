<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?= $title;?> | <?= PROJECT_NAME;?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/website/new_img/favicon.ico" type="image/x-icon"> 
    <link href="<?php echo base_url(); ?>assets/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        @media (min-width: 200px) and (max-width: 499px) {
            .login-box, .register-box{margin: 200px 30px 0;}
            .ff{font-size: 28px !important; color: #fff;}
            .login-box, .register-box{width: calc(100% - 60px); }
            .ff{font-size: 23px !important; color: #fff;}
            .logo_d a.flt_l{text-align: center;}
        }
        @media (min-width: 500px)  and (max-width: 767px) {
            .login-box, .register-box{margin: 200px 30px 0;}
            .ff{font-size: 23px !important; color: #fff; vertical-align: text-top;}
            .login-logo{ width: 100%; margin: 0 auto; text-align: right !important;}
            .logo_d img{height: 40px;}
            form{width: 375px; margin: 0 auto;}
            .logo_d a.flt_l{float: left;}

        }
        @media (min-width: 768px)  and (max-width: 991px) {
            .login-box, .register-box{width: 415px; margin: 200px 30px 0;}
            .login-logo{ width: 100%; margin: 0 auto; text-align: right !important;}
            .ff{font-size: 28px !important; color: #fff;}
            .logo_d img{height: 60px;}
            form{width: 375px; margin: 0 auto;}
            .logo_d a.flt_l{float: left;}
        }
        @media (min-width: 992px) {
            .login-logo{ width: 300px; margin: 0 auto;}
            .login-box, .register-box{width: 415px; margin: 13% 30px 0;}
            .ff{font-size: 28px !important; color: #fff;}
            .logo_d img{height: 60px;}
            form{width: 375px; margin: 0 auto;}
            .logo_d a.flt_l{float: left;}
        }
        

        
        .login-logo a, .register-logo a {color: #fff;}
        .login-page, .register-page{background: url('<?= base_url();?>assets/website/img/excellence/child-care.jpg'); background-position: 100% 100%; background-size: cover;}
        
        .login-box-body, .register-box-body{
            background-color: #fff;
            border-radius: .25rem;
            box-shadow: 0 1px 0 rgba(0,0,0,.25);
            /*padding: 3rem 2rem 8rem;*/
            margin: 0 auto 2rem;
            position: relative;
            border: 1px solid #e8e8e8;
        }
        .login-box-msg{
            color: #2c2d30;
            font-size: 16px;
            padding-left: 0px !important;
            text-align: left;
            line-height: 1.5;
        }
        .login-logo, .register-logo{margin-bottom: 0px;}
        .form-control{height: 44px; }
        .form-control-feedback{padding-top: 6px;}
        
        .btn_large:hover, .btn_large, .btn_large:active, .btn_large:focus {
            padding: 10px 32px 10px;
            font-size: 20px;
            border: 1px solid #919193;
            background: #7BA1F5;
            color: #fff;
            width: 100%;
            border-radius: .25rem !important;
            font-weight: bold;
        }

        .has-feedback .form-control{
            padding: .75rem;
            border: 1px solid #919193;
            border-radius: .25rem !important;
            color: #2c2d30;
            transition: box-shadow 70ms ease-out,border-color 70ms ease-out;
            box-shadow: none;
            height: 44px;
            color: #2c2d30;
            font: 13.3333px Arial;

        }
        
        .set_place_h{color: #9E9193;}

        ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
          color: #9E9193 !important;
        }
        ::-moz-placeholder { /* Firefox 19+ */
          color: #9E9193 !important;
        }
        :-ms-input-placeholder { /* IE 10+ */
          color: #9E9193 !important;
        }
        :-moz-placeholder { /* Firefox 18- */
          color: #9E9193 !important;
        }

        label span{font-size: 16px; font-weight: 400;}
        .set_footer{background: transparent; padding: 5px 15px; position: fixed; bottom: 0; color: #fff;}
        .logo_d{
            position: absolute;
            top: 0;
            padding: 15px;
            background: rgba(0, 0, 0, 0.3);
            box-shadow: 0 1px 1px rgba(0,0,0,.1);
            text-align: center;
        }
        
        
    </style>
  </head>
  
  <body class="login-page">
    <div class="col-xs-12 col-sm-12 logo_d">
        <a href="#" class="flt_l">
        <!-- <img src="<?= base_url(); ?>assets/website/img/new_images/mmcAsset 1@2x.png" alt="logo-black"> -->
        <h3 style="margin-top: 12px;margin-bottom: 6px;font-style: bold;font-weight: bold;margin-left: 17px;color: white;"><img src="<?= base_url();?>assets/website/img/logo.png" alt="logo" style="height: 40px;width: 200px"></h3>
    </a>
    <div class="login-logo" style="">
            <!--img src="<?php echo base_url(); ?>assets/images/logo.png" /-->
            <a href="<?php echo base_url('admin'); ?>" class="ff"><b>Admin Panel</b> </a>
        </div>
    </div>
    <div class="login-box">
      
      <div class="login-box-body">
        
        <!-- /.login-logo -->
        <div class="col-xs-12">&nbsp;</div>
        
        <?php echo validation_errors(); ?>
        <?php if($this->session->flashdata('login_message')){
              echo $this->session->flashdata('login_message');
          }
        ?>
        <?php echo form_open('admin'); ?>
            <p class="login-box-msg">Enter your <b>Email-id</b> and <b>Password</b>.</p>
            <div class="form-group has-feedback">
                <?php echo form_input(array('type'=>'text','name'=>'user_name','class'=>'form-control','required'=>true,'value'=>set_value('user_name'),'placeholder'=>'Email-id')); ?>
            
                
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <?php echo form_input(array('name'=>'password','class'=>'form-control','type'=>'password','required'=>true,'value'=>set_value('password'),'placeholder'=>'Password')); ?>
            
                 <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
       <!--  <div class="form-group has-feedback">
            <div class="g-recaptcha" data-sitekey="6LeHS8IUAAAAABQ61zOE5N6ytFKqa4mCRUVGH9dk"></div>
            <span class="input_err" id="captcha_error" style="color: red;"></span>
          </div>  -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat btn_large">Sign In</button>
                   
                </div><!-- /.col -->
            </div>
        <?php echo form_close();?>
         <div class="col-xs-12">&nbsp;</div>
                    
            <div class="col-xs-12">&nbsp;</div>
      </div><!-- /.login-box-body -->



    </div><!-- /.login-box -->

    <div class="col-xs-12 col-sm-12 divPadding set_footer">
        <center>Copyright © 2019 <?= PROJECT_NAME;?> All Rights Reserved.</center>
    </div>
    <!-- jQuery 2.1.3 -->
    <script>
          //Captcha
  window.onload = function() {
      var $recaptcha = document.querySelector('#g-recaptcha-response');

      if($recaptcha) {
          $recaptcha.setAttribute("required", "required");
      }
  };
  /////////////////////////////
    </script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assets/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  
  <!-- captcha -->
    <script src="https://www.google.com/recaptcha/api.js?onload=headerCaptchaOnloadCallback&render=explicit" async defer></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
   
  </body>
</html>
