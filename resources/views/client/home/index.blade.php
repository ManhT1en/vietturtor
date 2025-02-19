@extends('client.layouts.master')

@section('main')
    <!-- Hero Start -->
    <div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12">
                    <h1 class="mb-3 text-primary display-5">Chúng Tôi Quan Tâm Tương Lai Của Con Bạn</h1>
                    <h1 class="mb-5 display-1 text-white">Nền tảng kết nối gia sư với học viên tốt nhất.</h1>
                    <a href="" class="btn btn-primary px-4 py-3 px-md-5  me-4 btn-border-radius">Bắt Đầu Ngay</a>
                    <a href="" class="btn btn-primary px-4 py-3 px-md-5 btn-border-radius">Tìm Hiểu Thêm</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5 about bg-light">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="video border">
                        <button type="button" class="btn btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4
                        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                        Giới thiệu về chúng tôi</h4>
                    <h1 class="text-dark mb-4 display-5">Phương pháp học tập thông minh để xây dựng tương lai tươi sáng cho
                        con bạn.</h1>
                    <p class="text-dark mb-4">Chúng tôi cung cấp các chương trình gia sư linh hoạt, được thiết kế riêng để
                        hỗ trợ trẻ phát triển toàn diện cả về học tập và kỹ năng sống. Hợp tác cùng đội ngũ gia sư tận tâm
                        và giàu kinh nghiệm.
                    </p>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Học theo lộ trình cá nhân</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Thời gian linh hoạt</h6>
                            {{-- <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Nutritious Foods</h6> --}}
                        </div>
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Đội ngũ gia sư chất lượng cao</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Cam kết tiến bộ rõ rệt
                            </h6>
                            {{-- <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Qualified Teacher</h6> --}}
                        </div>
                    </div>
                    <a href="" class="btn btn-primary px-5 py-3 btn-border-radius">Xem Chi Tiết</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Chúng Tôi Làm Gì</h4>
                <h1 class="mb-5 display-3">Bắt Đầu Hành Trình Học Tập Cùng Gia Sư Việt</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-comments fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Kết Nối Trực Tiếp:</a>
                                <p class="my-3">Phụ huynh dễ dàng kết nối trực tiếp với gia sư phù hợp, không qua trung
                                    gian.</p>
                                <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Xem
                                    thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-star fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Uy Tín, Chất Lượng</a>
                                <p class="my-3">Hệ thống đánh giá minh bạch, giúp bạn lựa chọn gia sư đáng tin cậy.</p>
                                <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Xem
                                    thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-users fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Gia Sư Chuyên Nghiệp:</a>
                                <p class="my-3">Đội ngũ gia sư được chọn lọc, giàu kinh nghiệm.</p>
                                <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Xem
                                    thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-user-circle fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Chăm Sóc Khách Hàng Tận Tâm</a>
                                <p class="my-3">Đội ngũ hỗ trợ luôn sẵn sàng giải đáp mọi thắc mắc của bạn.</p>
                                <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Xêm
                                    thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Programs Start -->
    <div class="container-fluid program  py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 800px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Chương trình của chúng tôi</h4>
                <h1 class="mb-5 display-3">Chương Trình Học Tập Đặc Biệt Dành Cho Học Sinh</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="{{ url('') }}/assets_client/img/program-1.jpg" class="img-fluid w-100"
                                    alt="Image">
                            </div>
                            <div class="px-4 py-2 bg-primary text-white program-rate">$60.99</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4">Anh Văn:</a>
                                <p class="mt-3 mb-0">Củng cố kiến thức Anh văn, cải thiện kỹ năng giao tiếp.</p>
                            </div>
                        </div>
                        <div
                            class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                            <img src="{{ url('') }}/assets_client/img/program-teacher.jpg"
                                class="img-fluid rounded-circle p-2 border border-primary bg-white" alt="Image"
                                style="width: 70px; height: 70px;">
                            <div class="ms-3">
                                <h6 class="mb-0 text-primary">Mary Mordern</h6>
                                <small>Arts Designer</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-wheelchair me-1"></i> 30 buổi</small>
                            <small class="text-white"><i class="fas fa-book me-1"></i> 11 chủ đề</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 60 giờ</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="{{ url('') }}/assets_client/img/program-2.jpg" class="img-fluid w-100"
                                    alt="Image">
                            </div>
                            <div class="px-4 py-2 bg-primary text-white program-rate">$60.99</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4">Mỹ Thuật:</a>
                                <p class="mt-3 mb-0">Khai phá tài năng hội họa và sáng tạo của trẻ.</p>
                            </div>
                        </div>
                        <div
                            class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                            <img src="{{ url('') }}/assets_client/img/program-teacher.jpg"
                                class="img-fluid rounded-circle p-2 border border-primary bg-white" alt=""
                                style="width: 70px; height: 70px;">
                            <div class="ms-3">
                                <h6 class="mb-0 text-primary">Mary Mordern</h6>
                                <small>Arts Designer</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-wheelchair me-1"></i> 30 buổi</small>
                            <small class="text-white"><i class="fas fa-book me-1"></i> 11 chủ đề</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 60 giờ</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="{{ url('') }}/assets_client/img/program-3.jpg" class="img-fluid w-100"
                                    alt="Image">
                            </div>
                            <div class="px-4 py-2 bg-primary text-white program-rate">$60.99</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4">Khoa Học:</a>
                                <p class="mt-3 mb-0">Học thông qua thí nghiệm thực tế và bài học thú vị.</p>
                            </div>
                        </div>
                        <div
                            class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                            <img src="{{ url('') }}/assets_client/img/program-teacher.jpg"
                                class="img-fluid rounded-circle p-2 border border-primary bg-white" alt=""
                                style="width: 70px; height: 70px;">
                            <div class="ms-3">
                                <h6 class="mb-0 text-primary">Mary Mordern</h6>
                                <small>Arts Designer</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-wheelchair me-1"></i> 30 buổi</small>
                            <small class="text-white"><i class="fas fa-book me-1"></i> 11 chủ đề</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 60 giờ</small>
                        </div>
                    </div>
                </div>
                <div class="d-inline-block text-center wow fadeIn" data-wow-delay="0.1s">
                    <a href="#" class="btn btn-primary px-5 py-3 text-white btn-border-radius">Xem Tất Cả Chương
                        Trình</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Program End -->


    <!-- Events Start -->
    <div class="container-fluid events py-5 bg-light">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Sự kiện</h4>
                <h1 class="mb-5 display-3">Sự Kiện Nổi Bật</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden rounded-circle position-relative">
                                <img src="{{ url('') }}/assets_client/img/event-1.jpg"
                                    class="img-fluid w-100 rounded-circle" alt="Image">
                                <div class="event-overlay">
                                    <a href="img/event-1.jpg" data-lightbox="event-1"><i
                                            class="fas fa-search-plus text-white fa-2x"></i></a>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29/11</div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am -
                                    12:00pm</small>
                                <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> Hà
                                    Nội</small>
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <a href="#" class="h4">Hội thảo vẽ tranh & âm nhạc</a>
                            <p class="mb-0 mt-3">Tham gia hội thảo vẽ tranh & âm nhạc để khám phá sự sáng tạo qua sắc màu
                                và giai điệu. Một trải nghiệm nghệ thuật độc đáo dành cho mọi lứa tuổi! Chìa khoá cho ta 
                                cảm nhận cửa sổ tâm hồn .</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden rounded-circle position-relative">
                                <img src="{{ url('') }}/assets_client/img/event-2.jpg"
                                    class="img-fluid w-100 rounded-circle" alt="Image">
                                <div class="event-overlay">
                                    <a href="img/event-3.jpg" data-lightbox="event-1"><i
                                            class="fas fa-search-plus text-white fa-2x"></i></a>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29/11</div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am -
                                    12:00pm</small>
                                <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> Hà
                                    Nội</small>
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <a href="#" class="h4">Tại sao việc  học là cần thiết?</a>
                            <p class="mb-0 mt-3">Học tập là chìa khóa mở ra tri thức và cơ hội. Nó giúp bạn phát triển bản
                                thân, đạt được mục tiêu và xây dựng một tương lai tươi sáng.Góp phần cải thiện bản thân trong hành trình
                                phá phá kiến thức.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden rounded-circle position-relative">
                                <img src="{{ url('') }}/assets_client/img/event-3.jpg"
                                    class="img-fluid w-100 rounded-circle" alt="Image">
                                <div class="event-overlay">
                                    <a href="img/event-3.jpg" data-lightbox="event-1"><i
                                            class="fas fa-search-plus text-white fa-2x"></i></a>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29/11</div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am -
                                    12:00pm</small>
                                <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> Hà
                                    Nội</small>
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <a href="#" class="h4">Nhận thức về sức khỏe của trẻ em</a>
                            <p class="mb-0 mt-3">Nhận thức về sức khỏe của trẻ em là nền tảng cho sự phát triển toàn diện.
                                Hãy cùng xây dựng thói quen sống lành mạnh để trẻ em có một tương lai khỏe mạnh và hạnh
                                phúc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events End-->


    <!-- Blog Start-->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Tin tức và Blog mới nhất</h4>
                <h1 class="mb-5 display-3">Đọc tin tức và Blog mới nhất của chúng tôi</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-item rounded-bottom">
                        <div class="blog-img overflow-hidden position-relative img-border-radius">
                            <img src="{{ url('') }}/assets_client/img/blog-1.jpg" class="img-fluid w-100"
                                alt="Image">
                        </div>
                        <div
                            class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                            <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29/11/2023</small>
                            <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Bình luận
                                (15)</small>
                        </div>
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img src="{{ url('') }}/assets_client/img/program-teacher.jpg"
                                    class="img-fluid rounded-circle p-2 rounded-top" alt="Image"
                                    style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">Mary Mordern</h6>
                                <p class="text-muted">Gia Sư Việt</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4 bg-light rounded-bottom">
                            <div class="blog-text-inner">
                                <a href="#" class="h4">Làm thế nào để chú ý đến việc học của con?</a>
                                <p class="mt-3 mb-4">Để giúp con tập trung vào việc học, cha mẹ cần tạo một môi trường học
                                    tập thoải mái, khuyến khích và đồng hành cùng con.</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">Xem
                                    chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="blog-item rounded-bottom">
                        <div class="blog-img overflow-hidden position-relative img-border-radius">
                            <img src="{{ url('') }}/assets_client/img/blog-2.jpg" class="img-fluid w-100"
                                alt="Image">
                        </div>
                        <div
                            class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                            <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29/11/2023</small>
                            <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Bình luận
                                (15)</small>
                        </div>
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img src="{{ url('') }}/assets_client/img/program-teacher.jpg"
                                    class="img-fluid rounded-circle p-2 rounded-top" alt=""
                                    style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">Mary Mordern</h6>
                                <p class="text-muted">Gia Sư Việt</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4 bg-light rounded-bottom">
                            <div class="blog-text-inner">
                                <a href="#" class="h4">Khuyến khích trẻ chơi thể thao ngoài trời.</a>
                                <p class="mt-3 mb-4">Khuyến khích trẻ tham gia thể thao ngoài trời giúp phát triển thể
                                    chất, cải thiện sức khỏe và tăng cường kỹ năng giao tiếp.</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">Xem
                                    chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="blog-item rounded-bottom">
                        <div class="blog-img overflow-hidden position-relative img-border-radius">
                            <img src="{{ url('') }}/assets_client/img/blog-3.jpg" class="img-fluid w-100"
                                alt="Image">
                        </div>
                        <div
                            class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                            <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29/11/2023</small>
                            <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Bình luận
                                (15)</small>
                        </div>
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img src="{{ url('') }}/assets_client/img/program-teacher.jpg"
                                    class="img-fluid rounded-circle p-2 rounded-top" alt=""
                                    style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">Mary Mordern</h6>
                                <p class="text-muted">Gia Sư Việt</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4 bg-light rounded-bottom">
                            <div class="blog-text-inner">
                                <a href="#" class="h4">Cách quản lý thời gian học tập hiệu quả.</a>
                                <p class="mt-3 mb-4">Quản lý thời gian học tập hiệu quả giúp trẻ xây dựng thói quen học đều
                                    đặn, tránh căng thẳng và đạt kết quả tốt.</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">Xem
                                    chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End-->


    <!-- Team Start-->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Đội ngũ gia sư của chúng tôi</h4>
                <h1 class="mb-5 display-3">Gặp Gỡ Đội Ngũ Gia Sư Chuyên Nghiệp</h1>
            </div>
            <div class="row g-5 justify-content-center">
                @foreach ($listTutor as $tutor)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <!-- Sử dụng profile_image nếu có, nếu không thì hiển thị ảnh mặc định -->
                            <img src="{{ file_exists(public_path('assets_client/img/profile_image/' . $tutor->profile_image)) ? asset('assets_client/img/profile_image/' . $tutor->profile_image) : url('assets_client/img/team-1.jpg') }}"
                                class="img-fluid w-100" alt="{{ $tutor->user->name }}">

                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3"
                                    href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3"
                                    href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3"
                                    href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle"
                                    href=""><i class="fab fa-instagram"></i></a>
                            </div>

                            <div class="team-content text-center py-3">
                                <h4 class="text-primary">{{ $tutor->user->name }}</h4>
                                <p class="text-muted mb-2">{{ $tutor->specialties }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End-->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Đánh giá từ phụ huynh</h4>
                <h1 class="mb-5 display-3">Phụ Huynh Nói Gì Về Gia Sư Việt?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute"
                            style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="{{ url('') }}/assets_client/img/testimonial-2.jpg"
                                    class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Nguyễn Văn Hòa</h4>
                                <p class="m-0 pb-3">Kỹ sư xây dựng</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Gia sư rất tận tâm, luôn đúng giờ và có phương pháp giảng dạy dễ hiểu. Con
                                trai tôi tiến bộ rõ rệt trong môn Toán sau 3 tháng học. Tôi rất hài lòng!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute"
                            style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="{{ url('') }}/assets_client/img/testimonial-2.jpg"
                                    class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Trần Thị Lan</h4>
                                <p class="m-0 pb-3">Giáo viên tiểu học</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Là một giáo viên, tôi thấy gia sư này có kỹ năng truyền đạt tốt, biết cách
                                lắng nghe và giải đáp thắc mắc của học sinh. Tuy nhiên, nếu có thêm bài tập về nhà chi tiết
                                hơn thì sẽ hoàn hảo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute"
                            style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="{{ url('') }}/assets_client/img/testimonial-2.jpg"
                                    class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Phạm Minh Tuấn</h4>
                                <p class="m-0 pb-3">Chủ quán cà phê</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Tôi rất ấn tượng với sự kiên nhẫn của gia sư. Con gái tôi từng rất ngại học
                                tiếng Anh, nhưng giờ cháu đã tự tin hơn rất nhiều. Tôi cảm thấy quyết định thuê gia sư là
                                đúng đắn.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
