@extends('layouts.main')

@section('title', 'EncontraJobs')

@section('content')

<div class="Home">
    <div class="Home__container">
        <div class="Hero__container">
            <div class="Hero__input">
                <input type="text" name="search" id="search" placeholder="procure a sua vaga de sonhos...">
                <button>Procurar</button>
                
            </div>
        </div>
        <h1>Vagas de emprego</h1>
        <div class="Jobs__container">
        @foreach ($jobs as $job)
            <div class="Jobs__card">
                <div class="Jobs__card-left">
                    <img src={{$job['logo']}} alt={{$job['company']}}>
                    <p>Nome da empresa: <span>{{$job['company']}}</span></p>
                    <p>Modelo de trabalho: <span>{{$job['work_model']}}</span></p>
                    <p>Local de trabalho: <span>{{$job['workplace']}}</span></p>
                    {{-- <p>Horário: <span>{{$job['workschedule']}}</span></p>
                    <p>Email da empresa: <span>{{$job['email']}}</span></p>
                    <p>Numero da empresa: <span>{{$job['phone']}}</span></p>
                    <p>Website da empresa: <span>{{$job['website']}}</span></p> --}}
                </div>
                <div class="Jobs__card-right">
                <h2>{{$job['title']}}</h2>   
                <p>{{$job['description']}}</p>
                <button
                type="button"
                >Saber Mais</button>
            </div>
            </div>
        @endforeach
    </div>
    </div>
</div>

@endsection