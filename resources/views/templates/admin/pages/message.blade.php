@extends('templates.admin.index')

@section('head')
    <link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content-header')
    <section class="content-header">
      <h1>
        Messages
        <small>Message List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Message</li>
      </ol>
    </section>
@endsection

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Table List of Message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Organization</th>
                        <th>Budget</th>
                        <th>Service Type</th>
                        <th>Description</th>
                    </tr>
                </thead>
                @php
                    $msgs = App\Message::get();
                    $no = 1;
                @endphp
                <tbody>
                    @foreach ($msgs as $msg)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$msg->name}}</td>
                        <td>{{$msg->email}}</td>
                        <td>{{$msg->phone}}</td>
                        <td>{{$msg->organization}}</td>
                        <td>{{$msg->budget}}</td>
                        <td>{{$msg->serviceType}}</td>
                        <td>{{$msg->description}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Organization</th>
                        <th>Budget</th>
                        <th>Service Type</th>
                        <th>Description</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- ./col -->
      </div>
    </section>
@endsection

@section('script')
    <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
        })
    })
    </script>
@endsection