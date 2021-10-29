<!-- jQuery -->
<script src="{{URL::asset('js/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<!-- DataTables  & Plugins -->
<script src="{{ URL::asset('datatables/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('datatables/js/datatables-bs4/dataTables.bootstrap4.min.j') }}"></script>
<script src="{{ URL::asset('datatables/js/datatables-responsive/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('datatables/js/datatables-responsive/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('datatables/js/datatables-buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('datatables/js/datatables-buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('datatables/js/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('datatables/js/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('datatables/js/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('datatables/js/datatables-buttons/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('datatables/js/datatables-buttons/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('datatables/js/datatables-buttons/buttons.colVis.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{URL::asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('js/demo.js')}}"></script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
