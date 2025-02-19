<?php

namespace App\Service\Client;

use App\Models\User;
use App\Models\TutorProfile;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;

class TutorRegisterService
{
    public function getUser()
    {
        return User::find(1); // Lấy người dùng mẫu UserId = 1 để test do chưa có chức năng đăng nhập
    }

    public function getProvinces()
    {
        return \Kjmtrue\VietnamZone\Models\Province::all();
    }

    public function getDistricts($province_id)
    {
        return \Kjmtrue\VietnamZone\Models\District::where('province_id', $province_id)->get();
    }

    public function register(array $data, $userId)
    {
        // Validate dữ liệu
        $validatedData = validator($data, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'profile_image' => 'required',
            'gender' => 'required',
            'birth_year' => 'required',
            'type' => 'required',
            'specialties' => 'required',
            'live-area' => 'required',
            'teach-area' => 'required',
            'min_hourly_rate' => 'required',
            'max_hourly_rate' => 'required',
            'front_of_id' => 'required',
            'back_of_id' => 'required',
            'certificates' => 'required',
            'experience_years' => 'required',
            'bio' => 'required',
        ])->validate();

        // Upload ảnh đại diện
        $profileImage = time() . '_' . $data['profile_image']->getClientOriginalName();
        $data['profile_image']->move(public_path('assets_client/img/profile_image'), $profileImage);

        // Upload ảnh chứng chỉ
        $certificateImage = time() . '_' . $data['certificates']->getClientOriginalName();
        $data['certificates']->move(public_path('assets_client/img/certificates_image'), $certificateImage);

        // Upload ảnh mặt trước CCCD
        $frontOfIdImage = time() . '_' . $data['front_of_id']->getClientOriginalName();
        $data['front_of_id']->move(public_path('assets_client/img/id_card_image'), $frontOfIdImage);

        // Upload ảnh mặt sau CCCD
        $backOfIdImage = time() . '_' . $data['back_of_id']->getClientOriginalName();
        $data['back_of_id']->move(public_path('assets_client/img/id_card_image'), $backOfIdImage);

        // Update User
        User::where('id', $userId)->update([
            'user_type' => 'tutor',
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
        ]);

        // Tạo hồ sơ gia sư
        $tutorProfile = TutorProfile::create([
            'user_id' => $userId,
            'type' => $validatedData['type'],
            'bio' => $validatedData['bio'],
            'experience_years' => $validatedData['experience_years'],
            'specialties' => $validatedData['specialties'],
            'certificates' => $certificateImage,
            'average_rating' => 0,
            'total_hours_taught' => 0,
            'min_hourly_rate' => $validatedData['min_hourly_rate'],
            'max_hourly_rate' => $validatedData['max_hourly_rate'],
            'profile_image' => $profileImage,
            'front_of_id' => $frontOfIdImage,
            'back_of_id' => $backOfIdImage,
            'sex' => $validatedData['gender'],
            'birth_year' => $validatedData['birth_year'],
            'area' => $validatedData['live-area'],
            'status' => 0,
        ]);

        return $tutorProfile;
    }
}
