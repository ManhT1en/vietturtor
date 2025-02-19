@extends('client.layouts.master')

@section('styles')
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .info-box {
            background: #f8f9fa;
            border: 1px dashed #ddd;
            padding: 10px;
            border-radius: 5px;
            font-size: 0.95rem;
            line-height: 1.5;
        }
    </style>
@endsection

@section('main')
    @foreach ($listCourse as $course)
        <div class="container my-4">
            <div class="card p-4 shadow-sm">
                <!-- Title -->
                <h5 class="title fs-4 fw-bold mb-3">{{ $course->title }}</h5>
                <b class="text-secondary">Mã lớp: {{ $course->id }}</b><br>

                <!-- Fee -->
                <div class="d-flex justify-content-between align-courses-center">
                    <p class="text-success fs-4 fw-bold">Học phí: {{ round($course->min_rate) }} -
                        {{ round($course->max_rate) }} Buổi</p>
                    <button class="btn btn-success">phí: 10% học phí <span class="text-warning">Nhận lớp
                            ngay</span></button>
                </div><br>

                <!-- Description -->
                <div class="info-box">
                    {{ $course->description }}
                </div>

                <!-- Info -->
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled mt-3">
                            <li><i class="bi bi-clock"></i><strong> Thời gian tạo:</strong> {{ $course->created_at }}</li>
                            <li><i class="bi bi-geo-alt"></i><strong> Địa điểm:</strong> {{ $course->location }}</li>
                            <li>
                                <i class="bi bi-clock"></i><strong> Thời gian học:</strong>
                                @foreach ($course->courseShifts as $shift)
                                    {{ $shift->shift }}
                                @endforeach |
                                @foreach ($course->courseDays as $day)
                                    {{ $day->days }}
                                @endforeach
                            </li>
                            <li><i class="bi bi-calendar"></i><strong> Tần suất
                                    học: </strong>{{ $course->sessions_per_week }} buổi/tuần</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="list-unstyled mt-3">
                            <li><i class="bi bi-people"></i><strong> Yêu cầu gia sư:</strong>
                                {{ $course->gender_preference }}
                            </li>
                            <li><i class="bi bi-person"></i><strong> Số học viên:</strong> {{ $course->num_of_students }}
                            </li>
                            <li>
                                <i class="bi bi-music-note"></i><strong> Môn học:</strong>
                                @foreach ($course->subjects as $subject)
                                    {{ $subject->name }},
                                @endforeach
                            </li>
                            <li>
                                <i class="bi bi-music-note"></i><strong> Thời lượng 1 buổi:</strong>
                                {{ formatHours($course->desired_duration_per_session) }}
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    @endforeach

    @php
        function formatHours($hours)
        {
            $fullHours = floor($hours); // Lấy phần giờ
            $minutes = round(($hours - $fullHours) * 60); // Quy đổi phần lẻ sang phút, làm tròn để tránh sai sót

            if ($minutes == 60) {
                // Nếu phút là 60, cộng thêm 1 giờ và reset phút về 0
                $fullHours++;
                $minutes = 0;
            }

            return $fullHours . ' giờ ' . ($minutes > 0 ? $minutes . ' phút' : '');
        }
    @endphp
@endsection
