@extends('client._layouts.base')

@section('js')
@endsection

@section('css')
@endsection


@section('content')
    <div class="header-gradient"></div>

    <section class="article">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb__item">Главная</li>
                <li class="breadcrumb__item breadcrumb__item_active">Военные объекты</li>
            </ul>
            <div class="article__content">
                <div class="article__title">{{$article->headline}}</div>
                <div id="subcategory-slider" class="owl-carousel owl-theme article__slider">
                    <img class="article-slider" src="/images/new-subcategory__slide_img.jpg" alt="">
                    <img class="article-slider" src="/images/new-subcategory__slide_img.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    {!! $article->content !!}
    <section class="article__footer">
        <div class="container">
            <div class="article__footer_content ">
                <div class="article__footer_title">Другие объекты Питомника и Института от других авторов:</div>
                <div class="article__footer_subtitle">
                    <p>Главный лабораторный корпус НИИЭПиТа у Владимира Малдера</p>

                    <p> Он же, чуть пораньше, у AlexDoomer</p>

                    <p> Вероятно, та самая дача Остроумова, на основе которой был основан Питомник, у Владимира
                        Малдера</p>

                    <p class="article__subtitle_text"> О Питомнике и Институте на других ресурсах:</p>

                    Краткая история от АМН Республики Абхазия
                </div>
            </div>
        </div>
    </section>
@endsection