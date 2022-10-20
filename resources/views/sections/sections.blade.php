@extends('layouts.master')
@section('css')
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<style>
	.Delete-form{
		display: inline-block;
	}
</style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
						<div class="col-sm-6 col-md-3">
							<a href="{{ route('sections.create') }}" class="btn btn-primary btn-block">Create Section</a>
						</div>
				</div>
				<!-- breadcrumb -->

				@if (\Session::has('success'))
				<div class="alert alert-success">
					{!! \Session::get('success') !!}
				</div>
				@endif

				@if (\Session::has('updated'))
				<div class="alert alert-success">
					{!! \Session::get('updated') !!}
				</div>
				@endif

				@if (\Session::has('Deleted'))
				<div class="alert alert-success">
					{!! \Session::get('Deleted') !!}
				</div>
				@endif
@endsection

@section('content')

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">All Sectiones</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">Section_name</th>
												<th class="wd-15p border-bottom-0">Description</th>
												<th class="wd-20p border-bottom-0">Created_by</th>
												<th class="wd-15p border-bottom-0">Created_at</th>
												<th class="wd-10p border-bottom-0">Updated_at</th>
												<th class="wd-10p border-bottom-0">Actions</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($sections as $section )
											<tr>
												<td>{{ $section->section_name }}</td>
												<td>{{ $section->Description }}</td>
												<td>{{ $section->Created_by }}</td>
												<td>{{ $section->created_at }}</td>
												<td>{{ $section->updated_at }}</td>
												<td>
													<a href="{{ route('sections.show' , $section->id) }}"  class="btn btn-primary"><i class="far fa-eye"></i></a>
													<a href="{{ route('sections.edit' , $section->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
													<form action="{{ route('sections.destroy' , $section->id) }}" method="POST" class="Delete-form">
														@csrf
														{{ method_field('DELETE') }}
            											<button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
													</form>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection


@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection