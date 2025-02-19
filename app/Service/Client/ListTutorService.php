<?php

namespace App\Service\Client;

use App\Models\Certificate;
use App\Models\Review;
use App\Models\TutorProfile;
use App\Models\User;

class ListTutorService
{

    public function getAll() {
        return TutorProfile::all();
    }
    public function getFullProfile() {
        $tutors = TutorProfile::whereHas('user', function($query) {
            $query->where('user_type', 'tutor');
        })->get();
        foreach ($tutors as $key => $item) {
            // Làm tròn số 
            $tutors[$key]['roundedValue'] = $this->customRound($tutors[$key]['average_rating']);
            // Tính sao đầy
            $tutors[$key]['filledStars'] = floor($tutors[$key]['roundedValue']);
            // Tính sao nửa
            $tutors[$key]['hasHalfStar'] = ($tutors[$key]['roundedValue'] - $tutors[$key]['filledStars']) == 0.5;
            // Tính sao trống
            $tutors[$key]['emptyStars'] = 5 - $tutors[$key]['filledStars'] - ($tutors[$key]['hasHalfStar'] ? 1 : 0);
        }
        return $tutors;
    }
    public function getTutorByTutorId($id) {
        // Lấy thông tin tutor dựa trên ID
        $tutors = TutorProfile::whereHas('user', function($query) use ($id) {
            $query->where('id', $id);
        })->get();

        // Thêm các thuộc tính tính sao cho mỗi tutor
        $tutors->transform(function ($tutor) {
            $roundedValue = $this->customRound($tutor->average_rating ?? 0);
            $tutor->roundedValue = $roundedValue;
            $tutor->filledStars = floor($roundedValue); 
            $tutor->hasHalfStar = ($roundedValue - $tutor->filledStars) == 0.5; 
            $tutor->emptyStars = 5 - $tutor->filledStars - ($tutor->hasHalfStar ? 1 : 0); 
            return $tutor;
        });

        return $tutors;
    }
    public function getReviewsByTutorId($id) {
        // Lấy danh sách review dựa trên tutor_id
        $reviews = Review::where('tutor_id', $id)->with('student')->with('course')->get();
        $reviews->transform(function ($review) {
            $roundedValue = $this->customRound($review->rating ?? 0);
            $review->roundedValue = $roundedValue;
            $review->filledStars = floor($roundedValue); // Tính số sao đầy
            $review->hasHalfStar = ($roundedValue - $review->filledStars) == 0.5; // Tính số sao nửa
            $review->emptyStars = 5 - $review->filledStars - ($review->hasHalfStar ? 1 : 0); // Tính số sao trống
    
            return $review;
        });
    
        return $reviews;
    }
    

    public function getCertificatesTutor($id) {
        $certificates = Certificate::where('tutor_profile_id', $id)->get(); 
        return $certificates;
    }

    private function customRound($number) {
        $decimal = $number - intval($number);
        if ($decimal >= 0.8) {
            return intval($number) + 1;
        } elseif ($decimal >= 0.3) {
            return intval($number) + 0.5;
        } else {
            return intval($number);
        }
    }
    
}
