@extends('client._layouts.base')

@section('js')
@endsection

@section('css')
@endsection


@section('content')
    <div class="header-gradient"></div>

    <section class="category">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb__item">Главная</li>
                <li class="breadcrumb__item breadcrumb__item_active">Военные объекты</li>
            </ul>
            <div class="object__content">
                @foreach($categories as $item)
                    @foreach($item->children as $child)
                        <a href="/objects/category/{{$item->object_id}}/{{$child->seo_url}}" class="object__item ">
                            <img src="{{assetImage($child->cover)}}" alt="" class="object__picture">
                            <div class="object__bg"></div>
                            <div class="object__info ">
                                <div class="object__title ">{{$child->name}}</div>
                                <div class="object__subtitle">
                                    {{$child->description}}
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

    <section class="information">
        <div class="container">
            <div class="information__content">
                @foreach($categories as $item)
                    @foreach($item->children as $child)
                        @foreach($child->categorySubcategory as $subcategory)
                            <a href="/category/{{$subcategory->seo_url}}" class="information__item">
                                <div class="information__item_info">
                                    <div class="information__item_title">{{$subcategory->seo_url}}</div>
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
                    @endforeach
                @endforeach
                @foreach($categories as $item)
                    @foreach($item->children as $child)
                        @foreach($child->сategoryArticles as $article)
                            <a href="/category/article/{{$article->seo_url}}" class="information__item">
                                <div class="information__item_info">
                                    <div class="information__item_title">{{$article->seo_url}}</div>
                                    <div class="information__item_subtitle">
                                        <p>{{$article->description}}</p>
                                    </div>
                                </div>
                                <div class="information__item_picture">
                                    <img src="{{assetImage($article->cover)}}" alt="">
                                </div>
                            </a>
                        @endforeach
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection