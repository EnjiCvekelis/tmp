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
                <a href="/services/landscape"> Ландшафтный дизайн</a>
            </div>
            <div class="general__about">
                <div class="general__about-title">{{$data->first_headline}}</div>
                <div class="general__about-content">
                    <div class="image">
                        <img src="{{assetImage($data->first_image)}}" alt="landscape">
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
                            <svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 16.4286L6.07143 21.5M8.85714 24L13.5 29L39.5 1" stroke="#A2A2A2"
                                      stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text">Эскизный проект, представляющий из себя разработку общей концепции земельного
                        участка с фотопримерами.
                    </div>
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
                    <div class="text">Проект ландшафтного дизайна, который, в свою очередь, включает в себя полный
                        комплект проектной документации,
                        необходимый для реализации проекта загородного участка.
                    </div>
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
                    <div class="text">Дендроплан - это подробный чертеж земельного участка с указанием мест размещения
                        зеленых насаждений и цветников с
                        ассортиментными ведомостями.
                    </div>
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
                    <div class="text">Проекты ливневой и дренажной систем, каждый из которых содержит план-схему
                        организации отвода поверхностного стока.
                    </div>
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
                    <div class="text">Проекты прудов и водоемов – подразумевают разработку плана общей концепции
                        соответствующего типа водоемов с учетом
                        особенностей земельного участка, находящихся на нем построек, а также окружающей местности, с
                        подбором материалов и
                        проведением технических разрезов.
                    </div>
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
                    <div class="text">Проект освещения представляет из себя план-схему расстановки уличных светильников
                        и прочих элементов освещения по
                        линиям и трассировку кабелей.
                    </div>
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
                    <div class="text">Проект автоматического / полуавтоматического полива включает в себя планы и схемы
                        по организации полива газонов, живых
                        насаждений, а также по равномерному распределению влаги на участке. Подготовка проекта полива
                        осуществляется на основе
                        дендроплана (см. выше).
                    </div>
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
                    <div class="text">Визуализация отдельных зон – это прорисовка перспективы отдельных видовых точек
                        земельного участка по выбору Заказчика
                        в ручной графике или в формате 3D.
                    </div>
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
                    <div class="text">Проект озеленения и благоустройства участка</div>
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
