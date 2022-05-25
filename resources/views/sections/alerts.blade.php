<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session()->has('success')) 
  <script>
    swal("{{session()->get('success')}}", "", "success");
  </script>
@endif

@if(session()->has('error')) 
  <script>
    swal("{{session()->get('error')}}", "", "warning");
  </script>
@endif