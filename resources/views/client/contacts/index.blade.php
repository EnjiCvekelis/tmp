@extends('client._layouts.base')
@section('meta-title')
    MOSART – Контакты
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
    <div class="contacts">
        <div class="contacts__image" style="background: linear-gradient(0deg, rgba(48, 48, 48, 0.2), rgba(48, 48, 48, 0.2)), url('/images/contacts/contact.png'); background-size: cover;">
            <div class="phone">
                <div class="title">телефон</div>
                <a href="" class="text">+7 (999) 929-69-82</a>
            </div>
            <div class="email">
                <div class="title">E-mail</div>
                <a href="mailto:info@mosart.design" class="text">info@mosart.design</a>
            </div>
        </div>
        <div class="contacts__form">
            <div class="contacts__form-title">
                СВЯЗАТЬСЯ С НАМИ
            </div>
            <div class="contacts__form-description">
                Готовы заказать проект?
            </div>
            <form class="contacts__form-form" id="contact-form" method="POST" action="{{route('client.request.add')}}">
                @csrf
                <div class="form-input">
                    <div class="text">Имя</div>
                    <label>
                        <input type="text" name="name" placeholder="Введите имя"/>
                    </label>
                </div>
                <div class="form-input">
                    <div class="text">телефон</div>
                    <label>
                        <input type="text" name="phone" placeholder="+ 7 ..."/>
                    </label>
                </div>
                <div class="form-input">
                    <div class="text">тема</div>
                    <label>
                        <input type="text" name="theme" placeholder="Введите желаемую услугу"/>
                    </label>
                </div>
                <div class="form-input">
                    <div class="text">e-mail</div>
                    <label>
                        <input type="text" name="email" placeholder="example@gmail.com"/>
                    </label>
                </div>
                <div class="form-textarea">
                    <div class="text">сообщение</div>
                    <label>
                        <textarea type="text" name="message" placeholder="Текст сообщения"></textarea>
                    </label>
                </div>
                <div class="checkbox-wrap">
                    <label class="form-checkbox">
                        <input type="checkbox" id="checkbox-main" name="terms" value="1">
                        <span class="checkmark main-checkmark"></span>
                        Подтверждаю, что я ознакомлен и согласен с условиями Политики Конфиденциальности
                    </label>
                </div>
                <button type="submit" class="btn-submit btn-contact">
                    Отправить заявку
                    <svg width="35" height="7" viewBox="0 0 35 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33 3.5L25.5789 5.5V3.5V1.5L33 3.5Z" fill="#746F66"/>
                        <path d="M0 3.5H33M33 3.5L25.5789 5.5V1.5L33 3.5Z" stroke="#746F66"/>
                    </svg>
                </button>
                <div class="success-message">
                    <img class="close" src="/images/contacts/success.png" alt="">
                    <span>Ваша заявка была успешно отправлена. Мы свяжемся с вами в ближайшее время.</span>
                </div>
                <div class="error-message">
                    <img class="close" src="/images/contacts/error.png" alt="">
                    <span>Произошла ошибка. Попробуйте отправить заявку ещё раз.</span>
                </div>
            </form>
        </div>
    </div>
@endsection
