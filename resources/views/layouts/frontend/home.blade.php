<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>Poll</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('home') }}" class="logo">
                            <h1>Polling Agent</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="#top" class="active">Home</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#about">About</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#about">Live Voting</a>
                            </li>
                            <li class="nav-item dropdown scroll-to-section">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"> Categories
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach ($categories as $category)
                                        <li><a class="dropdown-item"
                                                href="{{ route('poll.filter', $category->name) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>


                            </li>
                            <li class="scroll-to-section">
                                <a href="#events">See Poll Analysis</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#team">Create Poll</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#contact">Register Now!</a>
                            </li>

                        </ul>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>

                </div>
            </div>
            @if (session('error'))
                <div class="alert alert-danger" id="alert">
                    <h6> {{ session('error') }}</h6>
                </div>
            @endif
        </div>

    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner" id="top">
        @include('layouts.frontend.content')
    </div>
    <div class="about section pt-5 pb-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>Welcome to Policy Avatar!</h2>
                        <p>Your opinion is the driving force behind shaping your nation. Whether it's politics,
                            economics, society, or culture—let your voice be heard fearlessly and confidently. Our goal
                            is not just to provide a platform for expression but to ensure that your voice reaches the
                            country's policymakers. Let’s Shape our future together.</p>
                        <div class="main-button mt-3">
                            <a href="#">Veiw Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section courses" id="courses">
        <div class="container">
            <ul class="event_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">All</a>
                </li>
                <li>
                    <a href="#!" data-filter=".p-bangladesh">Bangladesh Politics </a>
                </li>
                <li>
                    <a href="#!" data-filter=".p-international">International Politics</a>
                </li>
                <li>
                    <a href="#!" data-filter=".p-society">Social Issues</a>
                </li>
                <li>
                    <a href="#!" data-filter=".p-culture">Culture</a>
                </li>
                <li>
                    <a href="#!" data-filter=".p-enviroment">Enviroment</a>
                </li>
                <li>
                    <a href="#!" data-filter=".p-technology">Technology</a>
                </li>
                <li>
                    <a href="#!" data-filter=".p-technology">Economy</a>
                </li>
                <li>
                    <a href="#!" data-filter=".p-technology">Urban Area</a>
                </li>
                <li>
                    <a href="#!" data-filter=".p-women-empowerment">Women Empowerment</a>
                </li>

                <li>
                    <a href="#!" data-filter=".p-technology">Others</a>
                </li>
            </ul>
            <div class="row event_box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 p-bangladesh">
                    <div class="events_item">
                        <div class="card">
                            <div class="card-header">Bangladesh Politics</div>
                            <div class="card-body">
                                <div class="text-center italic">
                                    <p><strong>Your opinion matters</strong></p>
                                    <p>আপনি কি মনে করেন, ডক্টর মুহাম্মাদ ইউনুসের নেতৃত্বে গঠিত হওয়া অন্তর্বর্তী সরকার
                                        বাংলাদেশের ইতিবাচক পরিবর্তন আনতে সক্ষম
                                        হবে?
                                    </p>
                                </div>
                                <hr>
                                <strong>হ্যাঁ</strong><span class="pull-right">- 60%</span>
                                <div class="progress progress-green active">
                                    <div class="bar" style="width: 60%;"></div>
                                </div>
                                <strong>না</strong><span class="pull-right">- 40%</span>
                                <div class="progress progress-danger active">
                                    <div class="bar" style="width: 40%;"></div>
                                </div>
                                <div>
                                    <a href="#" class="pull-right">View detailed results</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 p-international">
                    <div class="events_item">
                        <div class="card">
                            <div class="card-header">International Politics</div>
                            <div class="card-body">
                                <div class="text-center italic">
                                    <p><strong>Your opinion matters</strong></p>
                                    <p>আপনি কি মনে করে মেট্ররেল ঢাকা শহরের যানজট নিরসনে ভূমিকা রাখছে?
                                    </p>
                                </div>
                                <hr>
                                <strong>হ্যাঁ</strong><span class="pull-right">- 50%</span>
                                <div class="progress progress-green active">
                                    <div class="bar" style="width: 50%;"></div>
                                </div>
                                <strong>না</strong><span class="pull-right">- 50%</span>
                                <div class="progress progress-danger active">
                                    <div class="bar" style="width: 50%;"></div>
                                </div>
                                <div>
                                    <a href="#" class="pull-right">View detailed results</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 p-society">
                    <div class="events_item">
                        <div class="card">
                            <div class="card-header">Social Issues</div>
                            <div class="card-body">
                                <div class="text-center italic">
                                    <p><strong>Your opinion matters</strong></p>
                                    <p>আপনি কি মনে করেন অন্তর্বর্তীকালীন সরকারের ৩ বছরেরও বেশি সময় ক্ষমতায় থাকা উচিত?
                                    </p>
                                </div>
                                <hr>
                                <strong>হ্যাঁ</strong><span class="pull-right">- 60%</span>
                                <div class="progress progress-green active">
                                    <div class="bar" style="width: 60%;"></div>
                                </div>
                                <strong>না</strong><span class="pull-right">- 40%</span>
                                <div class="progress progress-danger active">
                                    <div class="bar" style="width: 40%;"></div>
                                </div>
                                <div>
                                    <a href="#" class="pull-right">View detailed results</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 p-entertaiment">
                    <div class="events_item">
                        <div class="card">
                            <div class="card-header">Feedback request</div>
                            <div class="card-body">
                                <div class="text-center italic">
                                    <p><strong>Your opinion matters</strong></p>
                                    <p>আপনি কি ড.ইউনুসকে পরবর্তী রাষ্ট্রপতি হিসেবে দেখতে চান?
                                    </p>
                                </div>
                                <hr>
                                <strong>হ্যাঁ</strong><span class="pull-right">- 60%</span>
                                <div class="progress progress-green active">
                                    <div class="bar" style="width: 60%;"></div>
                                </div>
                                <strong>না</strong><span class="pull-right">- 40%</span>
                                <div class="progress progress-danger active">
                                    <div class="bar" style="width: 40%;"></div>
                                </div>
                                <div>
                                    <a href="#" class="pull-right">View detailed results</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 p-enviroment">
                    <div class="events_item">
                        <div class="card">
                            <div class="card-header">Feedback request</div>
                            <div class="card-body">
                                <div class="text-center italic">
                                    <p><strong>Your opinion matters</strong></p>
                                    <p>বাংলাদেশের বর্তমান অর্থনৈতিক অবস্থায় চলমান মেগাপ্রজেক্টগুলো কি বন্ধ করে দেওয়া
                                        উচিত?
                                    </p>
                                </div>
                                <hr>
                                <strong>হ্যাঁ</strong><span class="pull-right">- 60%</span>
                                <div class="progress progress-green active">
                                    <div class="bar" style="width: 60%;"></div>
                                </div>
                                <strong>না</strong><span class="pull-right">- 40%</span>
                                <div class="progress progress-danger active">
                                    <div class="bar" style="width: 40%;"></div>
                                </div>
                                <div>
                                    <a href="#" class="pull-right">View detailed results</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 p-technology">
                    <div class="events_item">
                        <div class="card">
                            <div class="card-header">Feedback request</div>
                            <div class="card-body">
                                <div class="text-center italic">
                                    <p><strong>Your opinion matters</strong></p>
                                    <p>আপনি কি অবস্থা করেন আওয়ামীলীগের নিবন্ধন বাতিল হওয়া উচিত?
                                    </p>
                                </div>
                                <hr>
                                <strong>হ্যাঁ</strong><span class="pull-right">- 60%</span>
                                <div class="progress progress-green active">
                                    <div class="bar" style="width: 60%;"></div>
                                </div>
                                <strong>না</strong><span class="pull-right">- 40%</span>
                                <div class="progress progress-danger active">
                                    <div class="bar" style="width: 40%;"></div>
                                </div>
                                <div>
                                    <a href="#" class="pull-right">View detailed results</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 p-women-empowerment">
                    <div class="events_item">
                        <div class="card">
                            <div class="card-header">Feedback request</div>
                            <div class="card-body">
                                <div class="text-center italic">
                                    <p><strong>Your opinion matters</strong></p>
                                    <p>আপনি কি অবস্থা করেন আওয়ামীলীগের নিবন্ধন বাতিল হওয়া উচিত?
                                    </p>
                                </div>
                                <hr>
                                <strong>হ্যাঁ</strong><span class="pull-right">- 60%</span>
                                <div class="progress progress-green active">
                                    <div class="bar" style="width: 60%;"></div>
                                </div>
                                <strong>না</strong><span class="pull-right">- 40%</span>
                                <div class="progress progress-danger active">
                                    <div class="bar" style="width: 40%;"></div>
                                </div>
                                <div>
                                    <a href="#" class="pull-right">View detailed results</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 p-others">
                    <div class="events_item">
                        <div class="card">
                            <div class="card-header">Feedback request</div>
                            <div class="card-body">
                                <div class="text-center italic">
                                    <p><strong>Your opinion matters</strong></p>
                                    <p>আপনি কি অবস্থা করেন আওয়ামীলীগের নিবন্ধন বাতিল হওয়া উচিত?
                                    </p>
                                </div>
                                <hr>
                                <strong>হ্যাঁ</strong><span class="pull-right">- 60%</span>
                                <div class="progress progress-green active">
                                    <div class="bar" style="width: 60%;"></div>
                                </div>
                                <strong>না</strong><span class="pull-right">- 40%</span>
                                <div class="progress progress-danger active">
                                    <div class="bar" style="width: 40%;"></div>
                                </div>
                                <div>
                                    <a href="#" class="pull-right">View detailed results</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                                    <p class="count-text ">Happy Students</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                                    <p class="count-text ">Course Hours</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                                    <p class="count-text ">Employed Students</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                                    <p class="count-text ">Years Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">
                        <div class="item">
                            <p>“Please tell your friends or collegues about TemplateMo website. Anyone can access the
                                website to download free templates. Thank you for visiting.”</p>
                            <div class="author">
                                <img src="assets/images/testimonial-author.jpg" alt="">
                                <span class="category">Full Stack Master</span>
                                <h4>Claude David</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”
                            </p>
                            <div class="author">
                                <img src="assets/images/testimonial-author.jpg" alt="">
                                <span class="category">UI Expert</span>
                                <h4>Thomas Jefferson</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Scholar is free website template provided by TemplateMo for educational related
                                websites. This CSS layout is based on Bootstrap v5.3.0 framework.”</p>
                            <div class="author">
                                <img src="assets/images/testimonial-author.jpg" alt="">
                                <span class="category">Digital Animator</span>
                                <h4>Stella Blair</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>TESTIMONIALS</h6>
                        <h2>What they say about us?</h2>
                        <p>You can search free CSS templates on Google using different keywords such as templatemo
                            portfolio, templatemo gallery, templatemo blue color, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Feel free to contact us anytime</h2>
                        <p>Thank you for choosing our templates. We provide you best CSS templates at absolutely 100%
                            free of charge. You may support us by sharing our website to your friends.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <form id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="name" name="name" id="name"
                                            placeholder="Your Name..." autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="number" name="phone" id="phone"
                                            placeholder="Your Phone..." autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your E-mail..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="orange-button">Send Message
                                            Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- start footer --}}
    <footer>
        @include('layouts.frontend.footer')
    </footer>
    {{-- end footer --}}
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">
        $("document").ready(function() {
            setTimeout(function() {
                $("div.alert").remove();
            }, 5000);
        })
    </script>
</body>

</html>
