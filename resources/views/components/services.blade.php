<div class="directions">
    <div class="container">
        <div class="directions__title">
            @if(Request::path() === 'services')
                <a href="/">Главная </a>
                <a href="/services">/ Услуги </a>
            @else
                {{$data->services_headline}}
            @endif
        </div>
        <div class="directions__header">
            <div class="directions__header-title">
                @if(Request::path() === 'services')
                    Направления нашей работы
                @else
                    {{$data->services_subheadline}}
                @endif
            </div>
            <div class="directions__header-text">
                @if(Request::path() === 'services')
                    В составе опытных и талантливых дизайнеров, визуализаторов, архитекторов, инженеров и координаторов проектов, наше Арт-бюро
                    предоставляет клиентам комплексный сервис, который позволяет реализовывать их самые амбициозные цели и пожелания.
                @else
                    {{$data->services_text}}
                @endif
            </div>
        </div>
        <div class="directions__grid">
            <div class="directions__grid-item">
                <a href="/services/interior">
                    <div class="title">
                        <img src="/images/directions/interior.svg" alt="">
                        <div class="title-text">
                            Интерьерная живопись
                        </div>
                    </div>
                    <div class="text">
                        Силами художников Арт-бюро будут написаны в интересах заказчиков картины любой стилистики для
                        декорирования интерьеров жилых или рабочих помещений
                    </div>
                </a>
            </div>
            <div class="directions__grid-item">
                <a href="/services/design">
                    <div class="title">
                        <img src="/images/directions/interior-design.svg" alt="">
                        <div class="title-text">
                            Дизайн интерьеров
                        </div>
                    </div>
                    <div class="text">
                        Арт-бюро разрабатывает индивидуальные проекты оформления интерьеров различного назначения,
                        стилистики и степени сложности в целях создания гармоничного пространства
                    </div>
                </a>
            </div>
            <div class="directions__grid-item">
                <a href="/services/oversight">
                    <div class="title">
                        <img src="/images/directions/supervision.svg" alt="">
                        <div class="title-text">
                            Авторский надзор
                        </div>
                    </div>
                    <div class="text">
                        В рамках реализации авторского надзора Арт-бюро обеспечит контроль архитектором, на каждом этапе
                        ремонта, за соответствием с утвержденным проектом ремонтно-строительных работ
                    </div>
                </a>
            </div>
            <div class="directions__grid-item">
                <a href="/services/package">
                    <div class="title">
                        <img src="/images/directions/equipment.svg" alt="">
                        <div class="title-text">
                            Комплектация
                        </div>
                    </div>
                    <div class="text">
                        Арт-бюро осуществляет компоновку, комплектацию пространства предметами мебели, подбор отделочных
                        материалов, предметов интерьера для реализуемого проекта
                    </div>
                </a>
            </div>
            <div class="directions__grid-item">
                <a href="/services/decor">
                    <div class="title">
                        <img src="/images/directions/decor.svg" alt="">
                        <div class="title-text">
                            Декор и стиль
                        </div>
                    </div>
                    <div class="text">
                        Услуга декорирования интерьера обеспечит придание пространству индивидуальности с помощью
                        окружающей обстановки: аксессуаров, домашнего текстиля, фурнитуры
                    </div>
                </a>
            </div>
            <div class="directions__grid-item">
                <a href="/services/landscape">
                    <div class="title">
                        <img src="/images/directions/design.svg" alt="">
                        <div class="title-text">
                            Ландшафтный дизайн
                        </div>
                    </div>
                    <div class="text">
                        Арт-бюро предлагает услуги по проектированию и дизайну ландшафта различного уровня сложности,
                        стилистической направленности и целевого предназначения
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
