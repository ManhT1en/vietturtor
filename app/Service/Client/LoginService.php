<?php
namespace App\Service\Client;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginService {
    public function index() {
        return view('client.login');
    }

    public function login(Request $request) {
        $email = $request->input("email");
        $password = $request->input("password");

        $account = User::where("email", $email)->first();

        if (!$account) {
            return redirect('/login')->with('error', 'Không tìm thấy tài khoản');
        }
        if (!Hash::check($password, $account->password)) {
            return redirect('/login')->with('error', 'Thông tin đăng nhập không chính xác');
        }

        Auth::login($account);

        /** @var \App\Models\User $user **/
        $user = Auth::user();

        // Điều hướng theo loại người dùng
        if ($user->user_type == 'parent' || $user->user_type == 'tutor') {
            return redirect()->route('home.index');
        } elseif ($user->user_type == 'admin') {
            return redirect()->route('admin.index');
        } else {
            return redirect('/login')->with('error', 'Loại tài khoản không được hỗ trợ');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home.index');
    }
}
