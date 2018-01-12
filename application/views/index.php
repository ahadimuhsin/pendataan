
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lintas Media Danawa</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/local.css" />

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
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
                <a class="navbar-brand" >Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav" >
                    <li class="selected"><a href="<?php base_url()?>welcome"><i class="fa fa-bullseye"></i> Dashboard</a></li>
<!--                    <li><a href="--><?php //base_url()?><!--obat"><i class="fa fa-tasks"></i> Obat</a></li>-->
<!--                    <li><a href="--><?php //base_url()?><!--karyawan"><i class="fa fa-tasks"></i> Karyawan</a></li>-->
<!--                    <li><a href="--><?php //base_url()?><!--supplier"><i class="fa fa-tasks"></i> Supplier</a></li>-->
<!--                    <li><a href="--><?php //base_url()?><!--obat_masuk"><i class="fa fa-tasks"></i> Obat Masuk</a></li>-->
                    <li><a href="<?php base_url()?>company"><i class="fa fa-tasks"></i> Company</a></li>
                    <li><a href="<?php base_url()?>logout"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                </ul>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" >
            <div class="row" >
                <div class="col-lg-12">
                    <h3 align="left" >&nbsp Hai, <?php echo $this->session->userdata('username');?></h3>
                  <H3>&nbsp Di halaman ini, anda dapat:
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


    <script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
      var save_method; //for save method string
      var table;


      function add_book()
      {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
      //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
      }

      function edit_book(id)
      {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
          url : "<?php echo site_url('index.php/C_login/ajax_edit/')?>/" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {

              $('[name="book_id"]').val(data.book_id);
              $('[name="book_isbn"]').val(data.book_isbn);
              $('[name="book_title"]').val(data.book_title);
              $('[name="book_author"]').val(data.book_author);
              $('[name="book_category"]').val(data.book_category);


              $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
              $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title

          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error get data from ajax');
          }
      });
      }



      function save()
      {
        var url;
        if(save_method == 'add')
        {
            url = "<?php echo site_url('index.php/C_login/book_add')?>";
        }
        else
        {
          url = "<?php echo site_url('index.php/C_login/book_update')?>";
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

      function delete_book(id)
      {
        if(confirm('Are you sure delete this data?'))
        {
          // ajax delete data from database
            $.ajax({
              url : "<?php echo site_url('index.php/C_login/book_delete')?>/"+id,
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

    </script>
    <!-- Bootstrap modal -->
    <div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Book Form</h3>
        </div>
        <div class="modal-body form">
          <form action="#" id="form" class="form-horizontal">
            <input type="hidden" value="" name="book_id"/>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3">Book ISBN</label>
                <div class="col-md-9">
                  <input name="book_isbn" placeholder="Book ISBN" class="form-control" type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Book Title</label>
                <div class="col-md-9">
                  <input name="book_title" placeholder="Book_title" class="form-control" type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Book Author</label>
                <div class="col-md-9">
                  <input name="book_author" placeholder="Book Author" class="form-control" type="text">

                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Book Category</label>
                <div class="col-md-9">
                  <input name="book_category" placeholder="Book Category" class="form-control" type="text">

                </div>
              </div>

            </div>
          </form>
            </div>
            <div class="modal-footer">
              <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    <!-- End Bootstrap modal -->

</body>
</html>
