<div class="footer footer1">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <img src="<?= base_url('img/logo-logo.png') ?>" width="72" height="72" />
            <h4 class="white">Sistem Informasi Geografis Ip Farms</h4>
          <h3 class="white">Indonesia</h3>
          <ul class="list-inline">
            <li><a href="<?= base_url('index.php');?>" class="link-footer">Beranda</a></li>
            <li><a href=""  class="link-footer" data-toggle="modal" data-target="#about">Tentang</a></li>
          </ul>

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">About</h4>
      </div>
      <div class="modal-body">
        <h4>SISTEM INFORMASI GEOGRAFIS IP FARMS</h4>

      </div>
    </div>
  </div>
</div>

    <script src="<?= base_url('js/jquery.min.js');?>"></script>
    <!-- <script src="<?= base_url('js/script.js');?>"></script> -->
    <script src="<?= base_url('js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('js/bootstrap-hover-dropdown.js');?>"></script>
    <script src="<?= base_url('js/jquery.dataTables.min.js');?>"></script>
    <script src="<?= base_url('js/jquery.min.js');?>"></script>
    <script src="<?= base_url('js/datatable-bootstrap.js');?>"></script>
    <script src="<?= base_url('js/bootstrap-datepicker.js');?>"></script>
    <script src="<?= base_url('DataTables/datatables.min.js');?>"></script>

    <script>
    $(document).ready(function() {
    $('#table-admin').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    });
    $(document).ready(function() {
    $('#table-admin1').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    });
    </script>

  </body>
</html>
