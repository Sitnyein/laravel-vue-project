



@extends('admin.layouts.app')
@section('content')
 <div class="col-4">
  <div class="card">
    <div class="card-body">
        <form action="{{route('post#create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class=" form-group">
            <label for="title">Post Name</label>
            <input type="text" name="name" id="title" value="{{old('title',$postdetail->name)}}" class=" form-control" placeholder="Enter new title">
            @error('name')
            <div class="text-danger"> {{$message}} </div>
            @enderror
        </div>

        <div class=" form-group">
            <label for="categorytext">Post Description</label>
            <textarea name="description" id="categorytext" class=" form-control" cols="30" rows="10" placeholder="Enter new descrtion">{{old('description',$postdetail->description)}}</textarea>
            @error('description')
            <div class="text-danger"> {{$message}} </div>
            @enderror
        </div>

        <div class=" form-group">
            <label class=" d-block">Post Image</label>
            <input type="file" name="image"  class=" form-contorl"> <br>
            @if ($postdetail['image'] == null )
            <img  style="width:100%" src="{{ asset('dimage/images.png') }}">
            @else
            <img  style="width:100%" src="{{ asset('storage/' . $postdetail->image) }}">
            @endif
        </div>

        <div class="form-group">
          <label >Category</label>
        <select name="category" class="form-control">
          <option value="">Choose your category </option>
          @foreach ($category as $c)
              <option value="{{$c->id}}" @if($postdetail->category_id == $c->id) selected  @endif> {{$c->title}} </option>
          @endforeach
        </select>
        @error('category')
        <div class="text-danger"> {{$message}} </div>
        @enderror

      </div>

        <button type="submit" class="btn btn-dark text-white">Update</button>
        </form>
    </div>
  </div>
 </div>
 <div class="col-7">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> list  page</h3>

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
              <th>Post ID</th>
              <th>Post Title</th>
              <th>Image</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
         {{-- @foreach ($post as $item)
         <tr>
          <td>{{ $item['id'] }}</td>
          <td> {{$item['title'] }} </td>
          <td>
            @if ($item['image'] == null )
            <img  style="width:100px" src="{{ asset('dimage/images.png') }}">
            @else
            <img  style="width:100px" src="{{ asset('storage/' . $item->image) }}">
            @endif
          </td>
          <td>
             <a href="#">
                <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button>
            </a>
            <a href="{{route('post#delete',$item['id'])}}">
                <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
            </a>
        </td>
         </tr>
         @endforeach --}}
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection




