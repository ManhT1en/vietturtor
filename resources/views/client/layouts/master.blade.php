<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gia Sư Việt </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arial:wght@600;700&family=Montserrat:wght@200;400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('') }}/assets_client/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ url('') }}/assets_client/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="{{ url('') }}/assets_client/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('') }}/assets_client/css/bootstrap.min.css" rel="stylesheet">

    <!-- Css về thẻ Gia sư -->


    <!-- Template Stylesheet -->
    <link href="{{ url('') }}/assets_client/css/style.css" rel="stylesheet">


    @yield('layoutTutorInfo')
    <!-- Thêm CSS từ section 'styles' nếu có -->
    @yield('styles')

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid border-bottom bg-light wow fadeIn" data-wow-delay="0.1s">
        <div class="container topbar bg-primary d-none d-lg-block py-2" style="border-radius: 0 40px">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#"
                            class="text-white">Yên Nghĩa - Hà Đông - Hà Nội</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                            class="text-white">Info@phenikaa-uni.edu.vn</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="" class="btn btn-light btn-sm-square rounded-circle"><i
                            class="fab fa-facebook-f text-secondary"></i></a>
                    <a href="" class="btn btn-light btn-sm-square rounded-circle"><i
                            class="fab fa-twitter text-secondary"></i></a>
                    <a href="" class="btn btn-light btn-sm-square rounded-circle"><i
                            class="fab fa-instagram text-secondary"></i></a>
                    <a href="" class="btn btn-light btn-sm-square rounded-circle me-0"><i
                            class="fab fa-linkedin-in text-secondary"></i></a>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl py-3">
                <a href="{{ route('home.index') }}" class="navbar-brand">
                    <h1 class="text-primary display-6">Viet<span class="text-secondary">Tutor</span></h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="index.html" class="nav-item nav-link active">Trang chủ</a>
                        {{-- <a href="about.html" class="nav-item nav-link">Giới thiệu</a> --}}
                        {{-- <a href="service.html" class="nav-item nav-link">Dịch vụ</a> --}}
                        <a href="{{ route('course.index') }}" class="nav-item nav-link">Khoá học</a>
                        {{-- <a href="event.html" class="nav-item nav-link">Sự kiện</a> --}}
                        <a href="{{ route('list-tutor.index') }}" class="nav-item nav-link">Đội ngũ </a>
                        @auth
                            @if (auth()->user())
                                <a href="{{ route('tutorRegister.showForm') }}" class="nav-item nav-link">Đăng ký gia sư</a>
                            @endif
                        @endauth
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Khác</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="blog.html" class="dropdown-item">Blog</a>

                                <a href="testimonial.html" class="dropdown-item">Cảm nhận khách hàng</a>
                            </div>
                        </div> --}}
                        <a href="{{ route('contact.index') }}" class="nav-item nav-link">Liên hệ</a>
                        <a href="{{ route('login.index') }}" class="nav-item nav-link">Đăng nhập</a>
                        @auth
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Chào,
                                    {{ auth()->user()->name }}!</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="{{ route('list-tutor.show',['id', auth()->user()->id ]) }}" class="dropdown-item">Hồ sơ</a>
                                    <a href="{{ route('logout') }}" class="dropdown-item">Đăng xuất</a>
                                </div>

                            </div>
                        @endauth

                    </div>
                    <div class="d-flex me-4">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center">
                            <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                                <i class="fa fa-phone-alt text-primary fa-2x me-4"></i>
                                <div class="position-absolute" style="top: -7px; left: 20px;">
                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column pe-3 border-end border-primary">
                            <span class="text-primary">Tư vấn</span>
                            <a href="#"><span class="text-secondary">024.62918118</span></a>
                        </div>
                    </div>
                    <button class="btn-search btn btn-primary btn-md-square rounded-circle" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fas fa-search text-white"></i></button>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tìm kiếm từ khóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="Từ khóa"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->
    @yield('main')

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h2 class="fw-bold mb-3"><span class="text-primary mb-0">Viet</span><span
                                class="text-secondary">Tutor</span></h2>
                        <p class="mb-4">Nền tảng kết nối gia sư với học viên tốt nhất.</p>
                        <div class="border border-primary p-3 rounded bg-light">
                            <h5 class="mb-3">Thư thông báo</h5>
                            <div class="position-relative mx-auto border border-primary rounded"
                                style="max-width: 400px;">
                                <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Email">
                                <button type="button"
                                    class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2 text-white">Đăng
                                    ký</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <div class="d-flex flex-column p-4 ps-5 text-dark border border-primary"
                            style="border-radius: 50% 20% / 10% 40%;">
                            <p>Thứ 2: 8:00 - 17:00</p>
                            <p>Thứ 3: 8:00 - 17:00</p>
                            <p>Thú 4: 8:00 - 17:00</p>
                            <p>Thứ 5: 8:00 - 17:00</p>
                            <p>Thứ 6: 8:00 - 17:00</p>
                            <p>Thứ 7: 8:00 - 17:00</p>
                            <p class="mb-0">Chủ nhật: Nghỉ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h4
                            class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                            THÔNG TIN LIÊN HỆ</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a href="" class="text-body mb-4"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i> Yên Nghĩa - Hà Đông - Hà Nội</a>
                            <a href="" class="text-start rounded-0 text-body mb-4"><i
                                    class="fa fa-phone-alt text-primary me-2"></i> 024.62918118</a>
                            <a href="" class="text-start rounded-0 text-body mb-4"><i
                                    class="fas fa-envelope text-primary me-2"></i> 22010151@st.phenikaa-uni.edu.vn</a>
                            <a href="" class="text-start rounded-0 text-body mb-4"><i
                                    class="fa fa-clock text-primary me-2"></i> Dịch vụ 24/7</a>
                            <div class="footer-icon d-flex">
                                <a class="btn btn-primary btn-sm-square me-3 rounded-circle text-white"
                                    href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square me-3 rounded-circle text-white"
                                    href=""><i class="fab fa-twitter"></i></a>
                                <a href="#"
                                    class="btn btn-primary btn-sm-square me-3 rounded-circle text-white"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square rounded-circle text-white"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h4
                            class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                            Thư viện ảnh</h4>
                        <div class="row g-3">
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="{{ url('') }}/assets_client/img/galary-1.jpg"
                                        class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="{{ url('') }}/assets_client/img/galary-2.jpg"
                                        class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="{{ url('') }}/assets_client/img/galary-3.jpg"
                                        class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="{{ url('') }}/assets_client/img/galary-4.jpg"
                                        class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="{{ url('') }}/assets_client/img/galary-5.jpg"
                                        class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="{{ url('') }}/assets_client/img/galary-6.jpg"
                                        class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i
                                class="fas fa-copyright text-light me-2"></i>giasuviet.vn
                        </a></span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Thiết kế bởi <a class="border-bottom" href="https://htmlcodex.com">FPL HP </a> <a
                        clas="border-bottom" href="https://themewagon.com"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('') }}/assets_client/lib/wow/wow.min.js"></script>
    <script src="{{ url('') }}/assets_client/lib/easing/easing.min.js"></script>
    <script src="{{ url('') }}/assets_client/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ url('') }}/assets_client/lib/lightbox/js/lightbox.min.js"></script>
    <script src="{{ url('') }}/assets_client/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ url('') }}/assets_client/js/main.js"></script>
    <!-- Thêm script JS từ section 'scripts' nếu có -->
    @yield('scripts')
</body>

</html>
