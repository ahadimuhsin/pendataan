
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lintas Media Danawa</title>
<!--    Logo-->
    <link rel="icon" href="<?php base_url()?>assets/image/lmd.ico" type="image/gif" sizes="16x16" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/local.css" />

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>


</head>
<style>
    h3{
        color: black;
    }
</style>
<body >
<header class="main-header">
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas">

        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

            </ul>
        </div>
    </nav>
</header>
    <div id="wrapper">
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: #ffffff;">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav" >
                    <li class="selected"><a href="<?php base_url()?>home"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="<?php base_url()?>company"><i class="fa fa-building-o"></i> Company</a></li>
                    <li><a href="<?php base_url()?>jasa"><i class="fa fa-handshake-o"></i> Pelayanan Jasa</a></li>
                    <li><a href="<?php base_url()?> download_log"><i class="fa fa-download"></i>  See Log</a></li>
                    <li><a href="<?php base_url()?>logout"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" >
            <div class="row" >
                <div class="col-lg-12" >
                    <h3  align="left" >&nbsp Hai, <?php echo $this->session->userdata('username');?></h3>
                  <H3>&nbsp Aplikasi ini membantu admin dalam:
                    <ul>
                      <li>&nbsp Mengelola Data Perusahaan</li>
                      <li>&nbsp Mengelola Data Pelayanan Jasa</li>
                    </ul>
                  </H3>
            </div>
          </div>
        </div>
    <!-- /#wrapper -->
    <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
    <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>

</body>
</html>
