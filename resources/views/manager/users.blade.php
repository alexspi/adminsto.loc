@extends('layouts.simple.master')
@section('title', 'Ajax DataTables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Список пользователей(менеджеров)</h3>
@endsection

@section('breadcrumb-items')

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
                        <div class="table">
                            <table id="user_table" class="display">
                                <thead>
                                <tr>
                                    <th>{{ __('Имя')}}</th>
                                    <th>{{ __('Email')}}</th>
                                    <th>{{ __('Роль')}}</th>
                                    <th>{{ __('Доступы')}}</th>
                                    <th>{{ __(' ')}}</th>
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
    </div>
@endsection

@section('script')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
{{--    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>--}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection