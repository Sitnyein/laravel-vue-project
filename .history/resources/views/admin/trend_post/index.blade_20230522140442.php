
@extends('admin.layouts.app')
@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Trend page</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap text-center">
          <thead>
            <tr>
              <th> ID</th>
              <th>Post title</th>
              <th>Image</th>
              <th>View Count</th>

              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($action as $item )
            <tr>
                <td>{{$item['post_id']}}</td>
                <td>{{$item['title']}}</td>
                <td>Seafood Pizza</td>
                <td>{{$itme['post_count']}}</td>

                <td>
                  <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button> </td>
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
