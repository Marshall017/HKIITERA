<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            // Google user object dari google
            $userFromGoogle = Socialite::driver('google')->user();

            // Ambil user dari database berdasarkan google user id
            $userFromDatabase = User::where('google_id', $userFromGoogle->getId())->first();

            // Jika tidak ada user, maka buat user baru
            if (!$userFromDatabase) {
                $newUser = User::create([
                    'google_id' => $userFromGoogle->getId(),
                    'name' => $userFromGoogle->getName(),
                    'email' => $userFromGoogle->getEmail(),
                    'password' => bcrypt(Str::random(16)),

                ]);

                // Login user yang baru dibuat
                auth()->login($newUser);
                session()->regenerate();

                return redirect('/home');
            }

            // Jika ada user, langsung login saja
            auth()->login($userFromDatabase);
            session()->regenerate();

            return redirect('/home');
        } catch (\Exception $e) {
            // Tangani exception jika terjadi kesalahan
            return redirect('/login')->with('error', 'Terjadi kesalahan saat mengautentikasi menggunakan Google.');
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
