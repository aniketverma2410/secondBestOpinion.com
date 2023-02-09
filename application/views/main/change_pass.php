<style type="text/css">
    #sections .box{ border-left: 1px solid #3c8dbc;border-right: 1px solid #3c8dbc;border-bottom: 1px solid #3c8dbc;

    }
    .form-control{
        height:0%;
        }
  </style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Change Admin Password</h1>
        
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <!-- small box -->
                <div class="box box-primary">
                <!-- form start -->
                    <?php echo form_open_multipart('admin/changeAdminPassword'); ?>
                        <div class="box-body">
                           <div class="error_validator">
                            <?php echo validation_errors(); ?>
                            <?php if($this->session->flashdata('message'))
                                  echo $this->session->flashdata('message');
                            ?> 
                            </div>
                            <div class="col-xs-12 col-sm-12" id="error"></div>

                            <!-- employee id -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">New Password *</label>
                                <?php echo form_input(
                                    array(
                                            'name'              => 'new_pass',
                                            'class'             => 'form-control',
                                            'placeholder'       => 'New Password',
                                            'value'             => set_value('new_pass'),
                                            'type'              => 'password',
                                            'required'          => true,
                                            'id'                => 'new_pass'
                                        )
                                                    );
                                ?>
                                <span id="" class="">
                                    Input Password [7 to 25 characters which contain at least one numeric digit and a special character].
                                </span><br>
                                <span id="err_pass" class="user_err"></span>
                            </div> <!-- name / -->
                        </div>

                        <div class="box-footer">
                            <?php echo form_submit(array('value' => 'Submit', 'class' => 'btn btn-primary', 'id' => 'add')); ?>
                        </div>
                    <?php echo form_close();?>
                </div><!-- /.box -->
            </div><!-- ./col -->  
        </div><!-- /.row -->
        <!-- Main row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
     



<!-- check validation -->
<script type="text/javascript">
    setTimeout(function(){
        $('#err_pass').hide();
    },3000);

    $("#m_no1").keypress(function (e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            $("#err_mobile").addClass('alert alert-danger').html("Digits Only").show();
            setTimeout(function() { $("#err_mobile").hide(); }, 2000);
            return false;
        }
    });

    $('#err_pass').hide();

    $('#add').click(function(){

        var pass = $('#new_pass').val();

        var paswd = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,25}$/;
        
        if(pass.match(paswd)) { 
            $('#err_pass').html('&nbsp;').show();
            return true;  
        } else {   
            $('#err_pass').css('color', 'red').html('Wrong Password! Please Try again.').show();
            return false;  
        }  
    });
</script>