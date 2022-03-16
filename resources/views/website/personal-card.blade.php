<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('vendor/js/style.css')}}">
    <script src="https://kit.fontawesome.com/28d75e6f70.js" crossorigin="anonymous"></script>
    <title>Personal Card</title>
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



    <section class="cards" id="services">
        <h2 class="title">البطاقة الشخصية</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-address-card"></i>
                </div>
                <div class="info">
                    <h3>
                        <a href="{{route('website.renew-personal-card')}}">تجديد</a>
                    </h3>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-address-card"></i>
                </div>
                <div class="info">
                    <h3>
                        <a href="{{route('website.lost-personal-card')}}">بدل فاقد</a>
                    </h3>
                </div>
            </div>
    </section>



    <section class="cards contact" id="contact">
        <h2 class="title">للتواصل</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info">
                    <h3>Phone</h3>
                    <p>+249187642630</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info">
                    <h3>Email</h3>
                    <p>info@passport.gov.sd</p>
                </div>
            </div>
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

</body>

</html>
