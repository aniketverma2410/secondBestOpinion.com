<?php $login_user = $this->session->userdata('login_type'); ?>
<style type="text/css">
    .m-widget1__item .m-widget1__desc { color: #9699a2; }
    .m-widget1__item { border-bottom: 0.07rem dashed #ebedf2; }
    .m-widget1 .m-widget1__item { padding: 0.6rem 0 7px 0; }
    .m-widget1 .m-widget1__item:first-child { padding-top: 0; }
    .m-widget1 .m-widget1__item .m-widget1__number { font-size: 2.4rem; font-weight: 600; }
    .m--font-brand { color: #22b9ff !important; }
    .m-widget1__title{margin: 0px;}
    .m--font-purple { color: #8E44AD; }
    .m--font-success { color: #00a65a; }
    .m--font-warning { color: #f39c12; }
    .m--font-blue { color: #0073b7; }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Dashboard <small>Control panel</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <div class="col-sm-12 success">
        <?= $this->session->flashdata('login_message');?>
    </div>
    <!-- Main content -->
    <section class="content" ng-controller="myController">
        <!-- Small boxes (Stat box) -->
            <div class="row">
                
            </div><!-- /.row -->

            </div><!-- /.row -->
          <!-- Main row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript">
         setTimeout(function() {
        $('.success').hide();
    }, 2000);
    </script>