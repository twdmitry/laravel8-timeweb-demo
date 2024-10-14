<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin_login');
    }

    public function login(Request $request)
    {
        // Проверка учетных данных с использованием базы данных
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Проверяем, является ли пользователь администратором
            $user = Auth::user();
            if ($user->is_admin) {
                session(['is_admin' => true]); // Сохраняем информацию о том, что пользователь админ
                return redirect()->route('admin.news.create')->with('success', 'Вы успешно вошли в админку!');
            } else {
            Auth::logout();
            return redirect()->back()->withErrors(['email' => 'У вас нет прав администратора.']);
            }
        }

        return redirect()->back()->withErrors(['username' => 'Неверные учетные данные.']);
    }

    public function logout()
    {
        session()->forget('is_admin'); // Удаляем сессию
        return redirect('/')->with('success', 'Вы вышли из админки!');
    }
}
