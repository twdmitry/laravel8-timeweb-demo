<!-- resources/views/admin/news/create.blade.php -->

@extends('layouts.app')

@section('title', 'Создать новость')

@section('content')
<div class="container">
    <h1>Добавить новость</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.news.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Содержание</label>
            <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить новость</button>
    </form>
</div>
@endsection
