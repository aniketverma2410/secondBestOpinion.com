<?php
$sess=$this->session->userdata('adminData');
if(empty($sess)) {
  $message='<div class="alert alert-danger alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Invalide Username or Password.</div>';
    $this->session->set_flashdata('login_message', $message);
    redirect('admin/index');
}
?>
<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <meta charset="UTF-8">
        <title><?= $title;?> | <?= PROJECT_NAME;?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/website/new_img/favicon.ico" type="image/x-icon"> 

        <link href="<?php echo base_url(); ?>assets/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
        <!-- FontAwesome 4.3.0 -->
        <link href="<?php echo base_url(); ?>assets/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="<?php echo base_url(); ?>assets/admin/other/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- daterange picker -->
        <link href="<?php echo base_url(); ?>assets/admin/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="<?php echo base_url(); ?>assets/admin/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>assets/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url(); ?>assets/admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?php echo base_url(); ?>assets/admin/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url(); ?>assets/admin/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url(); ?>assets/admin/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url(); ?>assets/admin/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url(); ?>assets/admin/dist/css/treeView.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="http://www.jqueryscript.net/demo/Collapsible-Data-Grid-Plugin-With-jQuery-Treegrid/dist/js/jquery.treegrid.min.js"></script>
        
        <script src="<?php echo base_url(); ?>assets/admin/plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/plugins/jQuery/jquery.validate.js"></script>
        <script src="//cdn.ckeditor.com/4.5.10/full-all/ckeditor.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/plugins/ckfinder/ckfinder.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/plugins/jQueryUI/jquery-ui-1.10.3.js"></script>
        <link href="<?php echo base_url(); ?>assets/admin/plugins/jQueryUI/jquery-ui.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .main-header .logo{font-size: 18px;}
            .skin-green .wrapper, .skin-green .main-sidebar, .skin-green .left-side{background: #fff; }
            .skin-green .sidebar-menu>li>a:hover, .skin-green .sidebar-menu>li.active>a{background: #5bb58c; border-left-color: #008d4c;}
            .skin-green .user-panel>.info, .skin-green .user-panel>.info>a{color: #333; }
            .skin-green .sidebar a{color: #333; }
            .skin-green .sidebar-menu>li>.treeview-menu {
                margin: 1px;
                background: white;
                color: #333;
            }
            .skin-green .treeview-menu>li.active>a, .skin-green .treeview-menu>li>a:hover {
                    color: black;
                }
                .content-wrapper{
                    margin-top: 50px !important;
                }
        </style>
    </head>
    
    <body class="skin-green">
        <div class="wrapper">
      
            <header class="main-header" style="position: fixed;width: 100%;">
                <!-- Logo -->
                <a href="javascript:void(0);" class="logo hidden-xs"><b><img src="<?= base_url();?>assets/website/img/logo.png" alt="logo" style="height: 40px;width: 200px"></b></a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" ro   le="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav"> 
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url(); ?>assets/adminImages/profile/<?= $this->session->userdata['adminData']['image']; ?>" class="user-image" alt="User Image"/>
                                    <span class="hidden-xs"><?= $this->session->userdata['adminData']['Name']; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url(); ?>assets/adminImages/profile/<?= $this->session->userdata['adminData']['image']; ?>" class="img-circle" alt="User Image" />
                                        <p>
                                            <?= $this->session->userdata['adminData']['Name']; ?>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                          
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                         <div class="pull-left">
                                            <a href="<?= base_url('Admin/adminProfile/'.$this->session->userdata['adminData']['userId']);?>" class="btn btn-default btn-flat">
                                               Admin Update profile
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url('admin/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- Left side column. contains the logo and sidebar -->

                <aside class="main-sidebar" style="position: fixed;">

                    <?php
                        $active = $this->uri->segment(2); 
                        $active_menu = $this->uri->segment(3);
                    ?>
                     <?php $page = $this->input->get('page');?>
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class="sidebar">
                        <!-- Sidebar user panel -->
                        <div class="user-panel">
                            <div class="pull-left image">
                                <img src="<?php echo base_url(); ?>assets/adminImages/profile/<?= $this->session->userdata['adminData']['image']; ?>" class="img-circle" alt="User Image" />
                            </div>
                            
                            <div class="pull-left info">
                                <p><?= $this->session->userdata['adminData']['Name']; ?></p>
                                <a href="javascript:void(0);"><i class="fa fa-circle text-success"></i> Online</a>
                            </div>
                        </div>
                        
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class="sidebar-menu" style="overflow-y: scroll;height: 500px">

                            <!-- <li class="header">MAIN NAVIGATION</li> -->
                            <li class="treeview <?php echo($active == 'dashboard' || $active == 'adminProfile' ? 'active': '');?>">
                                <a href="<?php echo base_url('admin/dashboard'); ?>">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="treeview <?php echo($active == 'findDoctor' || $active == 'editFindDoctor' ? 'active': '');?>">
                                <a href="<?php echo base_url('admin/findDoctor'); ?>">
                                    <i class="fa fa-user-md"></i> <span>Manage Find Doctor</span>
                                </a>
                            </li>

                            <!-- <li class="treeview <?php echo($active == 'setting' ? 'active': '');?>">
                                <a href="<?php echo base_url('admin/setting'); ?>">
                                    <i class="fa fa-cogs"></i> <span>Manage Settings</span>
                                </a>
                            </li> -->

                        </ul>
                    </section> <!-- /.sidebar -->
                </aside>

