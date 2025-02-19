@extends('client.layouts.master')
@section('main')
    <div class="container my-5">
        <form action="{{ route('find-tutor.store') }}" method="POST" class="p-4 border rounded bg-white shadow-sm">
            @csrf
            <input type="hidden" name="parent_id" value="{{ $parent_id }}">
            <!-- Section Title -->
            <h3 class="mb-4 fw-bold">Mô tả yêu cầu tìm gia sư</h3>

            <!-- Contact and Summary -->
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label fw-bold">Tóm tắt yêu cầu (tối đa 20 từ) <span
                            class="text-danger">*</span></label>
                    <input name="title" type="text" class="form-control"
                        placeholder="VD: Tìm gia sư tiếng Anh tại Quận 6, Hồ Chí Minh" required />
                </div>
            </div>

            <!-- Teaching Area -->
            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Địa điểm dạy <span class="text-danger">*</span></label>
                    <input name="location" type="text" class="form-control" placeholder="Nhập vị trí" required />
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Số học viên <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="num_of_students" required />
                </div>
            </div>

            <!-- Additional Information -->
            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Ngày bắt đầu <span class="text-danger">*</span></label>
                    <input name="start_date" type="date" class="form-control" required />
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Giờ mỗi buổi</label>
                    <select name="desired_duration_per_session" class="form-select">
                        <option selected value="0">Chọn</option>
                        <option value="0.5">30 phút</option>
                        <option value="0.75">45 phút</option>
                        <option value="1">60 phút</option>
                        <option value="1.5">90 phút</option>
                        <option value="2">2 giờ</option>
                    </select>
                </div>
            </div>

            <!-- Subject and Student Gender -->
            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Môn học <span class="text-danger">*</span></label>
                    <select name="subject_ids[]" id="monHoc" class="form-select" multiple required>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Schedule -->
            <h5 class="mt-4">Thời gian có thể học <span class="text-danger">*</span></h5>
            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Chọn ngày trong tuần <span class="text-danger">*</span></label>
                    <select name="course_days[]" id="chonNgay" class="form-select" multiple required>
                        <option value="Monday">Thứ 2</option>
                        <option value="Tuesday">Thứ 3</option>
                        <option value="Wednesday">Thứ 4</option>
                        <option value="Thursday">Thứ 5</option>
                        <option value="Friday">Thứ 6</option>
                        <option value="Saturday">Thứ 7</option>
                        <option value="Sunday">Chủ nhật</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Chọn buổi <span class="text-danger">*</span></label>
                    <select name="course_shifts[]" id="chonBuoi" class="form-select" multiple required>
                        <option value="Sáng">Sáng</option>
                        <option value="Chiều">Chiều</option>
                        <option value="Tối">Tối</option>
                    </select>
                </div>
            </div>

            <!-- Tutor Requirements -->
            <h3 class="mt-4 fw-bold">Yêu cầu gia sư</h3>
            <div class="row g-3">
                <div class="col-md-2">
                    <label class="form-label fw-bold">Giới tính</label>
                    <select name="gender_preference" class="form-select">
                        <option value="male" required>Nam</option>
                        <option value="female">Nữ</option>
                        <option value="any">Tùy</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-bold">Trình độ <span class="text-danger">*</span></label>
                    <select name="level" class="form-select">
                        <option value="college">Đại học</option>
                        <option value="university">Cao đẳng</option>
                        <option value="other">Khác</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold">Học phí tối thiểu(VND) <span class="text-danger">*</span></label>
                    <input name="min_rate" type="number" class="form-control" required />
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold">Học phí tối đa(VND) <span class="text-danger">*</span></label>
                    <input name="max_rate" type="number" class="form-control" required />
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-bold">Buổi/Tuần<span class="text-danger">*</span></label>
                    <input name="sessions_per_week" type="number" class="form-control" placeholder="ví dụ: 3"
                        required />
                </div>
            </div>

            <!-- Additional Details -->
            <div class="row g-3 mt-3">
                <label class="form-label fw-bold">Mô tả chi tiết <span class="text-danger">*</span></label>
                <textarea name="description" class="form-control" rows="5"
                    placeholder="Yêu cầu chi tiết phụ huynh/học sinh có thể ghi thêm tại đây" required></textarea>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success px-5">Đăng yêu cầu</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#monHoc').select2({
                placeholder: "Chọn môn học",
                allowClear: true,
            });
        });
        $(document).ready(function() {
            $('#chonNgay').select2({
                placeholder: "Chọn ngày",
                allowClear: true,
            });
        });
        $(document).ready(function() {
            $('#chonBuoi').select2({
                placeholder: "Chọn buổi",
                allowClear: true,
            });
        });
    </script>
@endsection
