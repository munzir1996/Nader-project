<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('vendor/js/style.css')}}">
    <script src="https://kit.fontawesome.com/28d75e6f70.js" crossorigin="anonymous"></script>
    <title>Passport</title>
</head>

<body>

    <header>

        <nav class="navigation">
            <a href="{{route('website.index')}}">الرئيسية</a>
            <a href="#projects"> مراكز خدمات الجمهور</a>
            <a href="#contact">التواصل</a>
        </nav>

        <a href="#" class="logo">جمهورية السودان</a>
    </header>

    <div class="container">
        @if (session()->has('error'))
            <p style="background-color: red; color: white; text-align:right; padding-right:100px">
                {{ session()->get('error') }}
            </p>
        @endif
        @if (session()->has('success'))
            <p style="background-color: green; color: white; text-align:right; padding-right:100px">
                {{ session()->get('success') }}
            </p>
        @endif

        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>رقم البطاقة</th>
                    <th>الاسم بالكامل</th>
                    <th>تاريخ الميلاد</th>
                    <th>العنوان</th>
                    <th>فصيلة الدم</th>
                    <th>الرقم الوطني</th>
                    <th>رقم التلفون</th>
                    <th>النوع</th>
                    <th>تاريخ الاصدار</th>
                    <th>تاريخ الانتهاء</th>
                    <th>المهنة</th>
                    <th>الحالة الاجتماعية</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <form action="{{route('passportLost.store')}}" method="post">
                    @csrf
                    <tr>
                        <td>{{$passport->passport_no}}</td>
                        <td>{{$passport->name}}</td>
                        <td>{{$passport->birthday}}</td>
                        <td>
                            {{$passport->adress}}
                        </td>
                        <td>{{$passport->blood_type}}</td>
                        <td>{{$passport->ns_no}}</td>
                        <td>
                            {{$passport->phone}}
                        </td>
                        <td>{{$passport->gender}}</td>
                        <td>{{$passport->date_begin}}</td>
                        <td>{{$passport->date_end}}</td>
                        <td>
                            {{$passport->job}}
                        </td>
                        <input type="hidden" name="passport_no" id="" value="{{$passport->passport_no}}">
                        <input type="hidden" name="adress" id="" value="{{$passport->adress}}">
                        <input type="hidden" name="phone" id="" value="{{$passport->phone}}">
                        <input type="hidden" name="job" id="" value="{{$passport->job}}">
                        <input type="hidden" name="personal_state" id="" value="{{$passport->personal_state}}">

                        <td>
                            {{$passport->personal_state}}
                        </td>
                        <td>
                            <button class="bg-primary">إرسال طلب </button>
                        </td>
                    </tr>
                </form>

            </tbody>
        </table>
    </div>

</body>

</html>
