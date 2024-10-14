<?php
// app/Http/Controllers/Admin/NewsController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        News::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.news.create')->with('success', 'Новость успешно добавлена!');
    }
}
