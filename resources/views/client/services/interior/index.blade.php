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
    <div class="interior">
        <div class="interior__breadcrumbs">
            <a href="/">Главная /</a>
            <a href="/services"> Услуги /</a>
            <a href="/services/interior"> Интерьерная живопись</a>
        </div>
        <div class="interior__about">
            <div class="interior__about-title">Интерьерная живопись</div>
            <div class="interior__about-content">
                <div class="image"
                     style="background: url({{assetImage($data->first_image)}}) no-repeat center;background-size: cover"></div>
                <div class="description">
                    {!! $data->first_text !!}
                </div>
            </div>
        </div>
    </div>
    <div class="art">
        <div class="art__about">
            <div class="art__about-title">
                {{$data->second_headline}}
            </div>
            <div class="art__about-description">
                {!! $data->second_text !!}
            </div>
        </div>
        <div class="art__image">
            <img src="/images/services/interior/art.png" alt="art">
        </div>
    </div>
    <div class="decoration">
        <div class="decoration__image"
             style="background: url({{assetImage($data->third_image)}}) no-repeat center;background-size: cover"></div>
        <div class="decoration__content">
            <div class="decoration__content-title">
                {{$data->third_headline}}
            </div>
            <div class="decoration__content-description">
                {!! $data->third_text !!}
            </div>
        </div>
    </div>
    <div class="sign">
        <div class="sign__about">
            <div class="sign__about-title">
                {{$data->fourth_headline}}
            </div>
            <div class="sign__about-description">
                {!! $data->fourth_text !!}
            </div>
        </div>
        <div class="sign__image"
             style="background: url({{assetImage($data->fourth_image)}}) no-repeat center;background-size: cover"></div>
    </div>
    <div class="link">
        <a href="" class="link__about">
            Смотреть работы
            <svg width="33" height="4" viewBox="0 0 33 7" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M33 3.5L25.5789 5.5V3.5V1.5L33 3.5Z" fill="#746F66"/>
                <path d="M0 3.5H33M33 3.5L25.5789 5.5V1.5L33 3.5Z" stroke="#746F66"/>
            </svg>
        </a>
        <svg width="199" height="3" viewBox="0 0 199 3" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="-8.61798e-08" y1="1.5" x2="199" y2="1.49998" stroke="#746F66" stroke-width="2"/>
        </svg>
    </div>
    @include('components.contact')
@endsection
