@extends('client._layouts.base')

@section('js')
@endsection

@section('css')
@endsection


@section('content')
    <div class="header-gradient"></div>

    <section class="subcategory">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb__item">Главная</li>
                <li class="breadcrumb__item breadcrumb__item_active">Военные объекты</li>
            </ul>

            <div class="subcategory__content">
                <div class="subcategory__title">{{$subcategory->headline}}</div>
                <div id="subcategory-slider" class="owl-carousel owl-theme subcategory__slider">
                    @foreach($subcategory->subcategoryImages as $item)
                        <img class="subcategory__picture" src="{{assetImage($item->image)}}" alt="">
                    @endforeach
                </div>
                {!! $subcategory->content !!}
            </div>
        </div>
    </section>

    <section class="information">
        <div class="information__content container">
            @foreach($subcategory->subсategoryArticles as $article)
                <a href="/category/subcategory/{{$subcategory->seo_url}}/{{$article->seo_url}}"
                   class="information__item">
                    <div class="information__item_info">
                        <div class="information__item_title">{{$article->headline}}</div>
                        <div class="information__item_subtitle">
                            <p>{{$article->description}}</p>
                        </div>
                    </div>
                    <div class="information__item_picture">
                        <img src="{{assetImage($article->cover)}}" alt="">
                    </div>
                </a>
            @endforeach
            @foreach($subcategory->children as $subcategory)
                <a href="/category/subcategory/{{$subcategory->seo_url}}" class="information__item">
                    <div class="information__item_info">
                        <div class="information__item_title">{{$subcategory->headline}}</div>
                        <div class="information__item_subtitle">
                           <p>{{$subcategory->description}}</p>
                        </div>
                        <div class="article__group">Список входящих групп и статей:</div>
                        <select class="article__field">
                            <option class="article__option" value="Корпус 241">Корпус 241</option>
                            <option class="article__option" value="Корпус 2412">Корпус 2412</option>
                        </select>
                    </div>
                    <div class="information__item_picture">
                        <img src="{{assetImage($subcategory->cover)}}" alt="">
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection