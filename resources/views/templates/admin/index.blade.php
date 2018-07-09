<!DOCTYPE html>
<html>
@include('templates.admin.part.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('templates.admin.part.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('templates.admin.part.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content-header')

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('templates.admin.part.footer')

  <!-- Control Sidebar -->
  {{-- @include('templates.admin.part.aside') --}}
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('templates.admin.part.script')
</body>
</html>
