@extends('layouts.master')
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!--Internal  Datetimepicker-slider css -->
<link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

<!-- Internal Spectrum-colorpicker css -->
<link href="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Create invoice</h4>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')

				<!-- row -->
				<div class="row">
					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Add <span class="tx-sserif">Invoice</span>
								</div>
								<p class="mg-b-20">Your invoices </p>
								<div class="row row-sm mg-b-20">
									<div class="col-lg-4">
										<div class="form-group">
										    <label> Invoice</label>
										    <input class="form-control" type="text" placeholder="Name of Section"  name="product_name" >
										</div>	
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label> Date Invoice</label>
											<input class="form-control" type="date" placeholder="Name of Section"  name="product_name" >
										</div>	
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label> Date entitlement</label>
											<input class="form-control" type="date" placeholder="Name of Section"  name="product_name" >
										</div>	
									</div>
									<div class="col-lg-4">
										<p class="mg-b-10">Select Section</p>
										<select class="form-control select2-no-search">
											<option label="Choose one">
											</option>
											<option value="Firefox">
												Firefox
											</option>
											<option value="Chrome">
												Chrome
											</option>
											<option value="Safari">
												Safari
											</option>
											<option value="Opera">
												Opera
											</option>
											<option value="Internet Explorer">
												Internet Explorer
											</option>
										</select>
									</div>
									<div class="col-lg-4">
										<p class="mg-b-10">Select Product</p>
										<select class="form-control select2-no-search">
											<option label="Choose one">
											</option>
											<option value="Firefox">
												Firefox
											</option>
											<option value="Chrome">
												Chrome
											</option>
											<option value="Safari">
												Safari
											</option>
											<option value="Opera">
												Opera
											</option>
											<option value="Internet Explorer">
												Internet Explorer
											</option>
										</select>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label> Amount of entitlement </label>
											<input class="form-control" type="text" placeholder="Name of Section"  name="product_name" >
										</div>	
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label> cost </label>
											<input class="form-control" type="text" placeholder="Name of Section"  name="product_name" >
										</div>	
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label> Discount </label>
											<input class="form-control" type="text" placeholder="Name of Section"  name="product_name" >
										</div>	
									</div>

									<div class="col-lg-4">
									<p class="mg-b-10">Select Tax</p>
										<select class="form-control select2-no-search">
											<option label="Choose one">
											</option>
											<option value="Firefox">
												Firefox
											</option>
											<option value="Chrome">
												Chrome
											</option>
											<option value="Safari">
												Safari
											</option>
											<option value="Opera">
												Opera
											</option>
											<option value="Internet Explorer">
												Internet Explorer
											</option>
										</select>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label> Value Added Tax  </label>
											<input class="form-control" type="text" placeholder="Name of Section"  name="product_name" disabled>
										</div>	
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label> Total </label>
											<input class="form-control" type="text" placeholder="Name of Section"  name="product_name" disabled>
										</div>	
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label> Note </label>
											<textarea class="form-control" type="NameSection" placeholder="Description Of Your Section"  name="Description" ></textarea>
										</div>
									</div>
								</div>
												<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">File Upload</h6>
									<p class="text-muted card-sub-title">u must upload format your JPG/PNG/PDF</p>
								</div>
								<div class="row mb-4">
									<div class="col-lg-12">
										<input type="file" class="dropify" data-height="200" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
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
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>

<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
@endsection