@extends('client._layouts.base')
@section('meta-title')
    MOSART – Блог
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
    <div class="blog">
        <div class="container">
            <div class="blog__breadcrumbs">
                <a href="/">главная </a>
                <a href="/blog">&nbsp/ блог</a>
            </div>
            <div class="blog__title">
                Последнее из нашего блога
            </div>
            <div class="blog__content">
                @foreach($posts as $post)
                <a href="/blog/{{$post->id}}" class="blog__content-item">
                    <div class="image">
                        <img src="{{assetImage($post->cover)}}" alt="blog">
                    </div>
                    <div class="blog_description">
                        <div class="title">
                         {{$post->headline}}
                        </div>
                        <div class="description">
                          {{$post->description}}
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
