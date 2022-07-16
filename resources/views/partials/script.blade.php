<!-- Javascripts -->
<script src="{{ asset('admin/assets/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/bootstrap/popper.min.js') }}"></script>
{{-- <script src="https://unpkg.com/@popperjs/core@2.11.0/dist/umd/popper.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> --}}
<script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/connect.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/select2.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/datatables.js')}}"></script>
<script src="{{ asset('admin/assets/plugins/fullcalendar/packages/core/main.min.js')}}"></script>
<script src="{{ asset('admin/assets/plugins/fullcalendar/packages/interaction/main.min.js')}}"></script>
<script src="{{ asset('admin/assets/plugins/fullcalendar/packages/daygrid/main.min.js')}}"></script>
<script src="{{ asset('admin/assets/plugins/fullcalendar/packages/timegrid/main.min.js')}}"></script>
<script src="{{ asset('admin/assets/plugins/fullcalendar/packages/bootstrap/main.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/pages/calendar.js') }}"></script>
{{-- <script src="{{ asset('vendor/sweetalert/sweetalert.all.js')}}"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(document).ready(function () {
    $('#myTable').DataTable({
      "aLengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All Pages"]],
      "pageLength": 5
    });
  });
</script>