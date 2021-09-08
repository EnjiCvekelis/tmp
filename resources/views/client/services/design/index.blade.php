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
                <a href="/services/design"> Дизайн интерьеров</a>
            </div>
            <div class="general__about">
                <div class="general__about-title">{{$data->first_headline}}</div>
                <div class="general__about-content">
                    <div class="image">
                        <img src="{{assetImage($data->first_image)}}" alt="interior">
                    </div>
                    <div class="description">
                       {!! $data->first_text !!}
                    </div>
                </div>
            </div>
            <div class="general__header">
                <div class="general__header-title">
                    {{$data->second_headline}}
                </div>
                <div class="general__header-subtitle">
                    {{$data->second_subheadline}}
                </div>
            </div>
            <div class="general__steps">
                <div class="general__steps-item">
                    <div class="step">
                        <div class="second">
                            01
                        </div>
                    </div>
                    <div class="text">Предварительная беседа с заказчиком, которая позволит конкретизировать все его
                        замыслы об оформлении помещения
                    </div>
                </div>
                <div class="general__steps-item">
                    <div class="step">
                        <div class="second">
                            02
                        </div>
                    </div>
                    <div class="text">Выезд на объект, замер и фото фиксация особенностей планировки пространства</div>
                </div>
                <div class="general__steps-item">
                    <div class="step">
                        <div class="second">
                            03
                        </div>
                    </div>
                    <div class="text">Подготовка технического задания по результатам обмеров помещения и согласования с
                        заказчиком различных нюансов, включая
                        предполагаемые к использованию материалы, уточняем все ваши пожелания и создаем идеальное
                        видение будущего
                        пространства, ориентируясь на ваш бюджет и предпочтения
                    </div>
                </div>
                <div class="general__steps-item">
                    <div class="step">
                        <div class="second">
                            04
                        </div>
                    </div>
                    <div class="text">Согласование планировочного решения и выбор концепции и стиля интерьера, которую
                        утверждает заказчик
                    </div>
                </div>
                <div class="general__steps-item">
                    <div class="step">
                        <div class="second">
                            05
                        </div>
                    </div>
                    <div class="text">Создание 3Д фотореалистичной визуализации интерьера, которая позволяет увидеть и
                        наглядно продемонстрировать
                        задуманное
                    </div>
                </div>
                <div class="general__steps-item">
                    <div class="step">
                        <div class="second">
                            06
                        </div>
                    </div>
                    <div class="text">Выполнение чертежей</div>
                </div>
                <div class="general__steps-item">
                    <div class="step">
                        <div class="second">
                            07
                        </div>
                    </div>
                    <div class="text">Реализация проекта</div>
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
