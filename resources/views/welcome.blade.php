@extends('layouts.main')

@section('title', 'EncontraJobs')

@section('content')

<div class="Home">
    <div class="Home__container">
        <h1>Vagas de emprego</h1>
        @foreach ($jobs as $job)
            <div class="Jobs__card">
                <div class="Jobs__card-left">
                    <img src={{$job['logo']}} alt={{$job['company']}}>
                    <p>{{$job['company']}}</p>
                    <p>{{$job['work_model']}}</p>
                    <p>{{$job['workplace']}}</p>
                    <p>{{$job['workschedule']}}</p>
                    <p>{{$job['email']}}</p>
                    <p>{{$job['phone']}}</p>
                    <p>{{$job['website']}}</p>
                </div>
                <div class="Jobs__card-right"></div>
                <h2>{{$job['title']}}</h2>   
                <p>{{$job['description']}}</p>
                <p></p>
            </div>
        @endforeach
    </div>
</div>

@endsection