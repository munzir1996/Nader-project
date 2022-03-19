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
							<h4 class="content-title mb-0 my-auto">تقارير </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ كل البطاقات القومية</span>
						</div>
					</div>

					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('Add'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('Add') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session()->has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('delete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session()->has('edit'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('edit') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


					<div class="col-xl-12">
						<div class="card mg-b-20">

						<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">اضافة مواطن</a>

							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
												<th class="border-bottom-0">#</th>
						     					<th class="border-bottom-0">رقم الجواز</th>
												<th class="border-bottom-0">الاسم بالكامل</th>
												<th class="border-bottom-0">تاريخ الميلاد</th>
												<th class="border-bottom-0">العنوان</th>
												<th class="border-bottom-0">فصيلة الدم</th>
												<th class="border-bottom-0">الرقم الوطني</th>
												<th class="border-bottom-0">رقم التلفون</th>
												<th class="border-bottom-0">تاريخ الاصدار</th>
												<th class="border-bottom-0">تاريخ الانتهاء</th>
												<th class="border-bottom-0">المهنة</th>
												<th class="border-bottom-0">الحالة الاجتماعية</th>
												<th class="border-bottom-0">النوع</th>
												<th class="border-bottom-0"> العمليات</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 0 ?>
											@foreach($passport as $x)
											<?php $i++?>
											<tr>

												<td>{{$i}}</td>
												<td>{{$x->passport_no}}</td>
												<td>{{$x->name}}</td>
												<td>{{$x->birthday}}</td>
												<td>{{$x->adress}}</td>
												<td>{{$x->blood_type}}</td>
												<td>{{$x->ns_no}}</td>
												<td>{{$x->phone}}</td>
												<td>{{$x->date_begin}}</td>
												<td>{{$x->date_end}}</td>
												<td>{{$x->job}}</td>
												<td>{{$x->personal_state}}</td>
												<td>{{$x->gender}}</td>
                                                       <td></td>

                                                  <td><a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                                data-id="{{ $x->id }}" data-passport_no="{{$x->passport_no}}" data-name="{{$x->name}}" data-birthday="{{$x->birthday}}"
												data-adress="{{$x->adress}}" data-blood_type="{{$x->blood_type}}" data-ns_no="{{$x->ns_no}}" data-phone="{{$x->phone}}"
												 data-gender="{{$x->gender}}" data-date_begin="{{$x->date_begin}}" data-date_end="{{$x->date_end}}"
                                                data-job="{{$x->job}}"  data-personal_state="{{$x->personal_state}}" data-toggle="modal"
                                                href="#exampleModal2" title="تعديل"><i class="las la-pen"></i></a>

												<a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                data-id="{{ $x->id }}" data-name="{{$x->name}}"
                                                data-toggle="modal" href="#modaldemo9" title="حذف"><i
                                                    class="las la-trash"></i></a>



											</td>

											<td></td>

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
                    <h6 class="modal-title">اضافة قسم</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('passport.store') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleInputEmail1">passport_no </label>
                            <input type="number" class="form-control" id="passport_no" name="passport_no">
                        </div>

						<div class="form-group">
                            <label for="exampleInputEmail1"> name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

						<div class="form-group">
                            <label for="exampleInputEmail1"> birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> adress</label>
                            <input type="text" class="form-control" id="adress" name="adress">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> blood_type</label>
                            <input type="text" class="form-control" id="blood_type" name="blood_type">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> ns_no</label>
                            <input type="number" class="form-control" id="ns_no" name="ns_no">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> phone</label>
                            <input type="number" class="form-control" id="phone" name="phone">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1">gender </label>
                            <input type="text" class="form-control" id="gender" name="gender">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> date_begin</label>
                            <input type="date" class="form-control" id="date_begin" name="date_begin">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> date_end</label>
                            <input type="date" class="form-control" id="date_end" name="date_end">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> job</label>
                            <input type="text" class="form-control" id="job" name="job">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> personal_state</label>
                            <input type="text" class="form-control" id="personal_state" name="personal_state">
                        </div>




                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

		</div>



 <!-- edit -->
 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل القسم</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="passport/update" method="post" autocomplete="off">
                        {{ method_field('patch') }}
                        {{ csrf_field() }}

						<div class="form-group">
						<input type="hidden" name="id" id="id" value="">
                            <label for="exampleInputEmail1">passport_no </label>
                            <input type="text" class="form-control" id="passport_no" name="passport_no">
                        </div>

						<div class="form-group">
                            <label for="exampleInputEmail1"> name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

						<div class="form-group">
                            <label for="exampleInputEmail1"> birthday</label>
                            <input type="num" class="form-control" id="birthday" name="birthday">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> adress</label>
                            <input type="text" class="form-control" id="adress" name="adress">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> blood_type</label>
                            <input type="text" class="form-control" id="blood_type" name="blood_type">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> ns_no</label>
                            <input type="text" class="form-control" id="ns_no" name="ns_no">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> phone</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1">gender </label>
                            <input type="text" class="form-control" id="gender" name="gender">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> date_begin</label>
                            <input type="data" class="form-control" id="date_begin" name="date_begin">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> date_end</label>
                            <input type="data" class="form-control" id="date_end" name="date_end">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> job</label>
                            <input type="text" class="form-control" id="job" name="job">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1"> personal_state</label>
                            <input type="text" class="form-control" id="personal_state" name="personal_state">
                        </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">تاكيد</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                </div>
                </form>
            </div>
        </div>
    </div>
	</div>




  <!-- delete -->
  <div class="modal" id="modaldemo9">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف القسم</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="passport/destroy" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p>هل انت متاكد من عملية الحذف ؟</p><br>
                        <input type="hidden" name="id" id="id" value="">
                        <input class="form-control" name="name" id="name" type="text" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-danger">تاكيد</button>
                    </div>
            </div>
            </form>
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


<script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var passport_no = button.data('passport_no')
        var name = button.data('name')
		var birthday = button.data('birthday')
        var adress = button.data('adress')
		var blood_type = button.data('blood_type')
        var ns_no = button.data('ns_no')
		var phone = button.data('phone')
        var gender = button.data('gender')
		var date_begin = button.data('date_begin')
        var date_end = button.data('date_end')
		var job = button.data('job')
        var personal_state = button.data('personal_state')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #passport_no').val(passport_no);
        modal.find('.modal-body #name').val(name);
		modal.find('.modal-body #birthday').val(birthday);
        modal.find('.modal-body #adress').val(adress);
		modal.find('.modal-body #blood_type').val(blood_type);
        modal.find('.modal-body #ns_no').val(ns_no);
		modal.find('.modal-body #phone').val(phone);
        modal.find('.modal-body #gender').val(gender);
		modal.find('.modal-body #date_begin').val(date_begin);
        modal.find('.modal-body #date_end').val(date_end);
		modal.find('.modal-body #job').val(job);
        modal.find('.modal-body #personal_state').val(personal_state);
    })


</script>

<script>
    $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
		modal.find('.modal-body #name').val(name);
    })

</script>
@endsection
