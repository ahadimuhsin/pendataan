
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Lintas Media Danawa</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/local.css" />
    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--/assets/css/bootstrap.css" />-->


    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()."/assets/js/jquery.js"?>" type="text/javascript"></script>
    <script src="<?php echo base_url()."/assets/js/bootstrap.js"?>" type="text/javascript"></script>

    <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url()."/assets/js/jquery.dataTables.js"?>"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url()."/assets/js/DT_bootstrap.js"?>"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>

    <!-- /#wrapper -->
    <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
    <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            .print, .print * {
                visibility: visible;
            }

            .printoff, .printoff * {
                visibility: hidden;
            }

            .print {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" >Admin Panel</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul id="active" class="nav navbar-nav side-nav">
                <li><a href="<?php base_url()?>welcome"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                <!--                    <li><a href="--><?php //base_url()?><!--obat"><i class="fa fa-tasks"></i> Obat</a></li>-->
                <!--                    <li><a href="--><?php //base_url()?><!--karyawan"><i class="fa fa-tasks"></i> Karyawan</a></li>-->
                <!--                    <li><a href="--><?php //base_url()?><!--supplier"><i class="fa fa-tasks"></i> Supplier</a></li>-->
                <!--                    <li><a href="--><?php //base_url()?><!--obat_masuk"><i class="fa fa-tasks"></i> Obat Masuk</a></li>-->
                <li><a href="<?php base_url()?>company"><i class="fa fa-tasks"></i> Company</a></li>
                <li><a href="<?php base_url()?>logout"><i class="glyphicon glyphicon-log-out
"></i> Log Out</a></li>
            </ul>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper">

        <div class="col-lg-12 span">
            <a class="btn btn-success printoff" href="<?php base_url()?>admin/add_company" ><i class="glyphicon glyphicon-plus"></i> Add Company</a>
            <!--                <button class="btn btn-danger printoff" onclick="window.print()"><i class="glyphicon glyphicon-print"></i>Print</button>-->
            <a href="<?php echo base_url("index.php/c_company/export");?>" class="btn btn-info" role="button"><i class ="glyphicon glyphicon-save"></i>Save as Excel file</a>
        </div></br> </br>

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Company Form</h3>
                </div>
                <div class="modal-body form">
                    <form enctype="multipart/form-data" action="<?php echo base_url()."index.php/c_company/company_add";?>" id="form" class="form-horizontal" method="post">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">NPWP</label>
                                <div class="col-md-9">
                                    <input  name="npwp" placeholder="NPWP" style="color: black" required class="form-control" type="number" >
                                </div>
                            </div>
                            <div class="form-group" hidden>
                                <label class="control-label col-md-3" hidden>No Company</label>
                                <div class="col-md-9">
                                    <input name="no_company" placeholder="Nomor Company" required class="form-control" type="hidden">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Company</label>
                                <div class="col-md-9">
                                    <input name="company" placeholder="Company" style="color: black" required class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Parent Company</label>
                                <div class="col-md-9">
                                    <input name="parent_company" style="color: black" placeholder="Parent Company" class="form-control" type="text">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Address</label>
                                <div class="col-md-9">
                                    <input name="address" placeholder="Address" style="color: black" required class="form-control" type="text">
                                    <!--                                    <select name="nama_supplier">-->
                                    <!--                                        --><?php //foreach($supplier as $supplier){?>
                                    <!--                                            <option value="--><?php //echo $supplier->nama;?><!--">--><?php //echo $supplier->nama;?><!--</option>-->
                                    <!--                                        --><?php //} ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">City</label>
                                <div class="col-md-9">
                                    <input name="city" placeholder="City" style="color: black" required class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Contact Person</label>
                                <div class="col-md-9">
                                    <input name="contact_person" style="color: black" required placeholder="Contact Person" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Title</label>
                                <div class="col-md-9">
                                    <input name="title" placeholder="Title" style="color: black" required class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input name="email" placeholder="Email" style="color: black" required class="form-control" type="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Phone</label>
                                <div class="col-md-9">
                                    <input name="phone" placeholder="Phone" style="color: black" required class="form-control" type="number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input name="mobile" placeholder="Mobile" style="color: black" required class="form-control" type="number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Business Consultant</label>
                                <div class="col-md-9">
                                    <!--                                    //<input name="business_consultant" required placeholder="Business Consultant" class="form-control" type="text">-->
                                    <select name="business_consultant" style="color: black" class="form-control">
                                        <option value="Fahmi Ernanto">Fahmi Ernanto</option>
                                        <option value="Hadi Fatkhul Amin">Hadi Fatkhul Amin</option>
                                        <option value="Mochamad Badriansyah">Mochamad Badriansyah</option>
                                        <option value="Movita Suci Mutiara">Movita Suci Mutiara</option>
                                        <option value="Shoba Mediwati">Shoba Mediwati</option>
                                        <option value="Sigit Tri Marwanto">Sigit Tri Marwanto</option>
                                        <option value="Yohanes Kariana">Yohanes Kariana</option>
                                    </select>


                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Join Date</label>
                                <div class="col-md-9">
                                    <input name="join_date" placeholder="Join Date" style="color: black" required class="form-control" type="date">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Assignment</label>
                                <div class="col-md-9">
                                    <!--                                    <input name="assignment" placeholder="Assignment" required class="form-control" type="text">-->
                                    <select name="assignment" style="color: black" class="form-control">
                                        <option value="Full Managed">Full Managed</option>
                                        <option value="Lead Assignment">Lead Assignment</option>
                                        <option value="Project Assignment">Project Assignment</option>
                                        <option value="Replacement">Replacement</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="btnSave" class="btn btn-primary" value="Save"></input>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End Bootstrap modal -->
    </div>
</body>
</html>
