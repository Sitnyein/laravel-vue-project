@extends('admin.layouts.app')
@section('content')
    <div class="col-8 offset-3 mt-5">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <legend class="text-center">User Profile</legend>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            @if(session('success'))

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                              {{session('success')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            @endif
                            <form class="form-horizontal" method="post" action="{{route('admin#update')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="adminname" class="form-control" id="inputName" placeholder="Name" value="{{ old('adminname',$user->name )}}">
                                    @error('adminname')
                                    <div class=" text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="{{old('email',$user->email)}}">
                                        @error('email')
                                        <div class=" text-danger">
                                             {{$message}}
                                         </div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="inputaddress" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea name="address" id="inputaddress"  placeholder="Enter address ....." class="form-control">{{old('address',$user->address)}}</textarea>
                                        @error('address')
                                        <div class=" text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="phone" class="form-control" id="inputPhone" placeholder="09########" value="{{old('phone',$user->phone)}}">
                                        @error('phone')
                                        <div class=" text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="selectgender" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                        <select name="gender" class=" form-control" id="selectgender">
                                            {{-- <option value="empty">Choose gender</option>  --}}
                                            <option value="male"
                                            @if ($user->gender == 'male') selected @endif>Male</option>
                                          <option value="female"
                                            @if ($user->gender == 'female') selected @endif>Female
                                          </option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn bg-dark text-white">Update</button>
                                    </div>
                                </div>
                            </form>

                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <a href="{{route('password#page')}}">Change Password</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
