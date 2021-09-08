@extends('client._layouts.base')
@section('meta-title')
    MOSART – Поиск
@endsection

@section('meta-description')

@endsection

@section('meta-keywords')

@endsection
@section('js')
@endsection

@section('css')
@endsection


@section('content')
    <div class="search">
        <div class="container">
            <div class="container__title">
                поиск
            </div>
            <div class="container__blogs">
                Результаты поиска
            </div>
            <div class="container__content">
                @foreach($projects as $project)
                    <a data-aos="fade-up"  data-aos-duration="700" data-aos-easing="ease-in-out"  href="/portfolio/{{$project->category->search_key}}/{{$project->id}}" class="container__content-item">
                        <div class="item-image" style="background: url({{assetImage($project->cover)}}) no-repeat center;background-size: cover;"></div>
                        <div class="item-title">{{$project->headline}}</div>
                        <div class="item-text">{{$project->description}}</div>
                    </a>
                @endforeach
                @foreach($posts as $post)
                    <a data-aos="fade-up"  data-aos-duration="700" data-aos-easing="ease-in-out" href="/blog/{{$post->id}}"  class="container__content-item">
                        <div class="item-image" style="background: url({{assetImage($post->cover)}}) no-repeat center;background-size: cover;"></div>
                        <div class="item-title">{{$post->headline}}</div>
                        <div class="item-text">{{$post->description}}</div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @include('components.contact')
@endsection
