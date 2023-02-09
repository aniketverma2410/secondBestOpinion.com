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
        <h1>Edit Find Doctor
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url('admin/findDoctor');?>"></i> Manage Find Doctor</a></li>
            <li class="active">Edit Find Doctor</li>
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
               <div class="box box-primary col-xs-12 divPadding">
                    <div class="box-header with-border form-group"><h3 class="box-title">Edit Find Doctor From</h3></div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" role="form" id="myForm" action="<?= base_url('admin/editFindDoctor/'.base64_encode($doctorData['id']));?>" enctype="multipart/form-data">
                        <div class="col-xs-12 col-sm-12 divPadding">
                            <div class="form-group col-sm-6">
                                <label for="name">Doctor Type <span class="red">*</span></label>
                                <div>
                                <input type="radio" id="" name="doctorType" required="" value="1" <?= ($doctorData['doctorType'] == 1)?'checked':'';?>>  Speciality&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="" name="doctorType" required="" value="2" <?= ($doctorData['doctorType'] == 2)?'checked':'';?>>  Doctor
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="name">Doctor Name<span class="red">*</span></label>
                                <input type="text" class="form-control" name="doctorName" id="doctorName" required="" value="<?= $doctorData['doctorName'];?>" placeholder="Doctor Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 divPadding">
                            <div class="form-group col-sm-6">
                                <label for="name">About Doctor <span class="red">*</span></label>
                                <textarea class="form-control" name="aboutDoctor" placeholder="About Doctor"><?= $doctorData['aboutDoctor'];?></textarea> 
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="name">Qualifcation<span class="red">*</span></label>
                                <input type="text" class="form-control" name="qualifcation" id="qualifcation" required="" value="<?= $doctorData['qualification'];?>" placeholder="Qualifcation">
                            </div>
                          </div>
                           <div class="col-xs-12 col-sm-12 divPadding">
                            <div class="form-group col-sm-6">
                                <label for="name">Publications<span class="red">*</span></label>
                                <input type="text" class="form-control" name="publications" id="publications" required="" value="<?= $doctorData['publications'];?>" placeholder="Publications">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="name">Work Exeperience<span class="red">*</span></label>
                                <input type="text" class="form-control" name="exeperience" id="exeperience" required="" value="<?= $doctorData['exprience'];?>" placeholder="Work Exeperience">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="name">Status </label>
                                <select class="form-control" name="status" id="status">
                                  <option value="1" <?php if($doctorData['status'] == 1){echo 'selected';}?>>Activated</option>
                                  <option value="2" <?php if($doctorData['status'] == 2){echo 'selected';}?>>Deactivated</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="box-footer col-xs-12">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                        </div>
                    </form>
                </div> <!-- /.box -->
            </div>  <!--/.col (left) -->
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
</script>

<script src="<?php echo base_url(); ?>assets/select_box/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/select_box/select2.full.min.js" type="text/javascript"></script>