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
    <div class="main" id="mosart_images">
        <div class="artburo">
            <div class="main-text">
                {{$data->main_headline}}
            </div>
            <div class="not-the-main">
                {{$data->main_subheadline}}
            </div>
        </div>
        <div class="block-button">
            <a href="{{route('client.about')}}" class="about">
                <div class="about-about">
                    {{$data->main_link}}
                </div>
                <svg width="35" height="7" viewBox="0 0 35 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33 3.5L25.5789 5.5V3.5V1.5L33 3.5Z" fill="white"/>
                    <path d="M0 3.5H33M33 3.5L25.5789 5.5V1.5L33 3.5Z" stroke="white"/>
                </svg>
            </a>
            <svg width="223" height="3" viewBox="0 0 223 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="-8.61798e-08" y1="1.5" x2="223" y2="1.49998" stroke="white" stroke-width="2"/>
            </svg>
        </div>
    </div>
    <div class="buro">
        <div class="container">
            <div class="title">
                {{$data->office_subheadline}}
            </div>
            <div class="buro_content">
                <div class="about">
                    <div class="header-text">
                        {{$data->office_headline}}
                    </div>
                    <div class="text">
                        {!! $data->office_text !!}
                    </div>
                    <div class="buttons">
                        <a href="{{route('client.about')}}" class="button-about">
                            {{$data->office_link}}
                            <svg width="35" height="4" viewBox="0 0 35 7" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M33 3.5L25.5789 5.5V3.5V1.5L33 3.5Z" fill="#746F66"/>
                                <path d="M0 3.5H33M33 3.5L25.5789 5.5V1.5L33 3.5Z" stroke="#746F66"/>
                            </svg>
                        </a>
                        <svg width="114" height="3" viewBox="0 0 114 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="-8.61798e-08" y1="1.5" x2="114" y2="1.49999" stroke="#746F66" stroke-width="2"/>
                        </svg>
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
    <div class="directions">
        <div class="container">
            <div class="directions__title">
                {{$data->services_headline}}
            </div>
            <div class="directions__header">
                <div class="directions__header-title">
                    {{$data->services_subheadline}}
                </div>
                <div class="directions__header-text">
                    {{$data->services_text}}
                </div>
            </div>
            <div class="directions__grid">
                <div class="directions__grid-item">
                    <a href="/services/interior">
                        <div class="title">
                            <img src="/images/directions/interior.svg" alt="">
                            <div class="title-text">
                                {{$interior->headline}}
                            </div>
                        </div>
                        <div class="text">
                            {{$interior->description}}
                        </div>
                    </a>
                </div>
                <div class="directions__grid-item">
                    <a href="/services/design">
                        <div class="title">
                            <img src="/images/directions/interior-design.svg" alt="">
                            <div class="title-text">
                                {{$design->headline}}
                            </div>
                        </div>
                        <div class="text">
                            {{$design->description}}
                        </div>
                    </a>
                </div>
                <div class="directions__grid-item">
                    <a href="/services/oversight">
                        <div class="title">
                            <img src="/images/directions/supervision.svg" alt="">
                            <div class="title-text">
                                {{$oversight->headline}}
                            </div>
                        </div>
                        <div class="text">
                            {{$oversight->description}}
                        </div>
                    </a>
                </div>
                <div class="directions__grid-item">
                    <a href="/services/package">
                        <div class="title">
                            <img src="/images/directions/equipment.svg" alt="">
                            <div class="title-text">
                                {{$package->headline}}
                            </div>
                        </div>
                        <div class="text">
                            {{$package->description}}
                        </div>
                    </a>
                </div>
                <div class="directions__grid-item">
                    <a href="/services/decor">
                        <div class="title">
                            <img src="/images/directions/decor.svg" alt="">
                            <div class="title-text">
                                {{$decor->headline}}
                            </div>
                        </div>
                        <div class="text">
                            {{$decor->description}}
                        </div>
                    </a>
                </div>
                <div class="directions__grid-item">
                    <a href="/services/landscape">
                        <div class="title">
                            <img src="/images/directions/design.svg" alt="">
                            <div class="title-text">
                                {{$landscape->headline}}
                            </div>
                        </div>
                        <div class="text">
                            {{$landscape->description}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="worth">
        <div class="container">
            <div class="worth__why">
                {{$data->values_subheadline}}
            </div>
            <div class="worth__title">
                {{$data->values_headline}}
            </div>
            <div class="worth__content-worth">
                @foreach($values as $value)
                    <div class="worth__content-worth-item">
                        <div class="logo">
                            <div class="logo-circle">
                                <img src="{{$value->icon}}" alt="">
                            </div>
                        </div>
                        <div class="title">{{$value->headline}}</div>
                        <div class="text">
                            {{$value->description}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="template">
        <div class="template__breadcrumbs">
            {{$data->portfolio_subheadline}}
        </div>
        <div class="template__title">
            {{$data->portfolio_headline}}
        </div>
        <div class="template__content">
            <div class="template__content-about template__content-project">
                <div class="template__content-gallery">
                    @foreach($projects as $project)
                        <div class="template__content-project">
                            <div class="title">{{$project->headline}}</div>
                            <div class="text">
                                {{$project->description}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="template__content-gallery">
                @foreach($projects as $project)
                    <a href="/portfolio/{{$project->category->search_key}}/{{$project->id}}"
                       class="template__content-gallery__img"
                       style="background: url('{{assetImage($project->cover)}}') center no-repeat;background-size: cover"></a>
                @endforeach
            </div>
            <div class="template__content-portfolio">
                <div class="template__content-gallery">
                    @foreach($projects as $project)
                        <div class="template__content-project">
                            <div class="title">{{$project->headline}}</div>
                            <div class="text">
                                {{$project->description}}
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="template__content-gallery__thumbs">
                    @foreach($projects as $project)
                        <a href="/portfolio/{{$project->category->search_key}}/{{$project->id}}"
                           class="template__content-gallery__thumbs-img">
                            <img src="{{assetImage($project->cover)}}" alt="">
                        </a>
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
                </div>
            </div>
        </div>
        <div class="template__link">
            <div class="template__link-portfolio">
                <a href="{{route('client.portfolio')}}" class="text">
                    {{$data->portfolio_link}}
                </a>
                <svg width="35" height="7" viewBox="0 0 35 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33 3.5L25.5789 5.5V3.5V1.5L33 3.5Z" fill="#746F66"/>
                    <path d="M0 3.5H33M33 3.5L25.5789 5.5V1.5L33 3.5Z" stroke="#746F66"/>
                </svg>
            </div>
            <div class="line"></div>
        </div>
    </div>
    <div class="last">
        <div class="container">
            <div class="container__title">
                {{$data->blog_subheadline}}
            </div>
            <div class="container__blogs">
                {{$data->blog_headline}}
            </div>
            <div class="container__content">
                @foreach($blogs as $blog)
                    <a href="/blog/{{$blog->id}}" class="container__content-item">
                        <div class="item-image"
                             style="background: url({{assetImage($blog->cover)}}) center no-repeat;background-size: cover">
                        </div>
                        <div class="item-title">{{$blog->headline}}</div>
                        <div class="item-text">{{$blog->description}}</div>
                    </a>
                @endforeach
            </div>
            <div class="container__link">
                <div class="container__link-blog">
                    <a href="{{route('client.blog')}}" class="text">
                        {{$data->blog_link}}
                    </a>
                    <svg width="35" height="7" viewBox="0 0 35 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33 3.5L25.5789 5.5V3.5V1.5L33 3.5Z" fill="#746F66"/>
                        <path d="M0 3.5H33M33 3.5L25.5789 5.5V1.5L33 3.5Z" stroke="#746F66"/>
                    </svg>
                </div>
                <svg width="184" height="3" viewBox="0 0 184 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="-8.61798e-08" y1="1.5" x2="184" y2="1.49998" stroke="#746F66" stroke-width="2"/>
                </svg>
            </div>
        </div>
    </div>
    @include('components.contact')
@endsection
