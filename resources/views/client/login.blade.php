<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link rel="stylesheet" href=" {{ url('') }}/assets_client/css/login.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container register-container">
            <form action="{{route('register.register')}}" method="POST">
                @csrf
                <h1>Đăng ký ngay</h1>
                <input type="text" name="name" placeholder="Nhập tên của bạn " />
                <input type="email" name="email" placeholder="Nhập email" />
                <input type="password" name="password" placeholder="nhập mật khẩu " />
                <button>Đăng ký</button>
                <span>Hoặc đăng nhập bằng</span>
                <div class="social-container">
                    <a href="" class="social"><i class="lni lni-facebook-fill"></i></a>
                    <a href="" class="social"><i class="lni lni-google"></i></a>
                </div>
            </form>
        </div>
        <div class="form-container login-container">
            <form action="{{ route('login.login') }}" method="POST">
                <h1>Đăng nhập</h1>
                @csrf
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="mật khẩu " />
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox" />
                        <label>Nhớ tôi </label>
                    </div>
                    <div class="pass-link">
                        <a href="">Quên mật khẩu </a>
                    </div>
                </div>
                <button>Học thôi</button>
                @if (session('error'))
                    <div class="alert alert-danger">
                        <h5>{{ session('error') }}</h5>
                    </div>
                @endif
                <span>Hoặc đăng nhập bằng </span>
                <div class="social-container">
                    <a href="" class="social"><i class="lni lni-facebook-fill"></i></a>
                    <a href="" class="social"><i class="lni lni-google"></i></a>
                </div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">
                        Bắt đầu thôi <br />

                    </h1>
                    <p>Nếu đã có tài khoản ?</p>
                    <button class="ghost" id="login">Đăng nhập
                        <i class="lni lni-arrow-left login"></i>
                    </button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="title">
                        Nâng tri thức <br />
                        Ngay bây giờ
                    </h1>
                    <p>
                        Chưa có tài khoản ? Đăng ký ngay !
                    </p>
                    <button class="ghost" id="register">Đăng ký
                        <i class="lni lni-arrow-right register"></i>
                    </button>
                    @if (session('error'))
                    <div class="alert alert-danger">
                        <h5>{{ session('error') }}</h5>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('') }}/assets_client/js/app.js"></script>
</body>

</html>
