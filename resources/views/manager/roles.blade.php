@extends('layouts.simple.master')
@section('title', 'Ajax DataTables')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection



@section('breadcrumb-items')
	<li class="breadcrumb-item active">Роли</li>
@endsection

@section('content')
	<div class="container-fluid">
		@can('manage_role')
			<div class="col-md-12">
				<div class="card">
					<div class="card-header"><h3>{{ __('Добавить роль')}}</h3></div>
					<div class="card-body">
						<form class="forms-sample" method="POST" action="{{route('role.create')}}">
							@csrf
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<label for="role">{{ __('Роль')}}<span class="text-red">*</span></label>
										<input type="text" class="form-control is-valid" id="role" name="role" placeholder="Role Name" required>
									</div>
								</div>
								<div class="col-sm-7">
									<label for="exampleInputEmail3">{{ __('Доступы')}} </label>
									<div class="row">
										@foreach($permissions as $key => $permission)
											<div class="col-sm-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="item_checkbox" name="permissions[]" value="{{$key}}">
													<span class="custom-control-label">
                                                	<!-- clean unescaped data is to avoid potential XSS risk -->
                                                	{{ clean($permission,'titles')}}
                                                </span>
												</label>

											</div>
										@endforeach
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-rounded">{{ __('сохранить')}}</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		@endcan
			<div class="row">
				<div class="col-md-12">
					<div class="card p-3">
						<div class="card-header"><h3>{{ __('Роли')}}</h3></div>
						<div class="card-body">
							<table id="roles_table" class="table">
								<thead>
								<tr>
									<th>{{ __('Роли')}}</th>
									<th>{{ __('Доступы')}}</th>
									<th>{{ __('')}}</th>
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