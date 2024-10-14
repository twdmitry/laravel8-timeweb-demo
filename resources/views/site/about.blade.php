@extends('layouts.app')

@section('title', 'О нас')

@section('content')
    <div class="container my-5">
        <h1 class="text-center">О компании "ЭкоЖизнь"</h1>

        <div class="row my-5">
            <div class="col-md-6">
                <div class="card" style="height: 100%;">
                    <h2>Наша Миссия</h2>
                    <p>
                        Мы стремимся сделать мир лучше, предлагая нашим клиентам экологически чистые продукты. 
                        Наша цель - способствовать здоровому образу жизни и защищать нашу планету.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="height: 100%;">
                    <h2>Наши Ценности</h2>
                    <ul>
                        <li>Экологичность</li>
                        <li>Качество</li>
                        <li>Устойчивое развитие</li>
                        <li>Социальная ответственность</li>
                    </ul>
                </div>
            </div>
        </div>

        <h2 class="text-center">Наша Команда</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-5">
                    <img src="https://picsum.photos/150/200?random=4" class="card-img-top" alt="Команда 1">
                    <div class="card-body">
                        <h5 class="card-title">Иван Иванов</h5>
                        <p class="card-text">Генеральный директор и основатель. Имеет более 10 лет опыта в экологической сфере.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-5">
                    <img src="https://picsum.photos/150/200?random=5" class="card-img-top" alt="Команда 2">
                    <div class="card-body">
                        <h5 class="card-title">Анна Петрова</h5>
                        <p class="card-text">Менеджер по продажам. Обладает выдающимися навыками общения и продаж.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://picsum.photos/150/200?random=6" class="card-img-top" alt="Команда 3">
                    <div class="card-body">
                        <h5 class="card-title">Сергей Сергеев</h5>
                        <p class="card-text">Специалист по экологическим продуктам. Стремится к внедрению новых идей в бизнес.</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center">Контакты</h2>
        <p class="text-center">Если у вас есть вопросы или предложения, свяжитесь с нами по электронной почте: <a href="mailto:info@timeweb.cloud">info@timeweb.cloud</a>.</p>
    </div>
@endsection
