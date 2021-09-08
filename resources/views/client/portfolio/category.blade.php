@extends('client._layouts.base')
@section('meta-title')
    MOSART – Портфолио "{{$active->name}}"
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
    <div class="container">
        <div class="portfolios">
            <div class="portfolios__breadcrumbs">
                <a href="/">Главная </a>
                <a href="/portfolio">/ Портфолио</a>
                <a href="/portfolio/{{$active->search_key}}">/ {{$active->name}}</a>
            </div>
            <div class="portfolios__menu">
                <div class="portfolios__menu-title">
                    Реализованные проекты
                </div>
                <div class="portfolios__menu-navbar">
                    @foreach($project_categories as $category)
                        <div class="item">
                            <a @if($active->search_key == $category->search_key) class="active" @endif href="/portfolio/{{strtolower(convertRus($category->name))}}">{{$category->name}}</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="portfolios__content">
                @foreach($items as $project)
                    @if ($loop->even)
                        <a data-aos="fade-up"  data-aos-duration="700" data-aos-easing="ease-in-out" href="/portfolio/{{$project->category->search_key}}/{{$project->id}}" class="portfolios__content-item" style="background: url({{assetImage($project->cover)}}) center no-repeat;background-size: cover">
                            <div class="description">
                                <div class="text">{{$project->headline}}</div>
                                <div class="line">
                                    <svg width="705" height="2" viewBox="0 0 705 2" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <line y1="1" x2="705" y2="1" stroke="white" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    @elseif ($loop->odd)
                        <a data-aos="fade-up"  data-aos-duration="500" data-aos-easing="ease-in-out" href="/portfolio/{{$project->category->search_key}}/{{$project->id}}" class="portfolios__content-item" style="background: url({{assetImage($project->cover)}}) center no-repeat;background-size: cover">
                            <div class="description">
                                <div class="text">{{$project->headline}}</div>
                                <div class="line">
                                    <svg width="705" height="2" viewBox="0 0 705 2" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <line y1="1" x2="705" y2="1" stroke="white" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
