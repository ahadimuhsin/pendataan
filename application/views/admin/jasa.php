
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Lintas Media Danawa</title>
    <LINK REL="SHORTCUT ICON" href="<?php base_url();?>/assets/image/lmd.ico" />
<!--  bagian css  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/datatables/css/dataTables.bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/local.css" />

<!--    file javascript -->
    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--/assets/datatables/css/jquery.dataTables.min.css" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/datatables/js/dataTables.bootstrap.js" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/datatables/js/jquery.dataTables.min.js" />
    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--/assets/css/bootstrap.css" />-->

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.maskedinput.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/myscript.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/form-validation-jasa.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()."/assets/js/jquery.js"?>" type="text/javascript"></script>
    <script src="<?php echo base_url()."/assets/js/jquery-validation/dist/jquery.validate.min.js"?>" type="text/javascript"></script>
    <script src="<?php echo base_url()."/assets/js/bootstrap.js"?>" type="text/javascript"></script>

    <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url()."/assets/js/jquery.dataTables.js"?>"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url()."/assets/js/DT_bootstrap.js"?>"></script>

    <!-- /#wrapper -->
    <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
    <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
    <style>

        #cloud_server_product,#cloud_server_services,#managed_server_product,#managed_server_services,
        #managed_wifi_services, #managed_wifi_product, #managed_mail_services,#managed_mail_product,
        #managed_radius_services,#managed_radius_product,#it_solution_services, #it_solution_product,
        #salesforce_product,#salesforce_services,#microsoft_services,#cozytizen_services,#application_services,
        #sms_services{
            display: none;
        }
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
                <li><a href="<?php base_url()?>company"><i class="fa fa-building-o"></i> Company</a></li>
                <li><a href="<?php base_url()?>jasa"><i class="fa fa-handshake-o"></i> Pelayanan Jasa</a></li>
                <li><a href="<?php base_url()?> download_log"><i class="fa fa-download"></i>  See Log</a></li>
                <li><a href="<?php base_url()?>logout"><i class="glyphicon glyphicon-log-out
"></i> Log Out</a></li>
            </ul>
            </ul>
        </div>
    </nav>

    <div id="page-wrapper">

        <div class="col-lg-12 span">
            <a class="btn btn-success printoff"  onclick="add_jasa()"   role="button" ><i class="glyphicon glyphicon-plus"></i> Add Jasa</a>
            <!--                <button class="btn btn-danger printoff" onclick="window.print()"><i class="glyphicon glyphicon-print"></i>Print</button>-->
            <a href="<?php echo base_url("index.php/c_jasa/export");?>" class="btn btn-info" role="button"><i class ="fa fa-file-excel-o"></i> Save as Excel file</a>
        </div><br> <br>
        <div class="row-fluid">

            <br><br>
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="table table-striped table-bordered" id="example">
                <thead>
                <tr style="background-color: grey">
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
                    <th width="250px">Waktu Penyerahan SPK (Y-M-D)</th>
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
                        <td><?php echo date("Y").sprintf("%06s", $jasa->no_jaringan);?></td>
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
                            <button class="btn btn-warning printoff" title="Edit" onclick="edit_jasa(<?php echo $jasa->no_jaringan;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                            <button class="btn btn-danger printoff" title="Delete" onclick="delete_jasa(<?php echo $jasa->no_jaringan;?>)"><i class="glyphicon glyphicon-remove"></i></button>


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
    function add_jasa()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        $('#disabled').attr('disabled', false);
        //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_jasa(no_jaringan)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('#disabled').attr('disabled', !this.checked);

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('index.php/c_jasa/ajax_edit/')?>/" + no_jaringan,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //mengambil data dalam bentuk json
                $('[name="no_company"]').val(data.no_company);
                $('[name="no_jaringan"]').val(data.no_jaringan);
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
        //deklarasikan variabel
            var url;
        var jasa_number=form.no_company;
        var jasa_network=form.no_jaringan;
        var jasa_subservices=form.subservices;
        var jasa_contract_start=form.contract_start_date;
        var jasa_contract_end=form.contract_end_date;
        var jasa_spk_number=form.spk_number;
        var jasa_spk_date=form.spk_date;
        var jasa_spk=form.spk_handover_date;
        var jasa_otc=form.otc;
        var jasa_mrc=form.mrc;
        var jasa_type=form.type;

        if (save_method == 'add') { //jika save_method = add, menambah data baru

            if (jasa_number.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_number.focus();
                return false;
            }
//            else if (jasa_network.value==="") {
//                alert("Mohon Isi Form Secara Lengkap");
//                company_name.focus();
//                return false;
//            }
            else if (jasa_subservices.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_subservices.focus();
                return false;
            }
//                Entah mengapa kalo ada di bawah ini gak bekerja
            else if (jasa_contract_end.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_contract_end.focus();
                return false;
            }
            else if (jasa_contract_start.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_contract_start.focus();
                return false;
            }
            else if (jasa_spk.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_spk.focus();
                return false;
            }
            else if (jasa_spk_date.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_spk_date.focus();
                return false;
            }
            else if (jasa_spk_number.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_spk_date.focus();
                return false;
            }
            else if (jasa_otc.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_otc.focus();
                return false;
            }
            else if (jasa_mrc.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_mrc.focus();
                return false;
            }
            else if (jasa_type.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_type.focus();
                return false;
            }

            else {
                url = "<?php echo site_url('index.php/c_jasa/jasa_add')?>";

            }

        }


        //kalau update, update data
        else {
            if (jasa_number.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_number.focus();
                return false;
            }
//            else if (jasa_network.value==="") {
//                alert("Mohon Isi Form Secara Lengkap");
//                company_name.focus();
//                return false;
//            }
            else if (jasa_subservices.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_subservices.focus();
                return false;
            }
//                Entah mengapa kalo ada di bawah ini gak bekerja
            else if (jasa_contract_end.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_contract_end.focus();
                return false;
            }
            else if (jasa_contract_start.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_contract_start.focus();
                return false;
            }
            else if (jasa_spk.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_spk.focus();
                return false;
            }
            else if (jasa_spk_date.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_spk_date.focus();
                return false;
            }
            else if (jasa_spk_number.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_spk_date.focus();
                return false;
            }
            else if (jasa_otc.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_otc.focus();
                return false;
            }
            else if (jasa_mrc.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_mrc.focus();
                return false;
            }
            else if (jasa_type.value==="") {
                alert("Mohon Isi Form Secara Lengkap");
                jasa_type.focus();
                return false;
            }

            else {
                url = "<?php echo site_url('index.php/c_jasa/jasa_update')?>";

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
        $('#join_date').datepicker({
            //merubah format tanggal datepicker ke dd-mm-yyyy
            format: "dd-mm-yyyy",
            //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
            //format: "dd-mm-yyyy",
            autoclose: true
        });
    });

            function delete_jasa(no_jaringan)
            {
                if(confirm('Are you sure delete this data?'))
                {
                    // ajax delete data from database
                    $.ajax({
                        url : "<?php echo site_url('index.php/c_jasa/jasa_delete')?>/"+no_jaringan,
                        type: "POST",
                        dataType: "JSON",
                        success: function(data)
                        {

                            location.reload();
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error deleting data');
                        }
                    });

                }
            }


// just for the demos, avoids form submit
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });
    $( "#myform" ).validate({
        rules: {
            no_company: {
                required: true,
                number: true
            }
        }
    });


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
                <form action=""  name="myform"
                       id="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="no_company">&nbsp &nbsp&nbspNo Company</label>
                            <div class="col-sm-12">
                                <input  name="no_company" id="no_company" title="Contoh inputan: nomor company 2018001 ditulis 1" placeholder="<?php echo date("Y");?>XXX (3 digit terakhir Nomor Company)" style="color: black" required class="form-control" type="number" >
                                <p>Contoh: Tulis "001" untuk No Company "2018001"</p>
                            </div>
                        </div>
                        <div class="form-group" hidden>
                            <label class="control-label" for="no_jaringan">No Jaringan</label>
                            <div class="col-md-12">
                                <input name="no_jaringan" placeholder="Nomor Jaringan" style="color: black"  class="form-control" type="number">
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="control-label" for="subservices">&nbsp &nbsp&nbspSub Services</label>
                            <div class="col-sm-12">
                                <select id='subservices' style="height:40px; color: black" class="form-control" name="subservices" >
                                    <option value="" disabled selected hidden>Pilih Salah Satu</option>
                                    <option value="Cloud Server">Cloud Server</option>
                                    <option value="Managed Server" >Managed Server</option>
                                    <option value="Managed Wifi" >Managed Wifi</option>
                                    <option value="Managed Mail" >Managed Mail</option>
                                    <option value="Managed Radius">Managed Radius</option>
                                    <option value="Managed Web" >Managed Web</option>
                                    <option value="Managed Antivirus" >Managed Antivirus</option>
                                    <option value="Managed SSL" >Managed SSL</option>
                                    <option value="Managed Cpanel"  >Managed Cpanel</option>
                                    <option value="Managed Firewall" >Managed Firewall</option>
                                    <option value="Managed DNS" >Managed DNS</option>
                                    <option value="IT Solution" >IT Solution</option>
                                    <option value="Implementasi - Integrasi - Migrasi - Pengadaan" >Implementasi - Integrasi - Migrasi - Pengadaan</option>
                                    <option value="Implementasi Salesforce" >Implementasi Salesforce</option>
                                    <option value="License Salesforce" >License Salesforce</option>
                                    <option value="Support & Maintenance Salesforce" >Support & Maintenance Salesforce</option>
                                    <option value="Training Salesforce" >Training Salesforce</option>
                                    <option value="Implementasi Microsoft" >Implementasi Microsoft</option>
                                    <option value="License Microsoft" >License Microsoft</option>
                                    <option value="Implementasi Cozytizen" >Implementasi Cozytizen</option>
                                    <option value="License Cozytizen" >License Cozytizen</option>
                                    <option value="Application Development">Application Development</option>
                                    <option value="Staffing">Staffing</option>
                                    <option value="SMS Corporate">SMS Corporate</option>
                                </select>

                            </div>
                        </div>

<!--                            Bagian Cloud Server-->
                        <div class="form-group" id='cloud_server_services'>
                            <label  for="services">&nbsp &nbsp&nbspServices</label>
                            <div class="col-sm-12">
                                <input name="services" placeholder="Services" value="Cloud Server" style="color: black" readonly required class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group" id='cloud_server_product'>
                            <label class="control-label" for="product_family">&nbsp &nbsp&nbspProduct Family</label>
                            <div class="col-sm-12">
                                <input name="product_family" placeholder="Product Family" value="Cloud Services" readonly style="color: black" required class="form-control" type="text">
                            </div>
                        </div>
<!--                    Bagian Managed Server-->
                        <div class="form-group" id='managed_server_services'>
                            <label class="control-label" for="services">&nbsp &nbsp&nbspServices</label>
                            <div class="col-sm-12">
                                <input name="services" placeholder="Services" value="Managed Server" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group" id='managed_server_product'>
                            <label class="control-label" for="product_family">&nbsp &nbsp&nbspProduct Family</label>
                            <div class="col-sm-12">
                                <input name="product_family" placeholder="Product Family" value="Managed Services" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>
<!--                            Bagian Managed Wifi-->
                        <div class="form-group" id='managed_wifi_services'>
                            <label class="control-label" for="services">&nbsp &nbsp&nbspServices</label>
                            <div class="col-sm-12">
                                <input name="services" placeholder="Services" value="Managed Wifi" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group" id='managed_wifi_product'>
                            <label class="control-label" for="product_family">&nbsp &nbsp&nbspProduct Family</label>
                            <div class="col-sm-12">
                                <input name="product_family" placeholder="Product Family" value="Managed Services" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>
<!--                        Bagian Managed Mail-->
                        <div class="form-group" id='managed_mail_services'>
                            <label class="control-label" for="services">&nbsp &nbsp&nbspServices</label>
                            <div class="col-sm-12">
                                <input name="services" placeholder="Services" value="Managed Application" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group" id='managed_mail_product'>
                            <label class="control-label" for="product_family">&nbsp &nbsp&nbspProduct Family</label>
                            <div class="col-sm-12">
                                <input name="product_family" placeholder="Product Family" value="Managed Services" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>
<!--                        Bagian Managed Radius-->
                        <div class="form-group" id='managed_radius_services'>
                            <label class="control-label" for="services">&nbsp &nbsp&nbspServices</label>
                            <div class="col-sm-12">
                                <input name="services" placeholder="Services" value="Managed Application" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group" id='managed_radius_product'>
                            <label class="control-label" for="product_family">&nbsp &nbsp&nbspProduct Family</label>
                            <div class="col-sm-12">
                                <input name="product_family" placeholder="Product Family" value="Managed Services" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>

<!--                        Bagian IT Solution-->
                        <div class="form-group" id='it_solution_services'>
                            <label class="control-label" for="services">&nbsp &nbsp&nbspServices</label>
                            <div class="col-sm-12">
                                <input name="services" placeholder="Services" value="Professional Services" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group" id='it_solution_product'>
                            <label class="control-label" for="product_family">&nbsp &nbsp&nbspProduct Family</label>
                            <div class="col-sm-12">
                                <input name="product_family" placeholder="Product Family" value="Managed Services" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>
<!--                   Bagian Salesforce -->
                        <div class="form-group" id='salesforce_services'>
                            <label class="control-label" for="services">&nbsp &nbsp&nbspServices</label>
                            <div class="col-sm-12">
                                <input name="services" placeholder="Services" value="CRM Salesforce.com" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>
                        <!--                    Bagian Microsoft-->
                        <div class="form-group" id='microsoft_services'>
                            <label class="control-label" for="services">&nbsp &nbsp&nbspServices</label>
                            <div class="col-sm-12">
                                <input name="services" placeholder="Services" value="Microsoft" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>

<!--                      Cozytizen  -->
                        <div class="form-group" id='cozytizen_services'>
                            <label class="control-label" for="services">&nbsp &nbsp&nbspServices</label>
                            <div class="col-sm-12">
                                <input name="services" placeholder="Services" value="Cozytizen" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>
<!--                      Application  -->
                        <div class="form-group" id='application_services'>
                            <label class="control-label" for="services">&nbsp &nbsp&nbspServices</label>
                            <div class="col-sm-12">
                                <input name="services" placeholder="Services" value="Application Development" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>
<!--                      SMS Corporate  -->
                        <div class="form-group" id='sms_services'>
                            <label class="control-label" for="services">&nbsp &nbsp&nbspServices</label>
                            <div class="col-sm-12">
                                <input name="services" placeholder="Services" value="SMS Corporate" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group" id='salesforce_product'>
                            <label class="control-label" for="product_family">&nbsp &nbsp&nbspProduct Family</label>
                            <div class="col-sm-12">
                                <input name="product_family" placeholder="Product Family" value="SaaS" style="color: black" required readonly class="form-control" type="text">
                            </div>
                        </div>
<!--                                    End-->
                        <div class="form-group">
                            <label class="control-label" for="contract_start_date">&nbsp &nbsp&nbspContract Start Date</label>
                            <div class="col-sm-12">
                                <input name="contract_start_date" style="color: black" required placeholder="Contract Start Date" class="form-control" type="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="contract_end_date">&nbsp &nbsp&nbspContract End Date</label>
                            <div class="col-sm-12">
                                <input name="contract_end_date" placeholder="Contract End Date" style="color: black" required class="form-control" type="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="spk_number">&nbsp &nbsp&nbspSPK/SO/Quote Number</label>
                            <div class="col-sm-12">
                                <input name="spk_number" placeholder="SPK/SO/Quote Number" style="color: black" required class="form-control" type="number">
                            </div>
                        </div>
                        </div>
                        <!--                        Right Column-->
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="spk_date">&nbsp &nbsp&nbspTanggal SPK Terbit</label>
                            <div class="col-sm-12">
                                <input name="spk_date" placeholder="Tanggal SPK Terbit" style="color: black" required class="form-control" type="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="spk_handover_date">&nbsp &nbsp&nbspWaktu Penyerahan SPK</label>
                            <div class="col-sm-12">
                                <input name="spk_handover_date" placeholder="Waktu Penyerahan SPK" style="color: black" required class="form-control" type="date">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label" for="otc">&nbsp &nbsp&nbspOTC</label>
                                <div class="col-sm-12">
                                    <input name="otc" placeholder="OTC" style="color: black" required class="form-control" type="number">
                                </div>
                        </div>

                        <div class="form-group">
                            <label  class="control-label" for="mrc">&nbsp &nbsp&nbspMRC</label>
                            <div class="col-sm-12">
                                <input name="mrc" placeholder="MRC" style="color: black" required class="form-control" type="number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="type">&nbsp &nbsp&nbspType</label>
                            <div class="col-sm-12">
                                <!--                                    <input name="assignment" placeholder="Assignment" required class="form-control" type="text">-->
                                <select name="type" title="Pilih salah satu" style="height: 40px; color: black" class="form-control" required>
                                    <option value="" disabled selected hidden>Pilih Salah Satu</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Joining Free">Joining Free</option>
                                </select>

                                </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label" for="keterangan">&nbsp &nbsp&<nbsp></nbsp>Keterangan</label>
                            <div class="col-sm-12">
                                <input name="keterangan" placeholder="Keterangan" style="color: black" class="form-control" type="text">
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" id="btnSave "class="btn btn-primary" onclick="save()">Save</button>
                    </div>
                    </div>
                </form>


        <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


</body>
</html>
