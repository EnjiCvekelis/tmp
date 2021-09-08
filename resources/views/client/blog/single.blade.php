@extends('client._layouts.base')
@section('meta-title')
    {{$post->meta_title}}
@endsection

@section('meta-description')
    {{$post->meta_description}}
@endsection

@section('meta-keywords')
    {{$post->meta_keywords}}
@endsection
@section('js')
@endsection

@section('css')
@endsection


@section('content')
    <div class="top">
        <div class="top__image" style="background: url('{{assetImage($post->cover)}}') no-repeat center;background-size: cover;">

        </div>
        <div class="top__about">
            <div class="top__about-breadcrumbs">
                <a href="/">Главная</a>
                <a href="/blog"> / Блог</a>
                <a href="/blog1"> / Design Radar | Март</a>
            </div>
            <div class="top__about-title">
                {{$post->headline}}
            </div>
        </div>
    </div>

    <div class="content">
        <div class="content__info">
            <div class="content__info-item">
                <div class="title">ДАТА публикации</div>
                <div class="text"> {{date('d.m.Y', strtotime($post->created_at))}}</div>
            </div>
            <div class="content__info-item">
                <div class="title">фото</div>
                <div class="text">{{$post->author}}</div>
            </div>
            <div class="content__info-item">
                <div class="title">Источник</div>
                <a class="text" target="_blank" href="{{$post->source_link}}">{{$post->source_name}}</a>
            </div>
            <div class="content__info-item">
                <div class="title">поделиться</div>
                <div class="text">
                    <a class="social-link" href="https://www.facebook.com/sharer/sharer.php?u=http:{{ Request::url() }}">
                        <img src="/images/contacts/facebook.svg" alt="">
                    </a>
                    <a class="social-link" href="http://vk.com/share.php?url={{ Request::url() }}">
                        <img src="/images/contacts/vk.svg" alt="">
                    </a>
                    <a class="social-link" href="https://pinterest.com/pin/create/button/?url={{ Request::url() }}">
                        <img src="/images/contacts/pinterest.svg" alt="">
                    </a>
                    <a class="social-link" href="">
                        <img src="/images/contacts/hauzz.svg" alt="">
                    </a>
                    <a class="social-link" href="https://wa.me/?text={{ Request::url() }}">
                        <img src="/images/contacts/whatsapp.svg" alt="">
                    </a>
                    <a class="social-link" href="https://telegram.me/share/url?url={{ Request::url() }}">
                        <img src="/images/contacts/telegram.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
        {!! $post->content !!}
    </div>
    <div class="last-blogs">
        <div class="container">
            <div class="container__title">
                Читайте также
            </div>
            <div class="container__content">
                @foreach($posts as $post)
                    <a href="/blog/{{$post->id}}" class="container__content-item">
                        <div class="item-image"
                             style="background: url({{assetImage($post->cover)}}) center no-repeat;background-size: cover"></div>
                        <div class="item-title">{{$post->headline}}</div>
                        <div class="item-text">{{$post->description}}</div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="blogs-navigation">
        <div class="container">
            <a class="left" href="/blog/{{$previous_id}}">
                <svg width="48" height="61" viewBox="0 0 48 61" xmlns="http://www.w3.org/2000/svg">
                    <path d="M48 30.5H0.999998M0.999998 30.5L30.375 1M0.999998 30.5L30.375 60" stroke="#C0C0C0"></path>
                </svg>
                <div class="previous">предыдущий проект</div>
            </a>
            <a class="right" href="/blog/{{$next_id}}">
                <div class="next">следующий проект</div>
                <svg width="48" height="61" viewBox="0 0 48 61" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 30.5H47M47 30.5L17.625 1M47 30.5L17.625 60" stroke="#C0C0C0"></path>
                </svg>
            </a>
        </div>
    </div>
@endsection
