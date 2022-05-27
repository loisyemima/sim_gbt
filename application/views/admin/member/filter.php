<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Filter Data PHP</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1 align="center"> Membuat Filter Data</h1>
    <br>
    <div class="col-md-4">
      <table class="table">
        <tr>
          <td>
            <select name="" id="status" class="form-control">
              <option>Semua</option>
              <option value="Member">Member</option>
              <option value="Non Member">Non Member</option>
            </select>
          </td>
        </tr>
      </table>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover" id="member">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Place Of Birth</th>
            <th>Date Of Birth</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#status").change(function() {
        member();
      });

    });

    function member() {
      var status = $("#status").val();
      $.ajax({
        url: "<?= base_url('member/load_member') ?>",
        data: "status=" + status,
        success: function(data) {
          //$("#mahasiswa tbody").html('<tr><td colspan="4" align="center"> Tidak Ada Data </td></tr>')
          $("#member tbody").html(data);
        }
      });
    }
  </script>
</body>

</html>