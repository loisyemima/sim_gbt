  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <a href="<?= base_url('admin/member/create_member'); ?>" class="btn btn-primary mb-3">Add New Member</a>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Custom Filter : </h3>
                  </div>
                  <div class="panel-body">
                    <form id="form-filter" class="form-horizontal">
                      <div class="form-group">
                        <label for="country" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-4">
                          <?php echo $form_country; ?>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Golongan</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!--<?php foreach ($member as $mm) : ?>
    <div class="modal fade" id="View<?php echo $mm['member_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

      <div class="modal-dialog">

        <div class="modal-content">

          <div class="modal-header">

            <h5 class="modal-title" id="myModalLabel">View Post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <div class="col">

              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped table-bordered table-hover">

                <tr>
                  <img src="<?php echo base_url('assets/img/profile/member/' . $mm['images']); ?>" width="350px">
                  <br>

                  <td>Nama</td>
                  <td><?php echo $mm['fullname'] ?></td>
                </tr>

                <tr>
                  <td>Tempat Lahir</td>
                  <td><?php echo $mm['place'] ?></td>
                </tr>

                <tr>
                  <td>Tanggal Lahir</td>
                  <td><?php echo $mm['birth'] ?></td>
                </tr>

                <tr>
                  <td>username</td>
                  <td><?php echo $mm['username'] ?></td>
                </tr>


              </table>

            </div>

            <div class="clearfix"></div>

          </div>



          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>

        </div>

      </div>

    </div>
  <?php endforeach; ?>-->
  <!-- End Modals-->





  <!--<script>
    $(document).ready(function() {
      $("#status").change(function() {
        member();
      });

    });

    function member() {
      var status = $("#status").val();
      $.ajax({
        url: "<?= base_url('Member/load_member') ?>",
        data: "status=" + status,
        success: function(data) {
          //$("#mahasiswa tbody").html('<tr><td colspan="4" align="center"> Tidak Ada Data </td></tr>')
          $("#member tbody").html(data);
        }
      });
    }
  </script>-->

  <script type="text/javascript">
    var table;

    $(document).ready(function() {

      //datatables
      table = $('#table').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": "<?php echo site_url('member/ajax_list') ?>",
          "type": "POST",
          "data": function(data) {
            data.status = $('#status').val();
          }
        },

        //Set column definition initialisation properties.
        "columnDefs": [{
          "targets": [0], //first column / numbering column
          "orderable": false, //set not orderable
        }, ],

      });

      $('#btn-filter').click(function() { //button filter event click
        table.ajax.reload(); //just reload table
      });
      $('#btn-reset').click(function() { //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload(); //just reload table
      });

    });
  </script>