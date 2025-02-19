@extends('client.layouts.master')
@section('layoutTutorInfo')
<link rel="stylesheet" href="{{ url('') }}/assets/css/pages/layoutTutorInfo.css">

@endsection
@section('main')
<div    id="main"
      class="mx-auto text-center wow fadeIn mt-2"
      data-wow-delay="0.1s"
      style="max-width: 600px"
    >
      <h4
        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius"
      >
        Đội ngũ giảng viên của chúng tôi
      </h4>
      <h1 class="mb-5 display-4">Gặp gỡ các giảng viên</h1>
    </div>

    <div class="col-md-12 mb-5">
      <div class="row">
        <div class="col-md-9">
          <div class="container-fluid team pt-0">
            <div class="container pt-0">
              <div class="row g-5 justify-content-center">
                @foreach ( $listTutor as $key => $item )
                <div
                  class="col-md-6 col-lg-4 col-xl-3 wow fadeIn"
                  data-wow-delay="0.1s"
                >
                  <div
                    id="teacher_55452"
                    class="teacher-item shadow-sm position-relative rounded bg-dark"
                  >
                    <div class="doctor-thumb position-relative overflow-hidden">
                      <img
                        src="https://i.pinimg.com/736x/40/a5/ee/40a5eec12e042e1fa1c28f5080f77038.jpg"
                        class="img-fluid w-100"
                        alt="Linda Carlson"
                      />
                      <div
                        class="descInfo position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-3"
                        style="background: rgba(0, 0, 0, 0.5); display: none"
                      >
                        <p class="text-white mb-3">
                          {{$item->bio}}
                        </p>
                        <div class="buttonCtrl">

                          <a
                            class="btn btn-outline-light btn-create-class btn-sm"
                            href="/list-tutor/{{$item->user_id}}"
                            >Xem hồ sơ</a
                          >
                        </div>
                      </div>
                      <div
                        class="checkedteacher position-absolute top-0 end-0 p-2"
                      >
                        <i class="fas fa-user-check text-white fs-5"></i>
                      </div>
                    </div>
                    <div class="info p-3 bg-dark rounded-bottom">
                      <h4 class="text-white mt-0 mb-2 text-center">
                        <a
                          href="{{ route('list-tutor.show',['id' => $item->user->id ]) }}"
                          class="titleTeacher text-white text-decoration-none"
                          >{{$item->user->name}}</a
                        >
                      </h4>
                      <div class="d-flex justify-content-center align-items-center">
                        <div>                       
                          {{-- Hiển thị sao đầy --}}
                          @for ($i = 0; $i < $item['filledStars']; $i++)
                              <span class="bi bi-star-fill star-checked"></span>
                          @endfor

                          {{-- Hiển thị sao nửa --}}
                          @if ($item['hasHalfStar'])
                              <span class="bi bi-star-half star-checked"></span>
                          @endif

                          {{-- Hiển thị sao trống --}}
                          @for ($i = 0; $i < $item['emptyStars']; $i++)
                              <span class="bi bi-star"></span>
                          @endfor
                        </div>
                        <div class="text-white ms-2"> ({{$item->average_rating}})</div>
                    </div>



                      <ul class="list-unstyled mb-0 text-light small">
                        <li class="textOverflowManyLines">
                          <i class="fas fa-map-marker-alt me-2"></i>{{$item->user->address}}
                        </li>
                        <li class="textOverflow1Line">
                          <i class="fas fa-user-graduate me-2"></i>{{$item->certificates}}
                        </li>
                        <li class="textOverflowManyLines">
                          <i class="fas fa-book me-2"></i>{{$item->specialties}}
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- Repeat for each teacher card with similar HTML structure and adjusted wow delay as in original -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget">
            <h5 class="widget-title line-bottom">Top gia sư Tháng 11</h5>
            <div class="tutor-list">
              <div class="tutor-item">
                <img
                  src="https://i.pinimg.com/736x/27/59/85/2759857f7584e595195bd9079dbe61b8.jpg"
                  class="tutor-avatar"
                />
                <span class="tutor-name">Trần Nguyễn Khánh Lâm</span>
                <span class="tutor-score">2</span>
              </div>
              <div class="tutor-item">
                <img
                  src="https://i.pinimg.com/736x/ee/8f/bd/ee8fbd1d731637de6904438a1fcb3798.jpg"
                  class="tutor-avatar"
                />
                <span class="tutor-name">Nguyễn Đức Minh</span>
                <span class="tutor-score">2</span>
              </div>
              <div class="tutor-item">
                <img
                  src="https://i.pinimg.com/736x/66/17/dd/6617dd06a096ceeb1bb0b676c9f98427.jpg"
                  class="tutor-avatar"
                />
                <span class="tutor-name">Nguyễn Trung Luân</span>
                <span class="tutor-score">2</span>
              </div>
              <div class="tutor-item">
                <img
                  src="https://i.pinimg.com/236x/6a/65/0a/6a650a727b258752c02a8df6222ac52c.jpg"
                  class="tutor-avatar"
                />
                <span class="tutor-name">Nguyễn Trung Hiếu</span>
                <span class="tutor-score">2</span>
              </div>
              <div class="tutor-item">
                <img
                  src="https://i.pinimg.com/236x/19/c6/ab/19c6aba9a6d235d695100f43385b0824.jpg"
                  class="tutor-avatar"
                />
                <span class="tutor-name">Phạm Đức Tùng</span>
                <span class="tutor-score">2</span>
              </div>
              <!-- Thêm các mục tutor-item tương tự -->
            </div>
          </div>

          <div class="widget">
            <h5 class="widget-title line-bottom">Top các môn dạy</h5>
            <div class="tags">
              <span class="subject-tag">Toán Lớp 2</span>
              <span class="subject-tag">Toán Lớp 3</span>
              <span class="subject-tag">Toán Lớp 1</span>
              <span class="subject-tag">Toán Lớp 4</span>
              <span class="subject-tag">Tiếng Việt Lớp 1</span>
              <span class="subject-tag">Tiếng Anh Lớp 2</span>
              <!-- Thêm các môn học khác theo nhu cầu -->
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection