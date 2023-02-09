<style>
    .set_img{height: 50px; width: 50px; border-radius: 4px; padding: 5px; border: 1px solid #ddd; }
    .divPadding{padding: 0;}
    .custom_edit_btn{width: 100px;}
    .custom_btn{width: 56%;height: 20px;padding-top: 0px;padding-bottom:20px;text-align: center}
    .action_btn{width: 56%;height: 20px;padding-top: 0px;text-align: center}
    .green{color: green;}
    .red{color: red;}
    .set_content_w{width: calc(100% - 100px); }
    .set_search_w{width: 100px;}
    .bootstrap-select>.dropdown-toggle{border-radius: 0px;}
    .dropdown-menu.inner{height: 150px}
    .set_search_main_d .col-xs-3.seachering_divs{width: 12.5%; padding: 0 2px;}
    .set_search_main_d .col-xs-3.seachering_divs .bootstrap-select>.dropdown-toggle {padding-left: 5px;}
    .genders {padding-left: 0px;}
    .myBar {
      width: 1%;
      height: 6px;
      background-color: #61bd65;
      margin-top: 5px;
    }
    .myBarNew{
     width: 100%;
      height: 6px;
      background-color: #61bd65;
      margin-top: 5px;  
      margin-bottom: 5px;  
    }
    table.dataTable{width: 100% !important;}

        /* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  /*z-index: 1;  Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 50%;
  max-width: 300px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 22%;
  max-width: 700px;
  text-align: center;
  color: black;
  padding: 6px;
  height: 30px;
  margin-bottom: 10px; 
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 40px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/select_box/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/select_box/select2.min.css"/>
    <style type="text/css">@media (max-width: 1199px) {.set_overflow_w{width: 1200px;}}</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Manage Find Doctors
            
        </h1>
        <ol class="breadcrumb">
                <li><a href="<?= base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Manage Find Doctors</li>
        </ol>
    </section>
   
    <!-- Main content -->
    <section class="content">          
        <div class="row">
            <div class="col-xs-12">
                <div class="box col-xs-12 divPadding">
                    <div class="box-body col-xs-12 col-sm-12">
                        <div class="col-sm-12 success">
                            <?= $this->session->flashdata('message');?>
                        </div>
                        <div class="col-xs-12" id="success_msg" style="display: none;"></div>
                        <div class="col-sm-12 divPadding" style="overflow: auto;">
                                <div class="col-xs-12 divPadding set_overflow_w hidden-xs" id="">
                            <table class="table table-condensed set_overflow_w" id ="cg">
                                <thead>
                                     <tr>
                                      <td><b>Sr. No.</b></td>
                                      <td><b>Doctor Name</b></td>
                                      <td><b>Add Date & Time</b></td>
                                      <td><b>Status</b></td>
                                      <td><b>Action</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $sr = 1; foreach($doctorData as $val){?>
                                    <tr>
                                      <td><?= $sr;?></td>
                                      <td><?= $val['doctorName'];?></td>
                                      <td><?= date('jS M Y h:i A',$val['addedDate']);?></td>
                                      <td>
                                        <?php if ($val['status'] == 1) { ?>
                                            <soan class="label label-success">Activated</span>
                                        <?php } elseif ($val['status'] == 2) { ?>
                                            <soan class="label label-danger">Deactivated</span>
                                        <?php } ?>
                                      </td>
                                      <td><a href="<?= base_url('admin/editFindDoctor/'.base64_encode($val['id']));?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a></td>
                                    </tr>
                                  <?php $sr++; }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        var ww = $(document).width();
        if (ww > 767) {
            $('#cg').DataTable( {
                lengthMenu: [
                    [25, 50, 100, 200, -1],
                    [25, 50, 100, 200, "All"]
                ],
                //iDisplayLength: 100,
                dom: 'Bfrtip',
                "pagingType": "full_numbers",
                "ordering": true,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print', 'pageLength'
                ]
            });
        } else {

            $('#cg').DataTable({
                "pagingType": "full_numbers",
               aLengthMenu: [
                    [25, 50, 100, 200, -1],
                    [25, 50, 100, 200, "All"]
                ],
                iDisplayLength: 100,
                "ordering": false,
            });
        }


        setTimeout(function() {
            $('.success').hide();
        }, 2000);

    });


    $(function() {
        $( "#start_date, #end_date" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
            yearRange: 'c-100:c',
            autoclose: true,
            //startDate: 'd' 
        });
    });

</script>


<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<!-- for downloading -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js
"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js
"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>


<script src="<?php echo base_url(); ?>assets/select_box/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/select_box/select2.full.min.js" type="text/javascript"></script>