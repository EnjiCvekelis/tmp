@extends('client._layouts.base')

@section('meta-title')
    {{$data->meta_title}}
@endsection

@section('meta-description')
    {{$data->meta_description}}
@endsection

@section('meta-keywords')
    {{$data->meta_keywords}}
@endsection

@section('js')
@endsection

@section('css')
@endsection


@section('content')
    <div class="buro">
        <div class="container">
            <div class="title">
                <a href="/">ГЛАВНАЯ </a>
                <a href="/about">/ О БЮРО</a>
            </div>
            <div class="buro_content">
                <div class="about">
                    <div class="header-text">
                        {{$data->buro_headline}}
                    </div>
                    <div class="text">
                        {{$data->buro_text}}
                    </div>
                </div>
                <div class="images">
                    <div class="buro-one">
                        <img class="one" src="images/buro/buro_second.png" alt="buro_second">
                    </div>
                    <div class="buro-second">
                        <img class="second" src="images/buro/buro_one.png" alt="buro_one">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="approach">
        <div class="approach__title">
            {{$data->approach_headline}}
        </div>
        <div class="approach__content">
            <div class="approach__content-image"></div>
            <div class="approach__content-description">
                {{$data->approach_text}}
            </div>
        </div>
    </div>
    <div class="projects">
        <div class="projects__about">
            <div class="projects__about-title">
                {{$data->project_headline}}
            </div>
            <div class="projects__about-description">
                {{$data->project_text}}
            </div>
        </div>
        <div class="projects__image">
            <img src="/images/buro/about_projects.png" alt="about">
        </div>
    </div>
    <div class="philosophy">
        <div class="philosophy__image">
            <img src="/images/buro/image_philosophy.png" alt="philosophy">
        </div>
        <div class="philosophy__about">
            <div class="philosophy__about-title">
                {{$data->philosophy_headline}}
            </div>
            <div class="philosophy__about-description">
                {{$data->philosophy_text}}
            </div>
        </div>
    </div>
    @include('components/contact')
@endsection
