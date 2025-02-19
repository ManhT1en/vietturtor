@extends('client.layouts.master')
@section('layoutTutorInfo')
<link rel="stylesheet" href="{{ url('') }}/assets/css/pages/layoutTutorInfo.css">

@endsection
@section('main')
    <div id="main" class="container mt-5">
      <!-- Header -->
      <div class="row">
        <div class="col-md-3">
          <div class="text-center">
            <img
              src="https://i.pinimg.com/736x/d5/bc/2f/d5bc2f4a1a5334706760c89ee8b9f0ec.jpg"
              alt="Profile Picture"
              class="profile-img"
            />
            <p class="mt-2"><strong class="ready-txt">Đang sẵn sàng</strong></p>
            <p><strong>Ngày tham gia:</strong> {{$tutor->first()->created_at->format('d/m/Y')}}</p>
          </div>

          <div>
            <h6 class="achievement-title">Thành Tích</h6>
            <hr />
            @foreach ($certificates as $certificate)
                <div class="achievement-item">
                    <div class="d-flex">
                        <span class="achievement-icon">🎖️</span>
                        <div class="achievement-content" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$certificate->id}}">
                            {{$certificate->title}}
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-{{$certificate->id}}" tabindex="-1" aria-labelledby="exampleModalLabel-{{$certificate->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel-{{$certificate->id}}">{{$certificate->title}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                      <img
                                        src="https://i.pinimg.com/736x/d5/bc/2f/d5bc2f4a1a5334706760c89ee8b9f0ec.jpg"
                                        alt="Profile Picture"
                                        class="profile-img mb-3"
                                      />   
                                    </div>
                                    <div class="modal-body">
                                      <p><strong>Giới thiệu: </strong>{{$certificate->description}}</p>
                                      <p><strong>Ngày phát hành: </strong> {{$certificate->issued_date}}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="achievement-date">{{$certificate->issued_date}}</div>
                </div>
            @endforeach

            <!-- Modal -->
            
          </div>
        </div>

        <div class="col-md-3 col-md-push-6 ">
          <div class="border rounded p-2 mt-2 text-center">
          <div class="price mt-2">
              {{ number_format($tutor->first()->min_hourly_rate ?? 0, 0) }} ~
              {{ number_format($tutor->first()->max_hourly_rate ?? 0, 0) }} đ/H
          </div>
            <div class="rating my-2">
              {{-- Hiển thị sao đầy --}}
              @for ($i = 0; $i < $tutor->first()->filledStars; $i++)
                  <span class="bi bi-star-fill star-checked"></span>
              @endfor

              {{-- Hiển thị sao nửa --}}
              @if ($tutor->first()->hasHalfStar)
                  <span class="bi bi-star-half star-checked"></span>
              @endif

              {{-- Hiển thị sao trống --}}
              @for ($i = 0; $i < $tutor->first()->emptyStars; $i++)
                  <span class="bi bi-star"></span>
              @endfor
              <span class="text-muted">({{$tutor->first()->average_rating}})</span>
            </div>
            <button class="btn btn-custom w-100 mb-2">THUÊ</button>
            <button class="btn btn-outline-primary w-100 mb-3">DONATE</button>
          </div>
        </div>

        <div class="col-md-6 col-md-pull-3 mb-3">
          <div class="row mb-4">
            <h3 class="col-md-9 custom-name">{{$tutor->first()->user->name??'N/A'}}</h3>
            <button class="btn btn-danger col-md-3">Theo dõi</button>
          </div>

          <div class="row">
            <p class="col-md-6">
              <strong>Số người theo dõi:</strong> 1147 người
            </p>
            <p class="col-md-3"><strong>Số giờ dạy:</strong> {{$tutor->first()->total_hours_taught??'N/A'}}</p>

          </div>
          <hr />
          <div class="mb-4 mt-4 d-flex flex-wrap overflow-container">
            <span class="custom-tag">Toán</span>
            <span class="custom-tag">Văn </span>
            <span class="custom-tag">Anh</span>
            <span class="custom-tag">Lý </span>
            <span class="custom-tag">Hoá</span>
            <span class="custom-tag">Sinh</span>
          </div>
          <hr />
          <h4><strong>Thông tin</strong></h4>
          <div class="d-flex gap-3 flex-wrap">
          {{$tutor->first()->bio??'N/A'}}
          </div>
          <hr />
          <h4 class="mb-4 mt-2">Đánh giá</h4>
          @foreach ($reviewers as $reviewer)
          <div class="review-item d-flex">
            <img
              src="https://via.placeholder.com/50"
              alt="Avatar"
              class="review-avatar"
            />
            <div class="flex-grow-1">
              <div class="d-flex justify-content-between">
                <div>
                  <span class="review-header">{{$reviewer->student->name}}</span>
                  <span class="review-date d-block">{{$reviewer->created_at}}</span>
                </div>
                <div>
                  <span class="review-stars">
                  @for ($i = 0; $i < $reviewer->filledStars; $i++)
                      <span class="bi bi-star-fill star-checked"></span>
                  @endfor

                  {{-- Hiển thị sao nửa --}}
                  @if ($reviewer->hasHalfStar)
                      <span class="bi bi-star-half star-checked"></span>
                  @endif

                  {{-- Hiển thị sao trống --}}
                  @for ($i = 0; $i < $reviewer->emptyStars; $i++)
                      <span class="bi bi-star"></span>
                  @endfor
                  </span>
                  <span class="review-duration d-block">({{$reviewer->rating}})</span>
                </div>
              </div>
              <p class="mb-0">{{$reviewer->comment}}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
@endsection
