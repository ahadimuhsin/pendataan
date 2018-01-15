
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Lintas Media Danawa</title>
    <LINK REL="SHORTCUT ICON" href="<?php base_url();?>/assets/image/lmd.ico" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/datatables/css/dataTables.bootstrap.css" />
    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--/assets/datatables/css/jquery.dataTables.min.css" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/datatables/js/dataTables.bootstrap.js" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/datatables/js/jquery.dataTables.min.js" />




    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/local.css" />

    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--/assets/css/bootstrap.css" />-->


    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/form-validation-company.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()."/assets/js/jquery.js"?>" type="text/javascript"></script>
    <script src="<?php echo base_url()."/assets/js/jquery-validation/dist/jquery.validate.min.js"?>" type="text/javascript"></script>
    <script src="<?php echo base_url()."/assets/js/bootstrap.js"?>" type="text/javascript"></script>

    <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url()."/assets/js/jquery.dataTables.js"?>"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url()."/assets/js/DT_bootstrap.js"?>"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <!--    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />-->
    <!--    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />-->

    <!--    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>-->
    <!--    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>-->
    <!--    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>-->

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
            <!--            <img src="--><?php //echo base_url();?><!--assets/image/logo.png" align="center" width="30" height="20">-->
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul id="active" class="nav navbar-nav side-nav">
                <li><a href="<?php base_url()?>welcome"><i class="fa fa-home"></i> Dashboard</a></li>
                <!--                    <li><a href="--><?php //base_url()?><!--obat"><i class="fa fa-tasks"></i> Obat</a></li>-->
                <!--                    <li><a href="--><?php //base_url()?><!--karyawan"><i class="fa fa-tasks"></i> Karyawan</a></li>-->
                <!--                    <li><a href="--><?php //base_url()?><!--supplier"><i class="fa fa-tasks"></i> Supplier</a></li>-->
                <!--                    <li><a href="--><?php //base_url()?><!--obat_masuk"><i class="fa fa-tasks"></i> Obat Masuk</a></li>-->
                <li><a href="<?php base_url()?>company"><i class="fa fa-tasks"></i> Company</a></li>
                <li><a href="<?php base_url()?>jasa"><i class="fa fa-handshake-o"></i> Pelayanan Jasa</a></li>
                <li><a href="<?php base_url()?>logout"><i class="glyphicon glyphicon-log-out
"></i> Log Out</a></li>
            </ul>
            </ul>
        </div>
    </nav>

    <div id="page-wrapper">

        <div class="col-lg-12 span">
            <a class="btn btn-success printoff"  onclick="add_jasa()"  class="btn btn-info" role="button" ><i class="glyphicon glyphicon-plus"></i> Add Jasa</a>
            <!--                <button class="btn btn-danger printoff" onclick="window.print()"><i class="glyphicon glyphicon-print"></i>Print</button>-->
            <a href="<?php echo base_url("index.php/c_jasa/export");?>" class="btn btn-info" role="button"><i class ="fa fa-file-excel-o"></i> Save as Excel file</a>
        </div></br> </br>
        <div class="row-fluid">

            <br><br>
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="table table-striped table-bordered" id="example">
                <thead>
                <tr>
                    <th width="200px">Nomor Company</th>
                    <th width="200px">Company</th>
                    <th width="200px">Parent Company</th>
                    <th width="200px">No. Jaringan</th>
                    <th width="200px">Business Consultant</th>
                    <th width="200px">Assignment</th>
                    <th width="200px">Sub Services</th>
                    <th width="200px">Services</th>
                    <th width="200px">Product Family</th>
                    <th width="200px">Tanggal Mulai Kontrak (Y-M-D)</th>
                    <th width="200px">Tanggal Akhir Kontrak (Y-M-D)</th>
                    <th width="200px">SPK/SO/Quote Number</th>
                    <th width="250px">Tanggal SPK Terbit (Y-M-D)</th>
                    <th width="200px">OTC</th>
                    <th width="200px">MRC</th>
                    <th width="200px">Type</th>
                    <th width="200px">Keterangan</th>

                    <th style="width:125px;" class="printoff">Action
                        </p></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($jasa as $jasa){?>
                    <tr>
                        <td><?php echo date("Y").sprintf("%03s", $jasa->no_company);?></td>
                        <td><?php echo $jasa->company;?></td>
                        <td><?php echo $jasa->parent_company;?></td>
                        <td><?php echo $jasa->no_jaringan;?></td>
                        <td><?php echo $jasa->business_consultant;?></td>
                        <td><?php echo $jasa->assignment;?></td>
                        <td><?php echo $jasa->subservices;?></td>
                        <td><?php echo $jasa->services;?></td>
                        <td><?php echo $jasa->product_family;?></td>
                        <td><?php echo $jasa->contract_start_date;?></td>
                        <td><?php echo $jasa->contract_end_date;?></td>
                        <td><?php echo $jasa->spk_number;?></td>
                        <td><?php echo $jasa->spk_date;?></td>
                        <td><?php echo $jasa->spk_handover_date;?></td>
                        <td><?php echo $jasa->otc;?></td>
                        <td><?php echo $jasa->mrc;?></td>
                        <td><?php echo $jasa->type;?></td>
                        <td><?php echo $jasa->keterangan;?></td>
                        <td class="printoff">
                            <button class="btn btn-warning printoff" onclick="edit_jasa(<?php echo $jasa->no_jaringan;?>)"><i class="glyphicon glyphicon-pencil"></i></button>


                        </td>
                    </tr>
                <?php }?>



                </tbody>

            </table>

        </div>
    </div>

</div>


<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    var save_method; //for save method string
    var table;
    function add_company()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        $('#disabled').attr('disabled', false);
        //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_company(no_company)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('#disabled').attr('disabled', !this.checked);

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('index.php/c_jasa/ajax_edit/')?>/" + no_jaringan,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                //mengambil data dalam bentuk json
                $('[name="no_company"]').val(data.no_company);
                $('[name="company"]').val(data.company);
                $('[name="parent_company"]').val(data.parent_company);
                $('[name="no_jaringan"]').val(data.no_jaringan);
                $('[name="business_consultant"]').val(data.business_consultant);
                $('[name="assignment"]').val(data.assignment);
                $('[name="subservices"]').val(data.subservices);
                $('[name="services"]').val(data.services);
                $('[name="product_family"]').val(data.product_family);
                $('[name="contract_start_date"]').val(data.contract_start_date);
                $('[name="contract_end_date"]').val(data.contract_end_date);
                $('[name="spk_number"]').val(data.spk_number);
                $('[name="spk_date"]').val(data.spk_date);
                $('[name="spk_handover_date"]').val(data.spk_handover_date);
                $('[name="otc"]').val(data.otc);
                $('[name="mrc"]').val(data.mrc);
                $('[name="type"]').val(data.type);
                $('[name="keterangan"]').val(data.keterangan);


                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Jasa'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });

    }


    function save() {
        //sebelum disave, melakukan form validation terlebih dahulu
        var url;
        var company_number=form.npwp;
        var company_name=form.company;
        var company_parent=form.parent_company;
        var company_address=form.address;
        var company_city=form.city;
        var company_cp=form.contact_person;
        var company_title=form.title;
        var company_email=form.email;
        var company_phone=form.phone;
        var company_mobile=form.mobile;
        var company_bc=form.business_consultant;
        var company_date=form.join_date;
        var company_assignment=form.assignment;
        if (save_method == 'add') { //jika save_method = add, menambah data baru

            if (company_number.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_number.focus();
                return false;
            }
            else if (company_name.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_name.focus();
                return false;
            }
            else if (company_parent.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_parent.focus();
                return false;
            }
//                Entah mengapa kalo ada di bawah ini gak bekerja
            else if (company_address.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_address.focus();
                return false;
            }
            else if (company_city.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_city.focus();
                return false;
            }
            else if (company_cp.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_cp.focus();
                return false;
            }
            else if (company_title.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_title.focus();
                return false;
            }
            else if (company_email.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_email.focus();
                return false;
            }
            else if (company_phone.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_phone.focus();
                return false;
            }
            else if (company_mobile.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_mobile.focus();
                return false;
            }
            else if (company_bc.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_bc.focus();
                return false;
            }
            else if (company_date.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_date.focus();
                return false;
            }
            else if (company_assignment.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_assignment.focus();
                return false;
            }


            else {
                url = "<?php echo site_url('index.php/c_company/company_add')?>";

            }

        }
        //kalau update, update data
        else {
            if (company_number.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_number.focus();
                return false;
            }

            else if (company_name.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_name.focus();
                return false;
            }
            else if (company_parent.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_parent.focus();
                return false;
            }
//                Entah mengapa kalo ada di bawah ini gak bekerja
            else if (company_address.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_address.focus();
                return false;
            }
            else if (company_city.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_city.focus();
                return false;
            }
            else if (company_cp.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_cp.focus();
                return false;
            }
            else if (company_title.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_title.focus();
                return false;
            }
            else if (company_email.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_email.focus();
                return false;
            }
            else if (company_phone.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_phone.focus();
                return false;
            }
            else if (company_mobile.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_mobile.focus();
                return false;
            }
            else if (company_bc.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_bc.focus();
                return false;
            }
            else if (company_date.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_date.focus();
                return false;
            }
            else if (company_assignment.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                company_assignment.focus();
                return false;
            }


            else {
                url = "<?php echo site_url('index.php/c_company/company_update')?>";

            }

        }


        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
                //if success close modal and reload ajax table
                $('#modal_form').modal('hide');
                location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }
    $(document).ready(function () {
        $('.datepicker').datepicker({
            //merubah format tanggal datepicker ke dd-mm-yyyy
            format: "dd-mm-yyyy",
            //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
            //format: "dd-mm-yyyy",
            autoclose: true
        });
    });

    //        function delete_obat(barcode)
    //        {
    //            if(confirm('Are you sure delete this data?'))
    //            {
    //                // ajax delete data from database
    //                $.ajax({
    //                    url : "<?php //echo site_url('index.php/c_obat/obat_delete')?>///"+barcode,
    //                    type: "POST",
    //                    dataType: "JSON",
    //                    success: function(data)
    //                    {
    //
    //                        location.reload();
    //                    },
    //                    error: function (jqXHR, textStatus, errorThrown)
    //                    {
    //                        alert('Error deleting data');
    //                    }
    //                });
    //
    //            }
    //        }



</script>
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Jasa Form</h3>
            </div>
            <div class="modal-body form">
                <form  action=""  name="myform"
                       id="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3" for="no_company">No Company</label>
                            <div class="col-md-9">
                                <input  name="no_company" placeholder="Nomor Company" style="color: black" required class="form-control" type="number" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="no_jaringan">No Jaringan</label>
                            <div class="col-md-9">
                                <input name="no_jaringan" placeholder="Company" style="color: black" required class="form-control" type="number">
                            </div>
                        </div>
                        <div class="form-group">
<!--                            masih kurang -->
                            <label class="control-label col-md-3" for="subservices">Sub Services</label>
                            <div class="col-md-9">
                                <input name="subservices" style="color: black" placeholder="Sub Services" class="form-control" type="text">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="services">Services</label>
                            <div class="col-md-9">
                                <input name="services" placeholder="Services" style="color: black" required class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="product_family">Product Family</label>
                            <div class="col-md-9">
                                <input name="product_family" placeholder="Product Familt" style="color: black" required class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="contract_start_date">Contract Start Date</label>
                            <div class="col-md-9">
                                <input name="contract_start_date" style="color: black" required placeholder="Contract Start Date" class="form-control" type="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="contract_end_date">Contract End Date</label>
                            <div class="col-md-9">
                                <input name="contract_end_date" placeholder="Contract End Date" style="color: black" required class="form-control" type="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="spk_number">SPK/SO/Quote Number</label>
                            <div class="col-md-9">
                                <input name="spk_number" placeholder="SPK/SO/Quote Number" style="color: black" required class="form-control" type="number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="spk_date">Tanggal SPK Terbit</label>
                            <div class="col-md-9">
                                <input name="spk_date" placeholder="Tanggal SPK Terbit" style="color: black" required class="form-control" type="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="spk_handover_date">Waktu Penyerahan SPK</label>
                            <div class="col-md-9">
                                <input name="spk_handover_date" placeholder="Waktu Penyerahan SPK" style="color: black" required class="form-control" type="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="otc">OTC</label>
                                <div class="col-md-9">
                                    <input name="otc" placeholder="OTC" style="color: black" required class="form-control" type="number">
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="mrc">MRC</label>
                            <div class="col-md-9">
                                <input name="mrc" placeholder="MRC" style="color: black" required class="form-control" type="number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="type">Type</label>
                            <div class="col-md-9">
                                <!--                                    <input name="assignment" placeholder="Assignment" required class="form-control" type="text">-->
                                <select name="type" style="color: black" class="form-control" required>
                                    <option value="" disabled selected hidden>Please Choose...</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Joining Free">Joining Free</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnSave "class="btn btn-primary" onclick="save()">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

</body>
</html>
