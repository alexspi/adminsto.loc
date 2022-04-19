@extends('layouts.simple.master')
@section('title', 'Ajax DataTables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('style')
@endsection



@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="ik ik-home"></i></a></li>
    <li class="breadcrumb-item active">Доступы</li>
@endsection

@section('content')
    <div class="container-fluid">
        {{--		@can('manage_role')--}}
{{--        @can('manage_permission')--}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Добавить доступ')}}</h3></div>
                    <div class="card-body">
                        <form class="row theme-form" method="POST" action="{{route('permission.create')}}">
                            @csrf

                            <div class="col-sm-4 mb-3 ">

                                <label class="col-form-label" for="permission">{{ __('Ключ доступа')}}<span
                                            class="text-red">*</span></label>
                                <input type="text" class="form-control" id="permission" name="permission"
                                       placeholder="Permission Name" required>

                            </div>
                            <div class="col-sm-6 mb-3 ">


                                <label class="col-form-label" for="role">{{ __('Роль пользователя')}}<span
                                            class="text-red">*</span></label>
                                {{--                                        {!! Form::select('role', $roles, null,[ 'class'=>'form-control select2', 'placeholder' => 'Select Role','id'=> 'role', 'required'=> 'required']) !!}--}}
                                <select name="role" class=" form-control select2 col-sm-12" multiple="multiple">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-sm-2 pt-4 mt-2 ">

                                <button type="submit" class="btn btn-primary btn-rounded">{{ __('Сохранить')}}</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
{{--        @endcan--}}
        {{--		@endcan--}}
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <div class="card-body">
                        <table id="permission_table" class="table">
                            <thead>
                            <tr>
                                <th>{{ __('Ключ')}}</th>
                                <th>{{ __('Роли')}}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ajax data source array end-->


    </div>
@endsection

@section('script')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    {{--    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>--}}
    <script src="{{ asset('assets/js/permission.js') }}"></script>
@endsection