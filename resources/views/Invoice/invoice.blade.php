@extends('layouts.master')
@section('css')
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Invoices</h4>
						</div>
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
				<div class="alert alert-danger">
					{!! \Session::get('Deleted') !!}
				</div>
				@endif

				@if (\Session::has('File'))
				<div class="alert alert-danger">
					{!! \Session::get('File') !!}
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
									<h4 class="card-title mg-b-0">Invoices</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">id</th>
												<th class="wd-15p border-bottom-0">invoice_number</th>
												<th class="wd-15p border-bottom-0">invoice_Date</th>
												<th class="wd-20p border-bottom-0">due_date</th>
												<th class="wd-15p border-bottom-0">Section</th>
												<th class="wd-10p border-bottom-0">product</th>
												<th class="wd-25p border-bottom-0">amount_Collection</th>
												<th class="wd-25p border-bottom-0">amount_Commission</th>
												<th class="wd-25p border-bottom-0">rate_value</th>
												<th class="wd-25p border-bottom-0">value_vat</th>
												<th class="wd-25p border-bottom-0">total</th>
												<th class="wd-25p border-bottom-0">status</th>
												<th class="wd-25p border-bottom-0">note</th>
												<th class="wd-25p border-bottom-0">user</th>
												<th class="wd-25p border-bottom-0">created_at</th>
												<th class="wd-25p border-bottom-0">updated_at</th>
											</tr>
										</thead>
										@php
											$i = 1;
											@endphp
										<tbody>
											@foreach ( $invoices as $invoice )
											<tr>
												<td class="wd-15p border-bottom-0">{{ $i++ }}</td>
												<td class="wd-15p border-bottom-0">{{ $invoice->invoice_number }}</td>
												<td class="wd-20p border-bottom-0">{{ $invoice->invoice_Date }}</td>
												<td class="wd-15p border-bottom-0">{{ $invoice->due_date }}</td>
												<td class="wd-25p border-bottom-0"><a href="{{ route( 'invoice.show' ,  $invoice->id)}}">{{ $invoice->section->section_name}}</a></td>
												<td class="wd-10p border-bottom-0">{{ $invoice->product }}</td>
												<td class="wd-25p border-bottom-0">{{ $invoice->amount_Collection }}</td>
												<td class="wd-25p border-bottom-0">{{ $invoice->amount_Commission }}</td>
												<td class="wd-15p border-bottom-0">{{ $invoice->rate_value }}</td>
												<td class="wd-25p border-bottom-0">{{ $invoice->value_vat }}</td>
												<td class="wd-25p border-bottom-0">{{ $invoice->total }}</td>
												<td class="wd-25p border-bottom-0">
													@if ( $invoice->value_status  == 1)
														<span class="text-success"> {{ $invoice->status }}</span>
													@elseif ($invoice->value_status == 2)
														<span class="text-danger"> {{ $invoice->status }}</span>
													@else
														<span class="text-warning"> {{ $invoice->status }}</span>
													@endif
												</td>
												<td class="wd-25p border-bottom-0">{{ $invoice->note }}</td>
												<td class="wd-25p border-bottom-0">{{ $invoice->user }}</td>
												<td class="wd-25p border-bottom-0">{{ $invoice->created_at }}</td>
												<td class="wd-25p border-bottom-0">{{ $invoice->updated_at }}</td>
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
<!-- Internal Data tables -->


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
