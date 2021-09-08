@extends('client._layouts.base')
@section('meta-title')
    {{$project->meta_title}}
@endsection

@section('meta-description')
    {{$project->meta_description}}
@endsection

@section('meta-keywords')
    {{$project->meta_keywords}}
@endsection

@section('js')
@endsection

@section('css')
@endsection


@section('content')
    <div class="template">
        <div class="template__breadcrumbs">
            <a href="/">Главная </a>
            <a href="/portfolio">/ Портфолио </a>
            <a href="/portfolio/{{$project->category->search_key}}">/{{$project->category->name}}</a>
            <a href="/#">/ {{$project->headline}}</a>
        </div>
        <div class="template__title">
            {{$project->headline}}
        </div>
        <div class="template__content">
            <div class="template__content-about">
                <div class="title">описание проекта</div>
                <div class="text">
                    {{$project->description}}
                </div>
            </div>
            <div class="template__content-gallery">
                <div class="template__content-gallery__img"
                     style="background: url({{assetImage($project->cover)}}) center no-repeat;background-size: cover"></div>
                @foreach($project->images as $img)
                    <div class="template__content-gallery__img"
                         style="background: url('/images/{{$img->image}}') center no-repeat;background-size: cover"></div>
                @endforeach
            </div>
            <div class="template__content-portfolio">
                <div class="title">описание проекта</div>
                <div class="text">
                    {{$project->description}}
                </div>
                <div class="template__content-gallery__thumbs">
                    <div class="template__content-gallery__thumbs-img">
                        <img src="{{assetImage($project->cover)}}" alt="">
                    </div>
                    @foreach($project->images as $img)
                        <div class="template__content-gallery__thumbs-img">
                            <img src="/images/{{$img->image}}" alt="">
                        </div>
                    @endforeach
                </div>
                <div class="arrow-prev">
                    <img src="/images/arrow-prev.svg" alt="">
                </div>
                <div class="arrow-next">
                    <img src="/images/arrow-next-dark.svg" alt="">
                </div>
                <div class="slide-count-wrap">
                    <span class="current"></span> /
                    <span class="total"></span>
                    ФОТО
                </div>
            </div>
        </div>
        <div class="template__about">
            {!! $project->content !!}
        </div>
        <div class="template__nav">
            <a @if(isset($previous)) href="/portfolio/{{$previous->category->search_key}}/{{$previous->id}}" @endif class="template__nav-left">
                <svg width="48" height="61" viewBox="0 0 48 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M48 30.5H0.999998M0.999998 30.5L30.375 1M0.999998 30.5L30.375 60" stroke="#C0C0C0"/>
                </svg>
                <div class="previous">предыдущий проект</div>
            </a>
            <a @if(isset($next)) href="/portfolio/{{$next->category->search_key}}/{{$next->id}}" @endif class="template__nav-right">
                <div class="next">следующий проект</div>
                <svg width="48" height="61" viewBox="0 0 48 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 30.5H47M47 30.5L17.625 1M47 30.5L17.625 60" stroke="#423E37"/>
                </svg>
            </a>
        </div>
    </div>
@endsection
