@extends('admin.layouts.master')
@section('main')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Chi tiết Feedback</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('contact.index') }}">Feedback</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chi tiết Feedback</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Thông tin chi tiết
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Tên người dùng:</h5>
                            <p>{{ $feedback->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Email:</h5>
                            <p>{{ $feedback->email }}</p>
                        </div>
                        <div class="col-md-12">
                            <h5>Nội dung Feedback:</h5>
                            <p>{{ $feedback->message }}</p>
                        </div>
                    </div>
                    <a href="{{ route('feedback.index') }}" class="btn btn-primary">Quay lại</a>
                </div>
            </div>
        </section>
    </div>
@endsection
