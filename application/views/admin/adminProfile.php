<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/select_box/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/select_box/select2.min.css"/>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdlb2k17PxjKjOcvWMhrY1GobweAGp4Xs&libraries=places"></script>
<style type="text/css">
    .divPadding{padding: 0px;}
    .error{color: red; font-size: 12px;}
    .bootstrap-select>.dropdown-toggle{border-radius: 0px;}
    .dropdown-menu.inner{height: 200px}
    .set_w_admin {
        width: 200PX;
        border: 1px solid #ddd;
        padding: 15px 0 0;
        margin: 5px;
    }
    .loader_img{
        height: 30px;
        position: absolute;
        margin-top: -32px;
        right: 30px;
        display: none;
    }
    .trash{color: red; cursor: pointer;}
    .set_w_admin img{height: 200px; width: 100%; padding: 0 15px;}

    .set_success{
        padding: 5px;
        background: #f1f9f9;
        margin-top: 15px;
    }
    .success{float: right; color: green;}
    .progress.col-xs-12.divPadding{
        height: 5px; margin: 0px;
    }
    .set_uploaded_img{
        padding: 5px;
        margin-top: 15px;
        background: #eee;
        border-bottom: 5px solid #5bc0de;
    }
    .red{color: red; font-size: 12px; }
    .active_img{background: #00a65a;}

</style>
<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Admin Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Admin Profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                <div class="error_validator" id="hide_data">
                    <?php echo validation_errors(); if($this->session->flashdata('message')) echo $this->session->flashdata('message'); ?> 
                </div>


                <!-- general form elements -->
                <div class="box box-primary col-xs-12 divPadding">
                    <div class="box-header with-border form-group"><h3 class="box-title">Admin Profile</h3></div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" role="form" id="myForm" action="<?= base_url('admin/adminProfile/'.$data['id']);?>" enctype="multipart/form-data">
                       <div class="col-xs-12 col-sm-12 divPadding">
                                    <div class="form-group col-sm-4">
                                        <label for="name">Name <span class="error">*</span></label>
                                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?= @$data['name']; ?>">
                                        <span class="error" id="err_name"></span>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="position">Email-Id</label>
                                        <input type="text" class="form-control" id="email" placeholder="Email-Id" name="email" autocomplete="off" value="<?= @$data['email']; ?>" readonly>
                                        <span class="error" id="err_email"></span>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="position">Password <span class="error">*</span></label>
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" autocomplete="off" value="<?= base64_decode(@$data['password']); ?>">
                                        <span class="error" id="err_password"></span>
                                    </div> 
                                </div>

                                <div class="col-xs-12 col-sm-12 divPadding">
                                    <div class="col-xs-12 col-sm-4 divPadding">
                                        <div class="form-group col-md-12">
                                            <label for="position">Upload Image</label>
                                            <input type="file" class="form-control" id="thumbnail" name="img" onchange="ImageChange(this)">
                                            <span class="error" id="err_user_profile"></span>
                                            <input type="hidden" name="StoredImg" value="<?= @$data['image']; ?>" id="file_name_user_profile">

                                            <div class="col-xs-12 divPadding" id="displayImagesShow" style="margin-top: 5px;">
                                                <?php if(!empty($data['profile'])){?>
                                                <div style="border: 2px solid #dedadad9;padding: 5px;width: 160px;"><img id="blah" src="<?= base_url(); ?>assets/adminImages/profile/<?= $data['profile']; ?>" alt="<?= $data['profile']; ?>" width="100%" height="100" /><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div><p id="deleteFile"><span onclick="deletefile()"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></span>&nbsp;&nbsp;<span id="message" style="color:green;">Success</span></p><div id="myBar" style="background-color: green;width: 100%;height: 10px"></div></div>
                                            <?php }else{?>
                                                <div style="border: 2px solid #dedadad9;padding: 5px;width: 160px;"><img id="blah" src="<?= base_url(); ?>assets/adminImages/profile/Administrator.png" alt="your image" width="100%" height="100" /><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div><p id="deleteFile"><span onclick="deletefile()"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></span>&nbsp;&nbsp;<span id="message" style="color:green;">Success</span></p><div id="myBar" style="background-color: green;width: 100%;height: 10px"></div></div>
                                            <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                        <div class="box-footer col-xs-12">
                            <button type="submit" class="btn btn-primary" id="btnDocument">Update</button>
                        </div>
                    </form>
                </div> <!-- /.box -->
            </div>  <!--/.col (left) -->
        </div> <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<script type="text/javascript">

function ImageChange(input){
  $('#loaderShow').css('display','block');
  if (input.files && input.files[0]) {
  // if value is images
  var  file = input.files[0].name;
  var  ext = file.split(".");  
  ext = ext[ext.length-1].toLowerCase();      
  var arrayExtensions = ["jpg" , "jpeg", "png", "bmp", "gif"];
  var exactSize = getFileSize(input.files[0].size);
  var lastextType = exactSize.substr(exactSize.length - 2);
  var res = exactSize.split(".");
  var kbcheck = '';
  if(jQuery.isEmptyObject(res[1]) != true){
  kbcheck = res[1].split("&");
  }
  if(lastextType == 'KB'){
  var res = res[0];
  }else if(lastextType == 'MB'){
  var res = res[0]*1024;
  var res = +(res)+ + +(kbcheck[0]);
  }else {
  var res = (res[0]*1024)*1024;
  }
  if(res > 500){
  alert('!Oops file size to larger. can\'t be upload more than 500 KB');
  deletefile();
  }
  if($.inArray(ext, arrayExtensions) == -1) {
  console.log(res);
  }else{ 
  var reader = new FileReader();
  var image = '';
  reader.onload = function (e) {
  $('#blah').attr('src', e.target.result);
   var exactSize = getFileSize(input.files[0].size);
   $('#displayImagesShow').html('<div style="border: 2px solid #dedadad9;padding: 5px;width: 160px;"><img id="blah" src="'+e.target.result+'" alt="your image" width="100%" height="100" /><div id="myProgress"></div><p id="deleteFile"><span onclick="deletefile()"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></span>&nbsp;&nbsp;<span id="message" style="color:green;"></span><span id="videoSize" style="float:right; color:black;">'+exactSize+'</span></p><div id="myBar" style="background-color:green;width:100%;height:10px"></div></div>');
  $('input[name="sessionFileSize"]').val(exactSize);
  move();
  $('#displayImagesShow').css('display','block');
  $('#showFile').css('display','block');
  $('#displayError3').css('display','none');
  // console.log(e.target.result)
  };
  reader.readAsDataURL(input.files[0]);
  }
  }
  }
  function getFileSize(videoSize){
  var fSExt = new Array('Bytes', 'KB', 'MB', 'GB'),
  i=0;
  while(videoSize > 900){
  videoSize /=1024;i++;
  }
  return exactSize = (Math.round(videoSize*100)/100)+'&nbsp;'+fSExt[i];
  }
  function deletefile(){
  // var sessionImage = "<?php //$this->session->unset_userdata('thumbnail_file'); ?>";  
  $("#thumbnail_file").val(null);
  $("#thumbnail").val(null);
  $("#displayImagesShow").hide();
  } 

  function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
  if (width >= 100) {
  clearInterval(id);
  $('#message').text('Success');
  } else {
  width++; 
  elem.style.width = width + '%'; 
  }
  }
  }
    setTimeout(function() {
        $('#hide_data').hide();
    }, 8000);

    $(function() {
        $( "#set_date" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
            yearRange: 'c-100:c',
            autoclose: true,
            startDate: 'd' 
        });
    });

    $('#btnDocument').click(function(){
        var doc = $('#document').val();
        if(doc == ''){
             $('#error_document').text('This Field is Required.').show();
            return false;
        }else{
           $('#error_document').text('').hide(); 
        }
    })
</script>

<script src="<?php echo base_url(); ?>assets/select_box/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/select_box/select2.full.min.js" type="text/javascript"></script>