@extends('backend.backendTemplate')

@section('head')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('backendFiles/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backendFiles/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backendFiles/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backendFiles/dist/css/adminlte.min.css')}}">
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h1 class="m-0">Events</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('cms')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Events</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title d-flex justify-content-between w-100">
                    <div>
                        <i class="fas fa-list"></i> 
                        <span class="ml-2"> Events Archive </span> 
                    </div>
                    <div>
                        <a class="btn btn-primary" href="{{route('events.create')}}">
                            <i class="fas fa-plus"></i>
                            <span class="ml-2">Add Event</span>
                        </a>
                    </div>
                </h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Date</th>
                        <th>Image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($events as $event)
                      <tr>
                        <td>{{$event->title}}</td>
                        <td>{!! $event->body !!}</td>
                        <td>{{$event->date}}</td>
                        <td>
                          <img src="{{asset('storage/'.$event->image)}}" alt="" width="200px" height="auto">
                        </td>
                        <td>
                            <div class="actions d-flex">
                              <a href="{{route('events.show', $event->id)}}">
                                <div class="icon show text-info">
                                    <i class="fas fa-eye"></i>
                                </div>
                              </a>
                              <a href="{{route('events.edit', $event->id)}}">
                                <div class="icon edit ml-3 text-primary">
                                    <i class="fas fa-edit"></i>
                                </div>
                              </a>
                              <div class="icon delete ml-3 text-danger">
                                <form action="{{route('events.destroy', $event->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="delete-btn text-danger cursor-pointer"><i class="fas fa-trash"></i></button>
                                </form>
                              </div>

                            </div>
                        </td>
                      </tr>
                      @endforeach
                    </tfoot>
                  </table>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->
      </div>
</div>
@endsection

@section('js')
<!-- jQuery -->
<script src="{{asset('backendFiles/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backendFiles/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('backendFiles/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backendFiles/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backendFiles/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backendFiles/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('backendFiles/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backendFiles/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backendFiles/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('backendFiles/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('backendFiles/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('backendFiles/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backendFiles/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('backendFiles/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backendFiles/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backendFiles/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
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
@endsection