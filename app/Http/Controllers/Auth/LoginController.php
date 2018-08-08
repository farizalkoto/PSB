<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use App\Http\Requests\Login;
use App\Http\Models\User;

use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function login(Login $request) {
        if (!Auth::check()) {
            $post = $request->all();

            $dataLogin = [
                'user_name' => $post['username'],
                'password'  => $post['password'],
            ];

            if (Auth::attempt($dataLogin)) {
                if (Auth::user()->user_verified == '0') {
                    Auth::logout();
                    return back()->withErrors(['Status user tidak aktif, silahkan hubungi admin'])->withInput();
                }
                session([
                    'type'  => Auth::user()->user_type
                ]);

                if (Auth::user()->user_type == 'student') {
                    return redirect('siswa');
                }

                return redirect('home');
            } else {
                Auth::logout();
                return back()->withErrors(['Username atau password salah'])->withInput();
            }
        } else {
            return redirect('home');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/frontend');
    }
}
