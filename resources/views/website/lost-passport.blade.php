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

<header>

    <nav class="navigation">
        <a href="{{route('website.index')}}">الرئيسية</a>
        <a href="#projects"> مراكز خدمات الجمهور</a>
        <a href="#contact">التواصل</a>
    </nav>


    <a href="#" class="logo">جمهورية السودان</a>
</header>


<section class="main">

@if (session()->has('Add'))
<div class="alert alert-success alert-dismissible fade show" style="background-color: aliceblue" role="alert">
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
    <div class="wrap">
        <h3>بدل فاقد جواز السفر</h3>
        <form action="{{route('website.lost-passport.lost')}}" method="post">
            @csrf
            <div class="search">
                @csrf
                <input type="text" class="searchTerm" name="report_number" placeholder="أدخل رقم البلاغ" required>
                <button class="searchButton">

                </button>
                <i class="fa fa-search "></i>
            </div>
        </form>
    </div>
</section>



<footer class="footer">
    <p class="footer-title">Copyrights @ <span>Nader Elshikh Elmangory</span></p>
    <div class="social-icons">
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
</footer>

</html>
