<?php

namespace App\Http\Controllers;

use App\Models\News;

class SiteController extends Controller
{
    // Метод для отображения главной страницы
    public function index()
    {
        // Получаем последние 5 новостей
        $news = News::orderBy('created_at', 'desc')->take(5)->get();

        return view('site.index', compact('news'));
    }

    // Метод для отображения страницы "О нас"
    public function about()
    {
        return view('site.about');
    }

    // Метод для отображения страницы контактов
    public function contact()
    {
        return view('site.contact');
    }
}
