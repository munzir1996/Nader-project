<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('vendor/js/style.css')}}">
    <script src="https://kit.fontawesome.com/28d75e6f70.js" crossorigin="anonymous"></script>
    <title>Home Page</title>
</head>

<body>

    <header>

        <nav class="navigation">
            <a href="#services">الخدمات</a>
            <a href="#projects"> مراكز خدمات الجمهور</a>
            <a href="#contact">التواصل</a>
        </nav>


        <a href="#" class="logo">جمهورية السودان</a>
    </header>


    <section class="main">
        <div>
            <h2>جمهورية السودان<br><span>الإدارة العامة للسجل المدني</span></h2>
            <h3>وزارة الداخلية</h3>
            <a href="#sign" class="main-btn">التسجيل</a>
            <div class="social-icons">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </section>

    <section class="cards" id="services">
        <h2 class="title">الخدمات</h2>
        <div class="content">
            <div class="card">
                <a href="{{route('website.personal-card')}}">
                    <div class="icon">
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                </a>
                <div class="info">
                    <h3>
                        <a href="{{route('website.personal-card')}}">البطاقة القومية</a>
                    </h3>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-id-card"></i>
                </div>
                <div class="info">
                    <h3>
                        <a href="{{route('website.driving-license')}}">رخصة القيادة</a>
                    </h3>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-passport"></i>
                </div>
                <div class="info">
                    <h3>
                        <a href="{{route('website.pass')}}">جواز السفر</a>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="title">مراكز خدمات الجمهور</h2>
        <div class="content">
            <div class="project-card">
                <div class="project-image">
                    <img src="{{asset('images/sudan1.jpg')}}" />
                </div>
                <div class="project-info">
                    <p class="project-category">مركز خدمات الجمهور</p>
                    <strong class="project-title">
                        <span>الخرطوم السجانة</span>
                        <a href="#" class="more-details">المزيد</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="{{asset('images/sudan2.jpg')}}" />
                </div>
                <div class="project-info">
                    <p class="project-category">مركز خدمات الجمهور</p>
                    <strong class="project-title">
                        <span>بحري</span>
                        <a href="#" class="more-details">المزيد</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="{{asset('images/sudan3.jpg')}}" />
                </div>
                <div class="project-info">
                    <p class="project-category">مركز خدمات الجمهور </p>
                    <strong class="project-title">
                        <span>امدرمان بانت</span>
                        <a href="#" class="more-details">المزيد</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="{{asset('images/sudan4.jpg')}}" />
                </div>
                <div class="project-info">
                    <p class="project-category">العلاقات البينية</p>
                    <strong class="project-title">
                        <span>الخرطوم شارع المطار</span>
                        <a href="#" class="more-details">المزيد</a>
                    </strong>
                </div>
            </div>


    </section>

    <section class="cards contact" id="contact">
        <h2 class="title">ارقام التواصل</h2>
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


    <section class="sign" id="sign">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form">
                <div class="title">Welcome</div>
                <div class="subtitle">Let's create your account!</div>
                <div class="input-container ic1">
                    <input id="firstname" name="first_name" class="input" type="text" placeholder=" " />
                    <div class="cut"></div>
                    <label for="firstname" class="placeholder">First name</label>
                </div>
                <div class="input-container ic2">
                    <input id="lastname" name="last_name" class="input" type="text" placeholder=" " />
                    <div class="cut"></div>
                    <label for="lastname" class="placeholder">Last name</label>
                </div>
                <div class="input-container ic2">
                    <input id="email" name="email" class="input" type="email" placeholder=" " />
                    <div class="cut cut-short"></div>
                    <label for="email" class="placeholder">Email</label>
                </div>
                <div class="input-container ic2">
                    <input id="password" name="password" class="input" type="password" placeholder=" " />
                    <label for="password" class="placeholder">Password</label>
                    <div class="input-container ic2">
                        <input id="retype-password" name="password_confirmation" class="input" type="password"
                            placeholder=" " />
                        <label for="retype-password" class="placeholder">Retype-Password</label>
                        <button type="text" class="submit">submit</button>
                    </div>
        </form>

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
