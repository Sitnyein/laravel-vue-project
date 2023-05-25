



@extends('admin.layouts.app')
@section('content')
 <div class="col-4">
  <div class="card">
    <div class="card-body">
        <form action="{{route('category#create')}}" method="post">
        @csrf
        <div class=" form-group">
            <label for="title">Category Name</label>
            <input type="text" name="name" id="title" class=" form-control" placeholder="Enter new title">
            @error('name')
            <div class="text-danger"> {{$message}} </div>
            @enderror
        </div>
        <div class=" form-group">
            <label for="categorytext">Description</label>
            <textarea name="description" id="categorytext" class=" form-control" cols="30" rows="10" placeholder="Enter new descrtion"></textarea>
            @error('description')
            <div class="text-danger"> {{$message}} </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-dark text-white">Create</button>
        </form>
    </div>
  </div>
 </div>
 <div class="col-7">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> Categroy  page</h3>

        <div class="card-tools">

            <form action="{{route('category#search')}}" method="get">
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
              <th>Category ID</th>
              <th>Category Title</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
         @foreach ($category as $item)
         <tr>
          <td>{{ $item['id'] }}</td>
          <td> {{$item['title'] }} </td>
          <td> {{ $item['description'] }} </td>
          <td>
             <a href="{{route('category#edit',$item['id'])}}">
                <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button>
            </a>
            <a href="{{ route('category#delete', $item['id'])}}">
                <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
            </a>
        </td>
         </tr>
         @endforeach
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection




