@extends('backend.backendTemplate')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h1 class="m-0">Event</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('cms')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('events.index')}}">Events</a></li>
                    <li class="breadcrumb-item active">Event Details</li>
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
                        <i class="fas fa-file-alt"></i>
                        <span class="ml-2"> Event Details </span> 
                    </div>
                </h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                    
                    <tbody>
                      <tr>
                        <th scope="row">title</th>
                        <td>{{$event->title}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Body</th>
                        <td>{!! $event->body !!}</td>
                      </tr>
                      <tr>
                        <th scope="row">Date</th>
                        <td>{{$event->date}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Image</th>
                        <td>
                            <img src="{{asset('storage/'.$event->image)}}" alt="" height="auto" style="max-width: 700px">
                        </td>
                      </tr>
                    </tbody>
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