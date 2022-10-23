@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">  {{ $productSignalShow->product_name }} </h4>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Details About {{$productSignalShow->product_name}}
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mb-0 mg-t-5">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">Section_name</th>
												<th class="wd-15p border-bottom-0">Description</th>
												<th class="wd-15p border-bottom-0">Section_name</th>
												<th class="wd-15p border-bottom-0">Created_at</th>
												<th class="wd-115p border-bottom-0">Updated_at</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>{{ $productSignalShow->product_name }}</td>
												<td>{{ $productSignalShow->Description }}</td>
												<td>{{ $productSignalShow->section->section_name }}</td>
												<td>{{ $productSignalShow->created_at }}</td>
												<td>{{ $productSignalShow->updated_at }}</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection