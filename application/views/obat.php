
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Apotek UNS Medical Center</title>

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
                  <li class="selected"><a href="<?php base_url()?>obat"><i class="fa fa-tasks"></i> Obat</a></li>
                  <li><a href="<?php base_url()?>karyawan"><i class="fa fa-tasks"></i> Karyawan</a></li>
                  <li><a href="<?php base_url()?>supplier"><i class="fa fa-tasks"></i> Supplier</a></li>
                  <li><a href="<?php base_url()?>obat_masuk"><i class="fa fa-tasks"></i> Obat Masuk</a></li>
                  <li><a href="<?php base_url()?>logout"><i class="fa fa-globe"></i> Log Out</a></li>
                </ul>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  <button class="btn btn-success" onclick="add_obat()"><i class="glyphicon glyphicon-plus"></i> Add obat</button>
                  <form method="post" action="<?php echo base_url(). 'admin/searchDataobat'; ?>" style="margin-top: -40px">
                    <div class="main-container" align="right">
                        <input placeholder="Search by Name" class="fixer-container" name="nama_obat" type="text" class="input" id="input01"></input>
                        <button class="btn btn-success" onclick="<?php echo site_url('index.php/Admin/searchDataobat')?>"><i class="glyphicon glyphicon-search"></i></button>
                      </div>
                  </form>
                  </br> </br>
                  <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
              					<th>Barcode</th>
              					<th>Nama obat</th>
              					<th>Kategori</th>
              					<th>Stok</th>
                        <th>Supplier</th>
                        <th>Tanggal Kadaluarsa</th>

                        <th style="width:125px;">Action
                        </p></th>
                      </tr>
                    </thead>
                    <tbody>
              				<?php foreach($obat as $obat){?>
              				     <tr>
              				         <td><?php echo $obat->barcode;?></td>
              				         <td><?php echo $obat->nama_obat;?></td>
              								 <td><?php echo $obat->kategori;?></td>
              								<td><?php echo $obat->stok;?></td>
                              <td><?php echo $obat->nama_supplier;?></td>
                              <td><?php echo $obat->tanggal_kadaluarsa;?></td>
              								<td>
              									<button class="btn btn-warning" onclick="edit_obat(<?php echo $obat->barcode;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
              									<button class="btn btn-danger" onclick="delete_obat(<?php echo $obat->barcode;?>)"><i class="glyphicon glyphicon-remove"></i></button>


              								</td>
              				      </tr>
              				     <?php }?>



                    </tbody>
                  </table>
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


      function add_obat()
      {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        $('#disabled').attr('disabled', false);
      //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
      }

      function edit_obat(barcode)
      {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('#disabled').attr('disabled', !this.checked);

        //Ajax Load data from ajax
        $.ajax({
          url : "<?php echo site_url('index.php/c_obat/ajax_edit/')?>/" + barcode,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {
              $('[name="id"]').val(data.id);
              $('[name="barcode"]').val(data.barcode);
              $('[name="nama_obat"]').val(data.nama_obat);
              $('[name="kategori"]').val(data.kategori);
              $('[name="stok"]').val(data.stok);
              $('[name="nama_supplier"]').val(data.nama_supplier);
              $('[name="nama"]').val(data.nama);
              $('[name="tanggal_kadaluarsa"]').val(data.tanggal_kadaluarsa);


              $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
              $('.modal-title').text('Edit obat'); // Set title to Bootstrap modal title

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
            url = "<?php echo site_url('index.php/c_obat/obat_add')?>";
        }
        else
        {
          url = "<?php echo site_url('index.php/c_obat/obat_update')?>";
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

      function delete_obat(barcode)
      {
        if(confirm('Are you sure delete this data?'))
        {
          // ajax delete data from database
            $.ajax({
              url : "<?php echo site_url('index.php/c_obat/obat_delete')?>/"+barcode,
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
          <h3 class="modal-title">obat Form</h3>
        </div>
        <div class="modal-body form">
          <form action="#" id="form" class="form-horizontal">
            <input type="hidden" value="" name="id"/>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3">Barcode</label>
                <div class="col-md-9">
                  <input id="disabled" name="barcode" placeholder="Barcode" class="form-control" type="text" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Nama Obat</label>
                <div class="col-md-9">
                  <input name="nama_obat" placeholder="Nama Obat" class="form-control" type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Kategori</label>
                <div class="col-md-9">
                  <select name="kategori">
                    <option>Bebas</option>
                    <option>Bebas Terbatas</option>
                    <option>Keras</option>
                    <option>Jamu</option>
                    <option>Herbal Berstandar</option>
                    <option>Fitofarmaka</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Stok</label>
                <div class="col-md-9">
                  <input name="stok" placeholder="Stok" class="form-control" type="text">

                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Supplier</label>
                <div class="col-md-9">
                  <select name="nama_supplier">
                    <?php foreach($supplier as $supplier){?>
                    <option value="<?php echo $supplier->nama;?>"><?php echo $supplier->nama;?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3">Tanggal Kadaluarsa</label>
                <div class="col-md-9">
                  <input name="tanggal_kadaluarsa" placeholder="tanggal kadaluarsa" class="form-control" type="date">

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
