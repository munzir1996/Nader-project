@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
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
							<h4 class="content-title mb-0 my-auto">تقارير </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ كل الرخص </span>
						</div>
					</div>
				
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
		
					<div class="col-xl-12">
						<div class="card mg-b-20">
						//
						<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">Scale</a>
						//
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
												<th class="border-bottom-0">#</th>							
						     					<th class="border-bottom-0">رقم الرخصة</th>
												<th class="border-bottom-0">الاسم بالكامل</th>
												<th class="border-bottom-0">تاريخ الميلاد</th>
												<th class="border-bottom-0">العنوان</th>
												<th class="border-bottom-0">فصيلة الدم</th>
												<th class="border-bottom-0">الرقم الوطني</th>
												<th class="border-bottom-0">رقم التلفون</th>
												<th class="border-bottom-0">النوع</th>
												<th class="border-bottom-0">تاريخ الاصدار</th>
												<th class="border-bottom-0">تاريخ الانتهاء</th>
												<th class="border-bottom-0">المهنة</th>
												<th class="border-bottom-0">الحالة الاجتماعية</th>
												<th class="border-bottom-0">الصورة</th>	
											</tr>
										</thead>
										<tbody>
											<?php $i = 0 ?>
											@foreach($driving as $x)
											<?php $i++?>
											<tr>
												<td>{{$i}}</td>
												<td>{{$x->driving_no}}</td>
												<td>{{$x->name}}</td>
												<td>{{$x->birthday}}</td>
												<td>{{$x->adress}}</td>
												<td>{{$x->blood_type}}</td>
												<td>{{$x->ns_no}}</td>
												<td>{{$x->phone}}</td>
												<td>{{$x->gender}}</td>
												<td>{{$x->date_begin}}</td>
												<td>{{$x->date_end}}</td>
												<td>{{$x->job}}</td>
												<td>{{$x->personal_state}}</td>
											</tr>
											@endforeach
										</tbody>	
									</table>
								</div>
							</div>
						</div>
						<div class="modal" id="modaldemo8">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Basic Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
												<th class="border-bottom-0">#</th>							
						     					<th class="border-bottom-0">رقم الرخصة</th>
												<th class="border-bottom-0">الاسم بالكامل</th>
												<th class="border-bottom-0">تاريخ الميلاد</th>
												<th class="border-bottom-0">العنوان</th>
												<th class="border-bottom-0">فصيلة الدم</th>
												<th class="border-bottom-0">الرقم الوطني</th>
												<th class="border-bottom-0">رقم التلفون</th>
												<th class="border-bottom-0">النوع</th>
												<th class="border-bottom-0">تاريخ الاصدار</th>
												<th class="border-bottom-0">تاريخ الانتهاء</th>
												<th class="border-bottom-0">المهنة</th>
												<th class="border-bottom-0">الحالة الاجتماعية</th>
												<th class="border-bottom-0">الصورة</th>	
												
											</tr>
										</thead>
										<tbody>
											<?php $i = 0 ?>
											@foreach($driving as $x)
											<?php $i++?>
											<tr>
												<td>{{$i}}</td>
												<td>{{$x->driving_no}}</td>
												<td>{{$x->name}}</td>
												<td>{{$x->birthday}}</td>
												<td>{{$x->adress}}</td>
												<td>{{$x->blood_type}}</td>
												<td>{{$x->ns_no}}</td>
												<td>{{$x->phone}}</td>
												<td>{{$x->gender}}</td>
												<td>{{$x->date_begin}}</td>
												<td>{{$x->date_end}}</td>
												<td>{{$x->job}}</td>
												<td>{{$x->personal_state}}</td>
												
											
											</tr>
											@endforeach
										</tbody>	
									</table>
								</div>
							</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
					</div>
					<!--/div-->

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