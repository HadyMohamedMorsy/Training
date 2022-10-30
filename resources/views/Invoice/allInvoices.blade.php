@extends('layouts.master')
@section('css')
<!---Internal  Prism css-->
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<!---Internal Input tags css-->
<link href="{{URL::asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">
<!--- Custom-scroll -->
<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Tabs</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-lg-12 col-md-12">
						<div class="card" id="basic-alert">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Style Tabs</h6>
									<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="panel panel-primary tabs-style-1">
											<div class=" tab-menu-heading">
												<div class="tabs-menu1">
													<!-- Tabs -->
													<ul class="nav panel-tabs main-nav-line">
														<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">Tab 01</a></li>
														<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Tab 02</a></li>
														<li class="nav-item"><a href="#tab3" class="nav-link" data-toggle="tab">Tab 03</a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body main-content-body-right border-top-0 border">
												<div class="tab-content">
													<div class="tab-pane active" id="tab1">
                                                    <table class="table table-striped mg-b-0 text-md-nowrap">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" class="font-weight-bold">Invoice_number</th>
                                                                <td>{{ $invoices->invoice_number }}</td>
                                                                <th scope="row" class="font-weight-bold">invoice_Date</th >
                                                                <td>{{ $invoices->invoice_Date }}</td>
                                                                <th scope="row" class="font-weight-bold">due_date</th >
                                                                <td>{{ $invoices->due_date }}</td>
                                                                <th scope="row" class="font-weight-bold">section_name</th >
                                                                <td>{{ $invoices->section->section_name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="font-weight-bold">product</th>
                                                                <td>{{ $invoices->product }}</td>
                                                                <th scope="row" class="font-weight-bold">amount_Collection</th >
                                                                <td>{{ $invoices->amount_Collection }}</td>
                                                                <th scope="row" class="font-weight-bold">amount_Commission</th >
                                                                <td>{{ $invoices->amount_Commission }}</td>
                                                                <th scope="row" class="font-weight-bold">rate_value</th >
                                                                <td>{{ $invoices->rate_value }}</td>
                                                            </tr>
                                                            <tr>       
                                                                <th scope="row" class="font-weight-bold">value_vat</th>
                                                                <td>{{ $invoices->value_vat }}</td>
                                                                <th scope="row" class="font-weight-bold">total</th >
                                                                <td>{{ $invoices->total }}</td>
                                                                <th scope="row" class="font-weight-bold">status</th >
                                                                <td>
                                                                         @if ( $details->value_status  == 1)
                                                                            <span class="text-success"> {{ $details->status }}</span>
                                                                        @elseif ($details->value_status == 2)
                                                                            <span class="text-danger"> {{ $details->status }}</span>
                                                                        @else
                                                                            <span class="text-warning"> {{ $details->status }}</span>
                                                                        @endif
                                                                </td>
                                                                <th scope="row" class="font-weight-bold">note</th >
                                                                <td>{{ $invoices->note }}</td>
                                                            </tr>
                                                            <tr>       
                                                                <th scope="row" class="font-weight-bold">user</th >
                                                                <td>{{ $invoices->user }}</td>
                                                                <th scope="row" class="font-weight-bold">created_at</th >
                                                                <td>{{ $invoices->created_at }}</td>
                                                                <th scope="row" class="font-weight-bold">updated_at</th >
                                                                <td>{{ $invoices->updated_at }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
													</div>
													<div class="tab-pane" id="tab2">
														
                                                        <table class="table text-md-nowrap" id="example1">
                                                            <thead>
                                                                <tr>
                                                                    <th class="wd-15p border-bottom-0">id</th>
                                                                    <th class="wd-15p border-bottom-0">invoice_number</th>
                                                                    <th class="wd-20p border-bottom-0">product</th>
                                                                    <th class="wd-15p border-bottom-0">section</th>
                                                                    <th class="wd-10p border-bottom-0">status</th>
                                                                    <th class="wd-25p border-bottom-0">note</th>
                                                                    <th class="wd-25p border-bottom-0">user</th>
                                                                    <th class="wd-25p border-bottom-0">created_at</th>
                                                                    <th class="wd-25p border-bottom-0">updated_at</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td class="wd-15p border-bottom-0">id</td>
                                                                    <td class="wd-15p border-bottom-0">{{ $details->invoice_number }}</td>
                                                                    <td class="wd-20p border-bottom-0">{{ $details->product }}</td>
                                                                    <td class="wd-15p border-bottom-0">{{ $details->section->section_name }}</td>
                                                                    <td class="wd-10p border-bottom-0">
                                                                        @if ( $details->value_status  == 1)
                                                                            <span class="text-success"> {{ $details->status }}</span>
                                                                        @elseif ($details->value_status == 2)
                                                                            <span class="text-danger"> {{ $details->status }}</span>
                                                                        @else
                                                                            <span class="text-warning"> {{ $details->status }}</span>
                                                                        @endif
                                                                    </td>
                                                                    <td class="wd-25p border-bottom-0">{{ $details->note }}</td>
                                                                    <td class="wd-25p border-bottom-0">{{ $details->user }}</td>
                                                                    <td class="wd-25p border-bottom-0">{{ $details->created_at }}</td>
                                                                    <td class="wd-25p border-bottom-0">{{ $details->updated_at }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
													</div>
													<div class="tab-pane" id="tab3">
														<p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
														<p class="mb-0">similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
													</div>
												</div>
											</div>
										</div>
									</div>

<!-- Prism Code -->

@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Jquery.mCustomScrollbar js-->
<script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Internal Input tags js-->
<script src="{{URL::asset('assets/plugins/inputtags/inputtags.js')}}"></script>
<!--- Tabs JS-->
<script src="{{URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
<script src="{{URL::asset('assets/js/tabs.js')}}"></script>
<!--Internal  Clipboard js-->
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Internal Prism js-->
<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

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