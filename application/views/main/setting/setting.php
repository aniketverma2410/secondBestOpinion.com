<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/select_box/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/select_box/select2.min.css"/>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdlb2k17PxjKjOcvWMhrY1GobweAGp4Xs&libraries=places&callback=initialize" async defer></script>
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
    .tbCondition {
      border-top-style: hidden;
      border-right-style: hidden;
      border-left-style: hidden;
      border-bottom-style: hidden;
      background-color: white;
      }
</style>
<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Manage Settings
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Manage Settings</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="error_validator" id="hide_data">
                    <?php echo validation_errors(); if($this->session->flashdata('message')) echo $this->session->flashdata('message'); ?> 
                </div>
            <!-- left column -->
            <div class="col-md-6">
               <div class="box box-primary col-xs-12 divPadding">
                    <div class="box-header with-border form-group"><h3 class="box-title">Header From</h3></div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" role="form" id="myForm" action="<?= base_url('admin/logo');?>" enctype="multipart/form-data">
                        <div class="col-xs-12 col-sm-12 divPadding">
                                    <input type="hidden" class="form-control" id="id"  name="id" value="<?= $logoData['id'];?>">
                                    <div class="form-group col-sm-6">
                                        <label for="name">Favicon Icon</label>
                                        <input type="file" class="form-control" id="faviconIcon" name="faviconIcon">
                                        <input type="hidden" class="form-control" id="storedFavicon"  name="storedFavicon" value="<?= $logoData['favicon'];?>">
                                        <?php if(!empty($logoData['favicon'])){ ?>
                                            <div style="border: 2px solid #dedadad9;padding: 5px;width: 160px;" class="zoomin"><img id="blah" src="<?= base_url('assets/Images/logo/'.$logoData['favicon']);?>" alt="your image" style="width:100%;height: 50px;"/><div id="myBar" style="background-color:green;width:100%;height:5px;margin-top: 5px;"></div><p id="deleteFile"><span id="message" style="color:green;">Success</span><span id="videoSize" style="float:right; color:black;"></span></p></div>
                                        <?php }?>  
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="name">Website Logo</label>
                                        <input type="file" class="form-control" id="logo" name="logo">
                                        <input type="hidden" class="form-control" id="storedLogo"  name="storedLogo" value="<?= $logoData['logo'];?>">
                                        <?php if(!empty($logoData['logo'])){ ?>
                                            <div style="border: 2px solid #dedadad9;padding: 5px;width: 160px;" class="zoomin"><img id="blah" src="<?= base_url('assets/Images/logo/'.$logoData['logo']);?>" alt="your image" style="width:100%;height: 50px;"/><div id="myBar" style="background-color:green;width:100%;height:5px;margin-top: 5px;"></div><p id="deleteFile"><span id="message" style="color:green;">Success</span><span id="videoSize" style="float:right; color:black;"></span></p></div>
                                        <?php }?> 
                                    </div>
                        </div>
                        
                        <div class="box-footer col-xs-12">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                        </div>
                    </form>
                </div> <!-- /.box -->
            </div>  <!--/.col (left) -->

            <!-- left column -->
            <div class="col-md-6">
               <div class="box box-success col-xs-12 divPadding">
                    <div class="box-header with-border form-group"><h3 class="box-title">Contact Information</h3></div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" role="form" id="myForm" action="<?= base_url('admin/contactInformation');?>">
                        <div class="col-xs-12 col-sm-12 divPadding">
                                    <input type="hidden" class="form-control" id="id"  name="id" value="<?= $contactData['id'];?>">
                                    <div class="form-group col-sm-6">
                                        <label for="name">Address <span class="error">*</span></label>
                                        <input type="textarea" class="form-control" id="address" name="address" required="" placeholder="Address" value="<?= $contactData['address'];?>">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="name">Email Id <span class="error">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" required="" placeholder="Email Id" value="<?= $contactData['email'];?>">
                                    </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 divPadding">
                                    <div class="form-group col-sm-6">
                                        <label for="name">Contact Number <span class="error">*</span></label>
                                        <input type="text" class="form-control" id="number" name="number" required="" placeholder="Contact Number" value="<?= $contactData['number'];?>">
                                    </div>
                        </div>
                        
                        <div class="box-footer col-xs-12">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                        </div>
                    </form>
                </div> <!-- /.box -->
            </div>  <!--/.col (left) -->

             <div class="col-md-6">
               <div class="box box-danger col-xs-12 divPadding">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" role="form" id="myForm" action="<?= base_url('admin/socialMedia');?>">
                         <div class="box-header with-border form-group"><h3 class="box-title">Social Media Links</h3></div>
                        <div class="col-xs-12 col-sm-12 divPadding">
                                    <input type="hidden" class="form-control" id="id"  name="id" value="<?= $socialMedia['id'];?>">
                                    <div class="form-group col-sm-6">
                                        <label for="name">Facebook<span class="error">*</span></label>
                                        <input type="text" class="form-control" id="facebook" placeholder="Facebook Link" name="facebook" required="" value="<?= $socialMedia['facebook'];?>">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="name">Twitter<span class="error">*</span></label>
                                        <input type="text" class="form-control" id="twitter" placeholder="Twitter Link" name="twitter" required="" value="<?= $socialMedia['twitter'];?>">
                                    </div>
                                    
                        </div>
                        <div class="col-xs-12 col-sm-12 divPadding">
                                <div class="form-group col-sm-6">
                                        <label for="name">Linked In<span class="error">*</span></label>
                                        <input type="text" class="form-control" id="linkedIn" placeholder="Linked In Link" name="linkedIn" required="" value="<?= $socialMedia['linkedIn'];?>">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="name">Gamil<span class="error">*</span></label>
                                        <input type="text" class="form-control" id="gamil" placeholder="Gamil Link" name="gmail" required="" value="<?= $socialMedia['gmail'];?>">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="name">Instagram<span class="error">*</span></label>
                                        <input type="text" class="form-control" id="instagram" placeholder="Instagram Link" name="instagram" required="" value="<?= $socialMedia['instagram'];?>">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="name">YouTube<span class="error">*</span></label>
                                        <input type="text" class="form-control" id="youtube" placeholder="YouTube In Link" name="youtube" required="" value="<?= $socialMedia['youtube'];?>">
                                    </div>
                        </div>
                        
                        <div class="box-footer col-xs-12">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                        </div>
                    </form>
                </div> <!-- /.box -->
            </div>  <!--/.col (left) -->
        </div> <!-- /.row -->

    </section>
    <!-- /.content -->
</div>

<script type="text/javascript">
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
$('#empId').keyup(function(){
  var mobile = $(this).val();
  var id = '';
  var masterId = (id != '') ? id : '';
  $.ajax({
      type: "POST",  
      url: "<?php echo base_url('User/checkEmployeeMobile'); ?>",  
      data: { 'mobile' : mobile,'id':masterId},
      success: function(mess){
        console.log(mess);
        if(mess == 1){
          $('#errEmpId').text('Employee Id must be unique.');
          $('#submit').attr('disabled','disabled');
        }else{
          $('#errEmpId').text('');
          $('#submit').removeAttr('disabled','disabled');
        }
      } 
    });
});
</script>

<script src="<?php echo base_url(); ?>assets/select_box/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/select_box/select2.full.min.js" type="text/javascript"></script>