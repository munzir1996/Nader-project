<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> طلبات تجديد البطاقه</title>
</head>

<body>
    <div class="col-xl-12">
        <div class="card mg-b-20">

            {{-- <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal"
                href="#modaldemo8">اضافة مواطن</a> --}}

            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table key-buttons text-md-nowrap">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>

                                <th class="border-bottom-0">العنوان</th>

                                <th class="border-bottom-0">الرقم الوطني</th>
                                <th class="border-bottom-0">رقم التلفون</th>

                                <th class="border-bottom-0">المهنة</th>
                                <th class="border-bottom-0">الحالة الاجتماعية</th>

                                <th class="border-bottom-0"> العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($cardPer as $x)
                                <?php $i++; ?>
                                <tr>

                                    <td>{{ $i }}</td>
                                    <td>{{ $x->adress }}</td>
                                    <td>{{ $x->phone }}</td>
                                    <td>{{ $x->job }}</td>
                                    <td>{{ $x->personal_state }}</td>
                                    <td></td>

                                    <td><a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                            data-id="{{ $x->id }}"  data-adress="{{ $x->adress }}"
                                          
                                            data-phone="{{ $x->phone }}" 
                                        
                                            data-job="{{ $x->job }}"
                                            data-personal_state="{{ $x->personal_state }}" data-toggle="modal"
                                            href="#exampleModal2" title="تعديل"><i class="las la-pen"></i></a>



                                    </td>

                                    <td></td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- edit -->
 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">تعديل البطاقه لقومية</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>
         <div class="modal-body">

             <form action="cardPer/update" method="post" autocomplete="off">
                 {{ method_field('patch') }}
                 {{ csrf_field() }}

                 <div class="form-group">
                     <label for="exampleInputEmail1"> adress</label>
                     <input type="text" class="form-control" id="adress" name="adress">
                 </div>
      
                 <div class="form-group">
                     <label for="exampleInputEmail1"> phone</label>
                     <input type="number" class="form-control" id="phone" name="phone">
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

        </div>
    </div>

</body>

</html>
