@extends('client.layouts.master')

@section('styles')
    <!-- Add Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <!-- Style CSS -->
    <style>
        /* Custom Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #fce4ec;
        }

        .form-container {
            background-color: #ffebee;
            border-radius: 10px;
            padding: 30px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            font-size: 24px;
            font-weight: bold;
            color: #ec407a;
        }

        .form-label {
            color: #ec407a;
        }

        .form-control,
        .form-select {
            background-color: #ffffff;
            border: 1px solid #f06292;
            /* Viền hồng */
            border-radius: 10px;
            /* Bo cong viền */
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #f06292;
            /* Viền hồng khi focus */
            box-shadow: none;
        }

        .submit-btn {
            background-color: #f06292;
            color: white;
            font-weight: bold;
        }

        .avatar-preview-container {
            width: 100%;
            height: 260px;
            /* Chiều cao cố định của khung ảnh */
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            /* Nền xám nhạt để hiển thị khung rõ ràng */
            border-bottom: 1px solid #dee2e6;
        }

        .avatar-preview {
            width: 100%;
            /* Chiều rộng tối đa của ảnh */
            height: 100%;
            /* Chiều cao tối đa của ảnh */
            object-fit: cover;
            /* Giữ tỉ lệ ảnh và đảm bảo ảnh lấp đầy khung */
        }

        /* Custom style for Select2 */
        .select2-container--default .select2-selection--multiple {
            border: 1px solid #f06292 !important;
            /* Viền hồng */
            background-color: #ffffff;
            /* Nền trắng */
            border-radius: 10px;
            /* Bo cong viền */
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #f06292 !important;
            /* Màu nền của lựa chọn */
            color: white;
            /* Màu chữ trắng */
            border-radius: 10px;
            /* Bo cong viền lựa chọn */
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: white;
            /* Màu xóa (remove) */
        }
    </style>
@endsection

@section('main')
    <!-- Form Section -->
    <div class="container form-container mb-4">
        <h2 class="form-title text-center">ĐĂNG KÝ GIA SƯ</h2>
        <form method="POST" action="{{ route('tutor.register.store') }}" enctype="multipart/form-data">
            @csrf
            <!-- Personal Information Section -->
            <h3 class="form-title">Thông tin cá nhân</h3>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Họ tên <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}"
                        required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}"
                        required>
                </div>

                <div class="col-md-6 mt-3">
                    <label class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}"
                        required>
                </div>

                <div class="col-md-6 mt-3">
                    <label class="form-label">Địa chỉ <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="address" value="{{ old('address', $user->address) }}"
                        required>
                </div>
            </div>

            <!-- Tutor Information Section -->

            <h3 class="form-title">Thông tin gia sư</h3>
            <div class="row mb-3">

                <!-- profile_image -->
                <div class="col-md-4">
                    <label class="form-label">Ảnh đại diện <span class="text-danger">*</span></label>
                    <div class="card" style="width: 18rem;">
                        <div class="card-img-top avatar-preview-container">
                            <img id="avatarPreview" src="https://via.placeholder.com/200" alt="Ảnh đại diện"
                                class="avatar-preview">
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="file" name="profile_image" accept="image/*" required
                                onchange="previewImage(event)">
                            <small class="form-text text-muted">Chọn ảnh đại diện của bạn (Ảnh JPG, PNG, JPEG)</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">
                        <!-- gender -->
                        <div class="col-md-6">
                            <label class="form-label">Giới tính <span class="text-danger">*</span></label>
                            <select class="form-select" name="gender" required>
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select>
                        </div>

                        <!-- birth year -->
                        <div class="col-md-6">
                            <label class="form-label">Năm sinh <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="birth_year" required placeholder="VD: 1995">
                        </div>

                        <!-- type -->
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Bạn đang là <span class="text-danger">*</span></label>
                            <select class="form-select" name="type" required>
                                <option value="1">Giáo viên</option>
                                <option value="0">Sinh viên</option>
                            </select>
                        </div>

                        <!-- specialties -->
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Môn dạy <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="specialties" required
                                placeholder="VD: toán, lý">
                        </div>

                        <!-- live area-->
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Khu vực bạn đang ở <span class="text-danger">*</span></label>
                            <select class="form-select" name="live-area" required id="province_select">
                                <option value="">Chọn tỉnh thành</option>
                                <option value="">Hà Nội</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- teach area -->
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Khu vực bạn có thể dạy <span class="text-danger">*</span></label>
                            <select class="form-select" name="teach-area" multiple="multiple" required id="district_select"
                                style="width: 100%" disabled>
                                <!-- Các quận huyện sẽ được đổ vào đây -->
                            </select>
                        </div>

                        <!-- min hourly rate -->
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Học phí/buổi mong muốn tối thiểu <span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="min_hourly_rate" required
                                placeholder="VD: 200000">
                        </div>

                        <!-- max hourly rate -->
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Học phí/buổi mong muốn tối đa <span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="max_hourly_rate" required
                                placeholder="VD: 400000">
                        </div>

                        <!-- front of id card -->
                        <div class="col-md-6 mt-3">
                            <label class="form-label">CCCD (mặt trước) <span class="text-danger">*</span></label>
                            <input class="form-control" type="file" name="front_of_id" accept=".jpg,.jpeg,.png,.pdf"
                                required>
                        </div>

                        <!-- back of id card -->
                        <div class="col-md-6 mt-3">
                            <label class="form-label">CCCD (mặt sau) <span class="text-danger">*</span></label>
                            <input class="form-control" type="file" name="back_of_id" accept=".jpg,.jpeg,.png,.pdf"
                                required>
                        </div>

                        <!-- certificates -->
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Bằng tốt nghiệp đại học hoặc bảng điểm thi THPTQG <span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="file" name="certificates" accept=".jpg,.jpeg,.png,.pdf"
                                required>
                        </div>

                        <!-- experience years -->
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Số năm kinh nghiệm <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="experience_years" required
                                placeholder="VD: 5">
                        </div>
                    </div>
                </div>


                <!-- bio -->
                <div class="col-md-12 mt-3">
                    <label class="form-label">Giới thiệu về bản thân <span class="text-danger">*</span> (1500
                        từ)</label>
                    <textarea class="form-control" name="bio" rows="5"></textarea>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn submit-btn">Đăng ký làm gia sư</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        // multiple select box
        $(document).ready(function() {
            // Initialize Select2
            $('#district_select').select2({
                placeholder: 'Chọn khu vực bạn có thể dạy',
                allowClear: true,
                closeOnSelect: false
            });
        });

        // Function to preview the image before uploading
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('avatarPreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        // Lắng nghe sự kiện thay đổi của select tỉnh thành
        $('#province_select').on('change', function() {
            var provinceId = $(this).val();

            if (provinceId) {
                // Gửi request AJAX để lấy danh sách quận huyện theo province_id
                $.ajax({
                    url: '/tutor-register/' + provinceId,
                    method: 'GET',
                    success: function(response) {
                        // Xóa các quận huyện cũ
                        $('#district_select').html('');

                        // Thêm các quận huyện mới vào select
                        response.forEach(function(district) {
                            $('#district_select').append('<option value="' + district.id +
                                '">' + district.name + '</option>');
                        });

                        // Kích hoạt select quận huyện
                        $('#district_select').prop('disabled', false);
                    }
                });
            } else {
                // Nếu không chọn tỉnh thành, disable và xóa các quận huyện cũ
                $('#district_select').prop('disabled', true).html('');
            }
        });
    </script>
@endsection
