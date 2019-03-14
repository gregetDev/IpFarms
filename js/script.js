$(document).ready(function() {
  $('#table_data, #table-admin').dataTable();
});
$(document).ready(function() {
  $('#table_data, #table-admin').DataTable({
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
          ]
      } );
});
