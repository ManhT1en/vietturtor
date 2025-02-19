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
                        <h3>Danh sách gia sư</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tutor</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Bảng gia sư
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User_id</th>
                                    <th>Năm kinh nghiệm</th>
                                    <th>Môn dạy được</th>
                                    <th>Bằng cấp</th>
                                    <th>Điểm đánh giá trung bình</th>
                                    <th>Tổng số giờ giảng</th>
                                    <th>Giá min</th>
                                    <th>Giá max</th>
                                    <th>Ảnh</th>
                                    <th>trạng thái</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listTutor as $key => $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->user_id }}</td>
                                        <td>{{ $item->experience_years ?? 'N/A' }}</td>
                                        <td>{{ $item->specialties ?? 'N/A' }}</td>
                                        <td>{{ $item->certificates ?? 'N/A' }}</td>
                                        <td>{{ $item->average_rating }}</td>
                                        <td>{{ $item->total_hours_taught }}</td>
                                        <td>{{ $item->min_hourly_rate ? number_format($item->min_hourly_rate, 2) : 'N/A' }}
                                        </td>
                                        <td>{{ $item->max_hourly_rate ? number_format($item->max_hourly_rate, 2) : 'N/A' }}
                                        </td>
                                        <td>
                                            @if ($item->profile_image)
                                                <img src="{{ asset('storage/' . $item->profile_image) }}"
                                                    alt="Profile Image" style="width: 50px; height: 50px;">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $item->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td><a class="btn btn-secondary btn-sm"
                                                href="{{ route('tutor.profile', ['tutorId' => $item->id]) }}">Chi tiết</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
    @endsection
