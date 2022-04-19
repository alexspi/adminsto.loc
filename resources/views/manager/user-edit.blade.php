@extends('layouts.simple.master')
@section('title', 'Ajax DataTables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Список пользователей(менеджеров)</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item"> <a href="{{route('index')}}"><i class="ik ik-home"></i></a></li>
    <li class="breadcrumb-item active">Менеджеры</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Ajax data source array start-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Менеджеры</h5>
                    </div>
                    <div class="card-body">
                        <form class="form theme-form" method="POST" action="{{ route('user.update') }}" >
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="name">{{ __('Username')}}<span class="text-red">*</span></label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ clean($user->name, 'titles')}}" placeholder="Enter user name" required>
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">{{ __('Email')}}<span class="text-red">*</span></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ clean($user->email, 'titles')}}" placeholder="Enter email address" required>
                                        <div class="help-block with-errors" ></div>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password">{{ __('Password')}}<span class="text-red">*</span></label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" >
                                        <div class="help-block with-errors"></div>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm">{{ __('Confirm Password')}}<span class="text-red">*</span></label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype password" >
                                        <div class="help-block with-errors"></div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <!-- Assign role & view role permisions -->
                                    <div class="form-group">
                                        <label for="role">{{ __('Assign Role')}}<span class="text-red">*</span></label>
                                        {!! Form::select('role', $roles, $user_role->id??'' ,[ 'class'=>'form-control select2', 'placeholder' => 'Select Role','id'=> 'role', 'required'=>'required']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="role">{{ __('Permissions')}}</label>
                                        <div id="permission" class="form-group">
                                            @foreach($user->getAllPermissions() as $key => $permission)
                                                <span class="badge badge-dark m-1">
                                                <!-- clean unescaped data is to avoid potential XSS risk -->
                                                {{ clean($permission->name, 'titles')}}
                                            </span>
                                            @endforeach
                                        </div>
                                        <input type="hidden" id="token" name="token" value="{{ csrf_token() }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">{{ __('Submit')}}</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Ajax data source array end-->





        </div>
    </div>
@endsection

@section('script')
    {{--    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>--}}
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    {{--    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>--}}
    <script src="{{ asset('assets/js/get-role.js') }}"></script>
@endsection