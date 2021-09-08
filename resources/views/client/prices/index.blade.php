@extends('client._layouts.base')

@section('js')
@endsection

@section('css')
@endsection

@section('content')
    {{--    REMOVE ASAP tag <br>--}}
    <div class="prices">
        <div class="prices__breadcrumbs">
            <a href="/">Главная /</a>
            <a href="/prices"> Цены</a>
        </div>
        <div class="prices__title">Цены</div>
        <div class="prices__content">
            <div class="prices__content-item">
                <div class="image">
                    <img src="/images/prices/price1.png" alt="price1">
                </div>
                <div class="about">
                    <div class="title">Проектирование жилых интерьеров</div>
                    <div class="prices">До 230 кв. м — 8 000 руб. за кв. м.<br/>
                        <br>
                        От 220 до 350 кв. м – 7 000 руб. за кв. м.<br/>
                        <br>
                        Свыше 350 кв. м — 6 000 руб. за кв. м.
                    </div>
                </div>
            </div>
            <div class="prices__content-item">
                <div class="image">
                    <img src="/images/prices/price2.png" alt="price1">
                </div>
                <div class="about">
                    <div class="title">Разработка архитектурного проекта загородного дома</div>
                    <div class="prices">
                        Архитектурный проект: 3 500 руб. за кв. м.<br/>
                        <br>
                        Интерьерный проект: 5 000 — 8 000 руб. за кв. м.<br/>
                        <br>
                        Архитектура и интерьер: 6 000 — 9 000 руб. за кв. м.
                    </div>
                </div>
            </div>
            <div class="prices__content-item">
                <div class="image">
                    <img src="/images/prices/price3.png" alt="price1">
                </div>
                <div class="about">
                    <div class="title">Проектирование общественных интерьеров</div>
                    <div class="prices">
                        До 500 кв. м. – 4 000 руб. за кв. м.<br/>
                        <br>
                        От 500 кв. м. – 3 000 руб. за кв. м.
                    </div>
                </div>
            </div>
            <div class="prices__content-item">
                <div class="image">
                    <img src="/images/prices/price4.png" alt="price1">
                </div>
                <div class="about">
                    <div class="title">Авторский надзор</div>
                    <div class="prices">
                        Координация процесса строительных работ на объекте и гарантия точной реализации
                        дизайн-проекта<br/>
                        <br>
                        От 60 000 руб. в месяц
                    </div>
                </div>
            </div>
            <div class="prices__content-item">
                <div class="image">
                    <img src="/images/prices/price5.png" alt="price1">
                </div>
                <div class="about">
                    <div class="title">Планировочные решения</div>
                    <div class="prices">
                        - Обмерный план существующей планировки<br/>
                        - План демонтажа/монтажа помещения<br/>
                        - План с расстановкой мебели (3-5 вариантов на выбор)<br/>
                        - План с экспликацией помещений после перепланировки на основе выбранного варианта<br/>
                        <br>
                        От 700 руб. за кв. м.
                    </div>
                </div>
            </div>
            <div class="prices__content-item">
                <div class="image">
                    <img src="/images/prices/price6.png" alt="price1">
                </div>
                <div class="about">
                    <div class="title">Комплектация</div>
                    <div class="prices">
                        - Составление смет по чистовым материалам, оборудованию, мебели и предметам декора на основании
                        спецификаций дизайн-проекта<br/>
                        - Выезды в магазины для подбора закупаемых позиций<br/>
                        - Подбор поставщиков, проведение тендеров, предоставление коммерческих предложений для выбора,
                        работа с бюджетом<br/>
                        - Разработка и размещение заказов на изделия индивидуального изготовления<br/>
                        - Организация заказа и доставки, работа с графиком закупок<br/>
                        <br/>
                        От 60 000 руб. в месяц
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.contact')
@endsection
