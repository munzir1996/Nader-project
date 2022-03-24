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
        <table>
            <thead>
                <tr>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>لم يتم العثور على البيانات</td>
                </tr>

            </tbody>
        </table>
    </div>





</body>

</html>
