@extends('client.layouts.master')

@section('styles')
    <style>
        .success-container {
            text-align: center;
            padding: 50px 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .success-title {
            font-size: 32px;
            color: #4caf50;
            font-weight: bold;
        }

        .success-message {
            font-size: 18px;
            color: #333;
            margin: 20px 0;
        }

        .btn-home {
            background-color: #f06292;
            color: #fff;
            font-size: 16px;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn-home:hover {
            background-color: #ec407a;
        }
    </style>
@endsection

@section('main')
    <div class="container success-container mb-4">
        <h2 class="success-title">Đăng ký thành công!</h2>
        <p class="success-message">Cảm ơn bạn đã đăng ký làm gia sư. Chúng tôi sẽ xem xét thông tin của bạn và liên hệ trong
            thời gian sớm nhất.</p>
        <a href="{{ route('home.index') }}" class="btn btn-home">Quay về trang chủ</a>
    </div>
@endsection
