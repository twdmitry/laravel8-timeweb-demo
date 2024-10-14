@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <div class="text-center my-5">
        <h1>Добро пожаловать на наш сайт!</h1>
        <p>Мы предлагаем экологически чистые продукты и услуги для здоровья вашей семьи и нашей планеты.</p>
    </div>

    <div class="page-index container my-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">О нас</h2>
                <p>
                    ЭкоЖизнь — это сайт-визитка нашей компании, которая стремится предоставить клиентам информацию о лучших экологически чистых продуктах.
                </p>
                <p>
                    Мы верим, что забота о здоровье начинается с выбора правильных товаров, и наша цель — сделать экологически чистые продукты доступными для каждого. На нашем сайте вы найдете информацию о нашей миссии, ассортименте товаров и наших принципах устойчивого развития.
                </p>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Новости</h2>

                @foreach($news as $item)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                            
                        </div>
                    </div>
                @endforeach

                @if($news->isEmpty())
                    <p class="text-center">Нет новостей для отображения.</p>
                @endif
            </div>
        </div>
    </div>

    <h2 class="text-center">Наша Команда</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-5">
                <img src="https://picsum.photos/150/200?random=1" class="card-img-top" alt="Команда 1">
                <div class="card-body">
                    <h5 class="card-title">Иван Иванов</h5>
                    <p class="card-text">Генеральный директор и основатель. Имеет более 10 лет опыта в экологической сфере.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-5">
                <img src="https://picsum.photos/150/200?random=2" class="card-img-top" alt="Команда 2">
                <div class="card-body">
                    <h5 class="card-title">Анна Петрова</h5>
                    <p class="card-text">Менеджер по продажам. Обладает выдающимися навыками общения и продаж.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://picsum.photos/150/200?random=3" class="card-img-top" alt="Команда 3">
                <div class="card-body">
                    <h5 class="card-title">Сергей Сергеев</h5>
                    <p class="card-text">Специалист по экологическим продуктам. Стремится к внедрению новых идей в бизнес.</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .page-index .card-body {
            background-color: #f8f9fa;
        }
    </style>
@endsection