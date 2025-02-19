@extends('admin.layouts.master')

@section('styles')
    <style>
        .thumbnail {
            width: 150px;
            height: 150px;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .thumbnail:hover {
            transform: scale(1.1);
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .caption {
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
        }
    </style>
@endsection

@section('main')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Hồ Sơ Gia Sư</h1>
        <div class="card shadow">
            <div class="card-body">
                <!-- Thông tin cá nhân và ảnh đại diện -->
                <div class="row mb-4">
                    <div class="col-md-4 text-center profile-section">
                        <img src="{{ asset('assets_client/img/profile_image/' . $tutor->profile_image) }}" alt="Ảnh đại diện"
                            class="rounded-circle mb-3 thumbnail" data-bs-toggle="modal" data-bs-target="#imageModal"
                            data-src="{{ asset('assets_client/img/profile_image/' . $tutor->profile_image) }}">
                        <p class="mb-0"><strong>Họ tên:</strong> {{ $tutor->user->name }}</p>
                        <p class="mb-0"><strong>Số điện thoại:</strong> {{ $tutor->user->phone }}</p>
                        <p><strong>Email:</strong> {{ $tutor->user->email }}</p>
                    </div>
                    <div class="col-md-8">
                        <h4 class="section-title">Thông tin cơ bản</h4>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <p><strong>Giới tính:</strong> {{ $tutor->sex == 1 ? 'Nam' : 'Nữ' }}</p>
                                <p><strong>Năm sinh:</strong> {{ $tutor->birth_year }}</p>
                                <p><strong>Bạn đang là:</strong> {{ $tutor->type == 1 ? 'Giáo viên' : 'Sinh viên' }}</p>
                                <p><strong>Môn dạy:</strong> {{ $tutor->specialties }}</p>
                                <p><strong>Số năm kinh nghiệm:</strong> {{ $tutor->experience_years }} năm</p>
                            </div>
                            <div class="col-sm-6">
                                <p><strong>Khu vực đang ở:</strong> {{ $province->name }}</p>
                                <p><strong>Khu vực có thể dạy:</strong> </p>
                                <p><strong>Địa chỉ:</strong> {{ $tutor->user->address }}</p>
                                <p><strong>Học phí tối thiểu:</strong> {{ $tutor->min_hourly_rate }}</p>
                                <p><strong>Học phí tối đa:</strong> {{ $tutor->max_hourly_rate }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Thông tin bổ sung -->
                <h4 class="section-title">Thông tin bổ sung</h4>
                <hr>
                <div class="row mb-4">
                    <div class="col-md-8">
                        <p><strong>Giới thiệu bản thân:</strong></p>
                        <p>{{ $tutor->bio }}</p>
                    </div>
                </div>

                <h4 class="section-title">Tệp đính kèm</h4>
                <hr>
                <div class="row mb-4">
                    <div class="col-md-12 text-center mb-3 d-flex flex-wrap gap-3">
                        <!-- front of id -->
                        <div class="thumbnail position-relative border rounded overflow-hidden" data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-src="{{ asset('assets_client/img/id_card_image/' . $tutor->front_of_id) }}">
                            <img src="{{ asset('assets_client/img/id_card_image/' . $tutor->front_of_id) }}"
                                alt="CCCD mặt trước" class="img-fluid h-100 w-100" style="object-fit: cover;">
                            <div class="caption position-absolute bottom-0 w-100 text-center py-1 small">
                                {{ $tutor->front_of_id }}
                            </div>
                        </div>

                        <!-- back of id -->
                        <div class="thumbnail position-relative border rounded overflow-hidden" data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-src="{{ asset('assets_client/img/id_card_image/' . $tutor->back_of_id) }}">
                            <img src="{{ asset('assets_client/img/id_card_image/' . $tutor->back_of_id) }}"
                                alt="CCCD mặt sau" class="img-fluid h-100 w-100" style="object-fit: cover;">
                            <div class="caption position-absolute bottom-0 w-100 text-center py-1 small">
                                {{ $tutor->back_of_id }}
                            </div>
                        </div>

                        <!-- certificate -->
                        <div class="thumbnail position-relative border rounded overflow-hidden" data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-src="{{ asset('assets_client/img/certificates_image/' . $tutor->certificates) }}">
                            <img src="{{ asset('assets_client/img/certificates_image/' . $tutor->certificates) }}"
                                alt="chứng chỉ" class="img-fluid h-100 w-100" style="object-fit: cover;">
                            <div class="caption position-absolute bottom-0 w-100 text-center py-1 small">
                                {{ $tutor->certificates }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nút hành động -->
                <form action="{{ route('tutor.changeStatus', ['tutorId' => $tutor->id]) }}" method="post">
                    @csrf
                    <div class="text-center mt-4">
                        <button class="btn btn-success me-2" type="submit" name="status" value="1">Active</button>
                        <button class="btn btn-danger" type="submit" name="status" value="0">Inactive</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal để xem ảnh phóng to -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="" alt="Phóng to" class="img-fluid">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Gán ảnh khi mở modal
        document.querySelectorAll('.thumbnail').forEach(thumbnail => {
            thumbnail.addEventListener('click', function() {
                const imgSrc = this.getAttribute('data-src');
                document.querySelector('#imageModal img').setAttribute('src', imgSrc);
            });
        });
    </script>
@endsection
