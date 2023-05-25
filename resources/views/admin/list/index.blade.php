
@extends('admin.layouts.app')
@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">list Page</h3>

        <div class="card-tools">
       <form action="{{route('admin#list')}}" method="get">
        @csrf
        <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="key" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
       </form>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap text-center">
          <thead>
            <tr>
              <th> ID</th>
              <th> Name</th>
              <th>Email</th>
              <th> Phone </th>
              <th> Address </th>
              <th> Gender </th>

            </tr>
          </thead>
          <tbody>
         @foreach ($user as $admin )
         <tr>
            <td > {{$admin->id}} </td>
            <td >{{$admin->name}}</td>
            <td > {{$admin->email}} </td>
            <td > {{$admin->phone}} </td>
            <td >  {{$admin->address }}  </td>
            <td > {{$admin->gender}} </td>
            <td>
              {{-- <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button>  --}}
          @if ($admin->id == Auth::user()->id)
          @else
          <a href=" {{route('admin#delete',$admin->id)}} ">
            <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
          </a>
          @endif
            </td>
          </tr>

         @endforeach

          </tbody>
        </table>


      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

@endsection
