<footer class="main-footer">
  <strong>Copyright &copy; SIM GEREJA BETHEL TABERNAKEL SILIRAGUNG <?= date('Y') ?></strong>
</footer>

</div>
<!-- ./wrapper -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
      </div>
    </div>
  </div>
</div>


<!-- jQuery -->
<script src="<?= base_url('assets/admin/') ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/admin/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/admin/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/admin/') ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/admin/') ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/admin/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/admin/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/admin/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/admin/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/admin/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/admin/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/') ?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/admin/') ?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/admin/') ?>dist/js/pages/dashboard.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/admin/') ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('assets/admin/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('assets/admin/') ?>plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('assets/admin/') ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('assets/admin/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?= base_url('assets/admin/') ?>plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?= base_url('assets/admin/') ?>plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/') ?>dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/admin/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- bs-custom-file-input -->
<script src="<?= base_url('assets/admin/') ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- ajax rmenu role access -->
<script>
  $('.form-check-input').on('click', function() {
    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
      url: "<?= base_url('admin/dashboard/changeaccess'); ?>",
      type: 'post',
      data: {
        menuId: menuId,
        roleId: roleId
      },
      success: function() {
        document.location.href = "<?= base_url('admin/dashboard/roleaccess/'); ?>" + roleId;
      }
    });
  });
</script>

<!-- Page specific script -->
<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
      'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
      'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'DD-MM-YY'
    });

    //Date picker
    $('#reservationdate2').datetimepicker({
      format: 'DD-MM-YY'
    });

    //Date picker
    $('#reservationdate3').datetimepicker({
      format: 'DD-MM-YY'
    });

    //Date picker
    $('#reservationdate4').datetimepicker({
      format: 'DD-MM-YY'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({
      icons: {
        time: 'far fa-clock'
      }
    });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM-DD-YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function() {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function() {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() {
      myDropzone.enqueueFile(file)
    }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      "buttons": ["copy", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

  });
</script>

<script>
  $(function() {
    bsCustomFileInput.init();
  });
</script>

<script>
  $(function() {
    // Summernote
    $('#summernote').summernote({
      height: 300,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        ['fontname', ['fontname']],
        ['fontsize', ['fontsize']],
        ['forecolor', ['forecolor']],
        ['para', ['ol', 'ul', 'paragraph', 'height']],
        ['table', ['table']],
        ['insert', ['link']],
        ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
      ]
    });
  })
</script>
<!--<script type="text/javascript">
  $(document).ready(function() {
    $('#tabelData').DataTable();

    function filterData() {
      $('#tabelData').DataTable().search(
        $('.status').val()
      ).draw();
    }
    $('.status').on('change', function() {
      filterData();
    });
  });
</script>-->
<script>
  $(document).ready(function() {
    $('#tabelData').DataTable({
      initComplete: function() {
        this.api()
          .columns()
          .every(function() {
            var column = this;
            var select = $('<select><option value=""></option></select>')
              .appendTo($(column.footer()).empty())
              .on('change', function() {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                column.search(val ? '^' + val + '$' : '', true, false).draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function(d, j) {
                select.append('<option value="' + d + '">' + d + '</option>');
              });
          });
      },
    });
  });
</script>

<script>
  // $('[data-widget="pushmenu"]').PushMenu("collapse");
  // $('[data-widget="pushmenu"]').PushMenu("expand");
  // $('[data-widget="pushmenu"]').PushMenu("toggle");
  // if (screen.width < 920)
  //   $('[data-widget="pushmenu"]').PushMenu("collapse");
</script>
</body>

</html>