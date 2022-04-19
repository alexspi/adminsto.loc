@extends('layouts.simple.master')
@section('title', 'Ajax DataTables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
{{--    <h3>Редактирование</h3>--}}
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item"> <a href="{{route('index')}}"><i class="ik ik-home"></i></a></li>
    <li class="breadcrumb-item active">Менеджеры</li>
@endsection

@section('content')
    <div class="container-fluid">
        {{--		@can('manage_role')--}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>{{ __('Редактировать')}}</h3></div>
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{route('role.update')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="role">{{ __('Role')}}<span class="text-red">*</span></label>
                                    <input type="text" class="form-control is-valid" id="role" name="role" value="{{ clean($role->name, 'titles')}}" placeholder="Insert Role">
                                    <input type="hidden" name="id" value="{{$role->id}}" required>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <label for="exampleInputEmail3">{{ __('Assign Permission')}} </label>
                                <div class="row">
                                    @foreach($permissions as $key => $permission)
                                        <div class="col-sm-4">

                                            <label class="custom-control custom-checkbox">
                                                <!-- check permission exist -->
                                                <input type="checkbox" class="custom-control-input" id="item_checkbox" name="permissions[]" value="{{$key}}"
                                                       @if(in_array($key, $role_permission))
                                                       checked
                                                        @endif>
                                                <span class="custom-control-label">
                                                <!-- clean unescaped data is to avoid potential XSS risk -->
                                                {{ clean($permission, 'titles')}}
                                            </span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-rounded">{{ __('Update')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{--		@endcan--}}

        <!-- Ajax data source array end-->





    </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    {{--    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>--}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection