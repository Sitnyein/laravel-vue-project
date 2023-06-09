@extends('admin.layouts.app')
@section('content')


 <!-- MAIN CONTENT-->

        {{-- main-create  --}}
        <div class="container-fluid mt-5">
            <div class="col-lg-6 offset-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Change password</h3>
                        </div>
                        <hr>

                        @if(session('notMatch'))

                        <div class="alert alert-warning alert-dismissible fade show mt" role="alert">
                          {{session('notMatch')}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif

                        @if(session('success'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{session('success')}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif

                        <form action="{{route('password#change')}}" method="post" novalidate="novalidate">
                            @csrf
                            <div class="form-group">
                                <label class="control-label mb-1">Current password</label>
                                <input id="cc-pament" name="current" type="password" class=" form-control @error('current') is-invalid @enderror "
                                aria-required="true"   aria-invalid="false" placeholder="Enter your password...">
                                @error('current')
                                <div class="invalid-feedback">
                                    <span style="color:red"> {{$message}} </span>
                                 </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label mb-1">New password</label>
                                <input id="cc-pament" name="new" type="password" class=" form-control @error('new') is-invalid @enderror "
                                aria-required="true"   aria-invalid="false" placeholder="Enter your password...">
                                @error('new')
                                <div class="invalid-feedback">
                                    <span style="color:red"> {{$message}} </sp>
                                 </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label mb-1">Comfrim password</label>
                                <input id="cc-pament" name="comfrim" type="password" class=" form-control @error('comfrim') is-invalid @enderror "
                                aria-required="true"   aria-invalid="false" placeholder="Enter your password...">
                                @error('comfrim')
                                <div class="invalid-feedback">
                                    <span style="color:red"> {{$message}} </span>
                                 </div>
                                @enderror
                            </div>



                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Updating</span>
                                    {{-- <span id="payment-button-sending" style="display:none;">Sending…</span> --}}
                                    <i class="fa-solid fa-circle-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- end create  --}}
        </div>



@endsection
