@extends('client.layouts.master')
@section('main')
<div class="container-fluid py-5">
    <div class="container py-5">
        @if(session('success')) <div class="alert alert-success"> {{ session('success') }} </div> 
                    @endif @if(session('error')) <div class="alert alert-danger"> {{ session('error') }} 
                    </div> @endif
        <div class="p-5 bg-light rounded">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Liên hệ với chúng tôi</h4>
                <h1 class="display-3">Liên hệ để được tư vấn</h1>
                <p class="mb-5">Bạn đang tìm kiếm một giải pháp học tập hiệu quả và đáng tin cậy? Đội ngũ gia sư của chúng tôi luôn sẵn sàng hỗ trợ bạn.
                    Với kinh nghiệm và chuyên môn trong nhiều lĩnh vực khác nhau, chúng tôi cam kết mang đến cho bạn một môi trường học tập cá nhân hóa và chuyên nghiệp.
                    Hãy để chúng tôi giúp bạn đạt được mục tiêu học tập và phát triển kỹ năng một cách tốt nhất.
                    Đừng ngần ngại liên hệ với chúng tôi để được tư vấn và tìm hiểu thêm về các dịch vụ gia sư.
                    Chúng tôi luôn lắng nghe và sẵn sàng giải đáp mọi thắc mắc của bạn.</a>.</p>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex w-100 border border-primary p-4 rounded bg-white">
                        <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                        <div class="">
                            <h4>Địa chỉ</h4>
                            <p class="mb-2">Yên Nghĩa - Hà Đông - Hà Nội</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex w-100 border border-primary p-4 rounded bg-white">
                        <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                        <div class="">
                            <h4>Gửi email</h4>
                            <p class="mb-2">22010151@st.phenikaa-uni.edu</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex w-100 border border-primary p-4 rounded bg-white">
                        <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                        <div class="">
                            <h4>Điện thoại</h4>
                            <p class="mb-2">123123123</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Tên của bạn</label>
                            <input type="text" class="w-100 form-control py-3 mb-5 border-primary @error('name') is-invalid @enderror" id="name" name="name" placeholder="Tên của bạn" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="email">Nhập Email của bạn</label>
                            <input type="email" class="w-100 form-control py-3 mb-5 border-primary  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Nhập Email của bạn" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="message">Tin nhắn của bạn</label>
                            <textarea class="w-100 form-control py-3 mb-5 border-primary @error('message') is-invalid @enderror" id="message" name="message" rows="5" placeholder="Tin nhắn của bạn">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                    
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="border border-primary h-100 rounded">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.7484136633625!2d105.74610611164958!3d20.96261618996489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313452efff394ce3%3A0x391a39d4325be464!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBQaGVuaWthYQ!5e0!3m2!1svi!2s!4v1735555925402!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact End -->




@endsection