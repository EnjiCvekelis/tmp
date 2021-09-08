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
    <div class="general">
        <div class="container">
            <div class="general__breadcrumbs">
                <a href="/">Главная /</a>
                <a href="/services"> Услуги /</a>
                <a href="/services/package"> Комплектация</a>
            </div>
            <div class="general__about">
                <div class="general__about-title">{{$data->first_headline}}</div>
                <div class="general__about-content">
                    <div class="image">
                        <img src="{{assetImage($data->first_image)}}" alt="package">
                    </div>
                    <div class="description">
                       {!! $data->first_text !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="general__unique">
            <div class="general__unique-description">
                <div class="title">{{$data->second_headline}}</div>
                <div class="about">
                    {!! $data->second_text !!}
                </div>
            </div>
            <div class="general__unique-image" style="background: url({{assetImage($data->second_image)}}) no-repeat center;background-size: cover;">
            </div>
        </div>
        <div class="container">
            <div class="general__header">
                <div class="general__header-title">
                    {{$data->third_headline}}
                </div>
                <div class="general__header-subtitle">
                    {{$data->third_subheadline}}
                </div>
            </div>
            <div class="general__steps">
                <div class="general__steps-item">
                    <div class="step">
                        <div class="second">
                            <svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 16.4286L6.07143 21.5M8.85714 24L13.5 29L39.5 1" stroke="#A2A2A2"
                                      stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text">Посещаем объект минимум раз в неделю, проводим совещания со строителями, смежными специалистами и координируем ход выполнения работ</div>
                </div>
                <div class="general__steps-item">
                    <div class="step">
                        <div class="second">
                            <svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 16.4286L6.07143 21.5M8.85714 24L13.5 29L39.5 1" stroke="#A2A2A2"
                                      stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text">При возникновении вопросов, требующих незамедлительного решения, в кратчайшие сроки посещаем объект или решаем их дистанционно</div>
                </div>
                <div class="general__steps-item">
                    <div class="step">
                        <div class="second">
                            <svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 16.4286L6.07143 21.5M8.85714 24L13.5 29L39.5 1" stroke="#A2A2A2"
                                      stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text">При необходимости корректируем чертежи и готовим дополнительные</div>
                </div>
                <div class="general__steps-item">
                    <div class="step">
                        <div class="second">
                            <svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 16.4286L6.07143 21.5M8.85714 24L13.5 29L39.5 1" stroke="#A2A2A2"
                                      stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text">Выбираем финишные отделочные материалы и предметы декора, которые не было возможности утвердить в процессе проектирования</div>
                </div>
                <div class="general__steps-item">
                    <div class="step">
                        <div class="second">
                            <svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 16.4286L6.07143 21.5M8.85714 24L13.5 29L39.5 1" stroke="#A2A2A2"
                                      stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text">Консультируем заказчика по всем вопросам, связанным с реализацией проекта</div>
                </div>
            </div>
            <div class="general__link">
                <div class="general__link-about">
                    Смотреть работы
                    <svg width="33" height="4" viewBox="0 0 33 7" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M33 3.5L25.5789 5.5V3.5V1.5L33 3.5Z" fill="#746F66"/>
                        <path d="M0 3.5H33M33 3.5L25.5789 5.5V1.5L33 3.5Z" stroke="#746F66"/>
                    </svg>
                </div>
                <svg width="199" height="3" viewBox="0 0 199 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="-8.61798e-08" y1="1.5" x2="199" y2="1.49998" stroke="#746F66" stroke-width="2"/>
                </svg>
            </div>
        </div>
    </div>
    @include('components.contact')
@endsection
