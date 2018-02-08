
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Data Perusahaan - Lintas Media Danawa</title>
    <LINK REL="ICON" href="<?php base_url();?>/assets/image/lmd.ico" />
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--/assets/bootstrap/css/bootstrap.min.css" />-->
<!--   Bagian CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/datatables/css/dataTables.bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/datatables/js/dataTables.bootstrap.js" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/datatables/js/jquery.dataTables.min.js" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/local.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/jquery-ui.min.css" />

<!--Bagian Javascript-->
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/jasny-bootstrap/js/jasny-bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.mask.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/myscript.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/form-validation-company.js"></script>
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
        #tblbusiness,#tblemail,#tblassignment,
        #tbljoin,#tblmobile,#tblphone,#tblusername,.isiassignment,.isibusiness,
        .isidate, .isiemail, .isiphone,.isimobile,.username{
            display: none;
        }
        .mymodal{
            width : 100%;
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
            /* CSS used here will be applied after bootstrap.css */


        }
    </style>
</head>
<body >
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" style="color: white">Admin Panel</a>
<!--            <img src="--><?php //echo base_url();?><!--assets/image/logo.png" align="center" width="30" height="20">-->
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul id="active" class="nav navbar-nav side-nav">
                <li><a href="<?php base_url()?>home"><i class="fa fa-home"></i> Dashboard</a></li>
                <li><a class="selected" href="<?php base_url()?>company"><i class="fa fa-building-o"></i> Company</a></li>
                <li><a href="<?php base_url()?>jasa"><i class="fa fa-handshake-o"></i> Pelayanan Jasa</a></li>
                <li><a href="<?php base_url()?> download_log"><i class="fa fa-download"></i>  See Log</a></li>
                <li><a href="<?php base_url()?>logout"><i class="glyphicon glyphicon-log-out
"></i> Log Out</a></li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" >

            <div class="col-lg-12 span">
                <a class="btn btn-success"  onclick="add_company()"role="button" style="color: white"><i class="glyphicon glyphicon-plus"></i> Add Company</a>
                <a href="<?php echo base_url("c_company/export");?>" class="btn btn-info" role="button"><i class ="fa fa-file-excel-o"></i> Save as Excel file</a>
                <input type="button" value="Show All Columns" class="btn btn-primary" id="showColumns" onclick="return changeColumn(this)">
            </div><br> <br>
                <div class="row-fluid">

                            <br><br>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="table table-responsive table-bordered" id="example">
                                <thead>
                                <tr style="background-color: #2a9fd6">
                        <th width="250px">Nomor Company</th>
                        <th width="250px">NPWP</th>
                        <th width="200px">Company</th>
                        <th width="250px">Parent Company</th>
                        <th width="200px">Address</th>
                        <th width="200px">City</th>
                        <th width="250px">Contact Person</th>
                        <th width="200px">Title</th>
                        <th width="200px" id="tblemail">Email</th>
                        <th width="250px" id="tblphone">Phone</th>
                        <th width="250px" id="tblmobile">Mobile</th>
                        <th width="250px" id="tblbusiness">Business Consultant</th>
                        <th width="250px" id="tbljoin">Join Date (Y-M-D)</th>
                        <th width="200px" id="tblassignment">Assignment</th>
                                    <th width="150px" id="tblusername">Input By</th>

                                    <th style="width:125px;" class="printoff">Action
                            </p></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($company as $company){?>
                        <tr >
                            <td style="color: black; background-color: whitesmoke"><?php echo date("Y").sprintf("%03s", $company->no_company);?></td>
                            <td style="color: black; background-color: whitesmoke"><?php echo $company->npwp;?></td>
                            <td style="color: black; background-color: whitesmoke"><?php echo $company->company;?></td>
                            <td style="color: black; background-color: whitesmoke"><?php echo $company->parent_company;?></td>
                            <td style="color: black; background-color: whitesmoke"><?php echo $company->address;?></td>
                            <td style="color: black; background-color: whitesmoke"><?php echo $company->city;?></td>
                            <td style="color: black; background-color: whitesmoke"><?php echo $company->contact_person;?></td>
                            <td style="color: black; background-color: whitesmoke"><?php echo $company->title;?></td>
                            <td style="color: black; background-color: whitesmoke" class="isiemail"><?php echo $company->email;?></td>
                            <td style="color: black; background-color: whitesmoke" class="isiphone"><?php echo $company->phone;?></td>
                            <td style="color: black; background-color: whitesmoke" class="isimobile"><?php echo $company->mobile;?></td>
                            <td style="color: black; background-color: whitesmoke" class="isibusiness"><?php echo $company->business_consultant;?></td>
                            <td style="color: black; background-color: whitesmoke" class="isidate"><?php echo $company->join_date;?></td>
                            <td style="color: black; background-color: whitesmoke" class="isiassignment"><?php echo $company->assignment;?></td>
                            <td style="color: black; background-color: whitesmoke" class="username"><?php echo $company->username;?></td>

                            <td class="printoff" style="color: black; background-color: whitesmoke">
                                <button class="btn btn-warning printoff" title="Edit" onclick="edit_company(<?php echo $company->no_company;?>)"><i class="glyphicon glyphicon-edit"></i></button>
                                <button class="btn btn-danger printoff" title="Delete" onclick="delete_company(<?php echo $company->no_company;?>)"><i class="glyphicon glyphicon-remove-sign"></i></button>


                            </td>
                        </tr>
                    <?php }?>



                    </tbody>

                </table>

                        </div>
                        </div>

                </div>


    <script type="text/javascript">

//fungsi menampilkan/menyembunyikan kolom
        function changeColumn(x) {

            if ( x.value === "Show All Columns" )  {
                $("#tblassignment").show();
                $("#tblemail").show();
                $("#tblphone").show();
                $("#tbljoin").show();
                $("#tblmobile").show();
                $("#tblbusiness").show();
                $("#tblusername").show();
                $(".isiassignment").show();
                $(".isiemail").show();
                $(".isiphone").show();
                $(".isidate").show();
                $(".isimobile").show();
                $(".isibusiness").show();
                $(".username").show();
                x.value = "Hide Some Columns";
            }
            else {
                $("#tblassignment").hide();
                $("#tblemail").hide();
                $("#tblphone").hide();
                $("#tbljoin").hide();
                $("#tblmobile").hide();
                $("#tblbusiness").hide();
                $("#tblusername").hide();
                $(".username").hide();
                $(".isiassignment").hide();
                $(".isiemail").hide();
                $(".isiphone").hide();
                $(".isidate").hide();
                $(".isimobile").hide();
                $(".isibusiness").hide();
                x.value = "Show All Columns";
            }
        }
        $(document).ready(function() {
            $("#npwp").focus();
            });
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
            $('#npwp').focus();
            $('#disabled').attr('disabled', false);

            $('.modal-title').text('Add Company'); // Set Title to Bootstrap modal title
        }

        function edit_company(no_company)
        {
            save_method = 'update';
            $('#form')[0].reset(); // reset form on modals
            $('#disabled').attr('disabled', !this.checked);

            //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo site_url('index.php/c_company/ajax_edit/')?>/" + no_company,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
                    //mengambil data dalam bentuk json
                    $('[name="no_company"]').val(data.no_company);
                    $('[name="npwp"]').val(data.npwp);
                    $('[name="company"]').val(data.company);
                    $('[name="parent_company"]').val(data.parent_company);
                    $('[name="address"]').val(data.address);
                    $('[name="city"]').val(data.city);
                    $('[name="contact_person"]').val(data.contact_person);
                    $('[name="title"]').val(data.title);
                    $('[name="email"]').val(data.email);
                    $('[name="phone"]').val(data.phone);
                    $('[name="mobile"]').val(data.mobile);
                    $('[name="business_consultant"]').val(data.business_consultant);
                    $('[name="join_date"]').val(data.join_date);
                    $('[name="assignment"]').val(data.assignment);


                    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Edit Company'); // Set title to Bootstrap modal title

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
            if (save_method === 'add') { //jika save_method = add, menambah data baru

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

        function delete_company(no_company)
        {
            if(confirm('Are you sure delete this data?'))
            {
                // ajax delete data from database
                $.ajax({
                    url : "<?php echo site_url('index.php/c_company/company_delete')?>/"+no_company,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {

                        location.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data \n(Company sedang menggunakan jasa)');
                    }
                });

            }
        }


    </script>
    <!-- Bootstrap modal -->
    <div class="modal fade mymodal modal-lg" style="right: 50%; left: 25%;" id="modal_form" role="dialog">
        <div class="modal-dialog modal-lg" style="align-content: center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Company Form</h3>
                </div>
                <div class="modal-body form">
                        <form  action=""  name="myform"
                          id="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label "  for="npwp">&nbsp &nbsp&nbspNPWP</label>
                                <div class="col-md-12">
                                    <input  id="npwp"  name="npwp" autofocus placeholder="NPWP" style="color: black" required class="form-control" type="text" >
                            </div>

                            </div>
                            <div class="form-group" hidden >
                                <label class="control-label col-sm-3" for="no_company">&nbsp &nbsp&nbspNo Company</label>
                                <div class="col-md-12">
                                    <input name="no_company" placeholder="Nomor Company" required class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="company">&nbsp &nbsp&nbspCompany</label>
                                <div class="col-md-12">
                                    <input name="company" placeholder="Company" style="color: black" required class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="parent_company">&nbsp &nbsp&nbspParent Company</label>
                                <div class="col-md-12">
                                    <input name="parent_company" style="color: black" placeholder="Parent Company" class="form-control" type="text">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="address">&nbsp &nbsp&nbspAddress</label>
                                <div class="col-md-12">
                                    <input name="address" placeholder="Address" style="color: black" required class="form-control" type="text">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="city">&nbsp &nbsp&nbspCity</label>
                                <div class="col-md-12">
                                    <input name="city" placeholder="City" style="color: black" required class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="contact_person">&nbsp &nbsp&nbspContact Person</label>
                                <div class="col-md-12">
                                    <input name="contact_person" style="color: black" required placeholder="Contact Person" class="form-control" type="text">
                                </div>
                            </div>
                            </div>

                            <!--                            Right Column-->
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label " for="title">&nbsp &nbsp&nbspTitle</label>
                                <div class="col-md-12">
                                    <input name="title" placeholder="Title" style="color: black" required class="form-control" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label " for="email">&nbsp &nbsp&nbspEmail</label>
                                <div class="col-md-12">
                                    <input name="email" placeholder="Email" style="color: black" required class="form-control" type="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label " for="phone">&nbsp &nbsp&nbspPhone</label>
                                <div class="col-md-12">
                                    <input name="phone" id="phone" placeholder="Phone (awalan +62)" style="color: black" required value="+62" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="mobile">&nbsp &nbsp&nbspMobile</label>
                                <div class="col-md-12">
                                    <input name="mobile" id="mobile" placeholder="Mobile" value="+62" style="color: black" required class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="business_consultant">&nbsp &nbsp&nbspBusiness Consultant</label>
                                <div class="col-md-12">
<!--                                    //<input name="business_consultant" required placeholder="Business Consultant" class="form-control" type="text">-->
                                    <select name="business_consultant" style="height: 40px; color: black" class="form-control" required>
                                        <option value="" disabled selected hidden>Please Choose...</option>
                                        <option value="Fahmi Ernanto">Fahmi Ernanto</option>
                                        <option value="Hadi Fatkhul Amin">Hadi Fatkhul Amin</option>
                                        <option value="Mochamad Badrinsyah">Mochamad Badrinsyah</option>
                                        <option value="Movita Suci Mutiara">Movita Suci Mutiara</option>
                                        <option value="Shoba Mediwati">Shoba Mediwati</option>
                                        <option value="Sigit Tri Marwanto">Sigit Tri Marwanto</option>
                                        <option value="Yohanes Kariana">Yohanes Kariana</option>
                                    </select>


                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="join_date">&nbsp &nbsp&nbspJoin Date</label>
                                <div class="col-md-12">
                                    <input name="join_date" id="join_date" data-date-format="dd/mm/yyyy"  placeholder="Join Date" style="color: black" required class="form-control" type="date">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="assignment">&nbsp &nbsp&nbspAssignment</label>
                                <div class="col-md-12">
<!--                                    <input name="assignment" placeholder="Assignment" required class="form-control" type="text">-->
                                    <select title="Choose Assignment" name="assignment" style="height: 40px; color: black" class="form-control" required>
                                        <option value="" disabled selected hidden>Please Choose...</option>
                                        <option value="Full Managed">Full Managed</option>
                                        <option value="Lead Assignment">Lead Assignment</option>
                                        <option value="Project Assignment">Project Assignment</option>
                                        <option value="Replacement">Replacement</option>

                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                <button type="submit" id="btnSave "class="btn btn-primary" onclick="save()">Save</button>
                            </div>
                        </form>
                 </div>
                    </div>
                    </div>
    </div>
<!-- /.modal-content -->
      <!-- /.modal-dialog -->
    <!-- /.modal -->
    <!-- End Bootstrap modal -->


</body>
</html>
