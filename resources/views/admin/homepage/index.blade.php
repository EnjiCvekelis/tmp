@extends('admin.layouts.base')

@section('content')
    <h1>Главная страница</h1>
    <nav aria-label="breadcrumb" class="w-100">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin.homepage.index')}}">Редактирование главной
                    страницы</a></li>
        </ol>
    </nav>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <b>Ошибки:</b>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @elseif(!empty(request()->get('success')))
        <div class="alert alert-success">
            Данные успешно сохранены!
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <span class="bi bi-list-ul"></span>
                    Главная страница
                </div>
                <div class="card-body">
                    <form action="{{route('admin.homepage.update')}}" method="POST" class="form py-4">
                        @csrf
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Контент страницы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="meta-tab" data-toggle="tab" href="#meta" role="tab" aria-controls="meta" aria-selected="false">Meta</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <input type="hidden" class="form-control" name="id"
                                       value="{{ isset($data) ? $data->id : '' }}">
                                <p class="h2 mt-5">Главный блок</p>
                                <div class="form-group row border-bottom py-3">
                                    <label for="main_headline" class="col-sm-2 col-form-label">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="main_headline" id="main_headline"
                                               value="{{ isset($data) ? $data->main_headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="main_subheadline" class="col-sm-2 col-form-label">
                                        Подзаголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="main_subheadline" id="main_subheadline"
                                               value="{{ isset($data) ? $data->main_subheadline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="main_link" class="col-sm-2 col-form-label">
                                        Текст ссылки
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="main_link" id="main_link"
                                               value="{{ isset($data) ? $data->main_link : '' }}">
                                    </div>
                                </div>
                                <p class="h2">Блок "О Бюро"</p>
                                <div class="form-group row border-bottom py-3">
                                    <label for="office_headline" class="col-sm-2 col-form-label ">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="office_headline"
                                               id="office_headline"
                                               value="{{ isset($data) ? $data->office_headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="office_subheadline" class="col-sm-2 col-form-label ">
                                        Подзаголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="office_subheadline"
                                               id="office_subheadline"
                                               value="{{ isset($data) ? $data->office_subheadline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="office_text" class="col-sm-2 col-form-label ">
                                        Описание
                                    </label>
                                    <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="office_text" id="office_text"
                                          rows="5">{{ isset($data) ? $data->office_text : '' }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="office_link" class="col-sm-2 col-form-label ">
                                        Текст ссылки
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="office_link" id="office_link"
                                               value="{{ isset($data) ? $data->office_link : '' }}">
                                    </div>
                                </div>
                                <p class="h2">Блок "Услуги"</p>
                                <div class="form-group row border-bottom py-3">
                                    <label for="services_headline" class="col-sm-2 col-form-label ">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="services_headline"
                                               id="services_headline"
                                               value="{{ isset($data) ? $data->services_headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="services_subheadline" class="col-sm-2 col-form-label ">
                                        Подзаголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="services_subheadline"
                                               id="services_subheadline"
                                               value="{{ isset($data) ? $data->services_subheadline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="services_text" class="col-sm-2 col-form-label ">
                                        Описание
                                    </label>
                                    <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="services_text" id="services_text"
                                          rows="5">{{ isset($data) ? $data->services_text : '' }}</textarea>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between bd-highlight">
                                    <p class="h2">Блок "Ценности"</p>
                                    <a href="{{route('admin.values.index')}}" class="btn btn-outline-secondary">Редактировать
                                        список ценностей</a>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="values_headline" class="col-sm-2 col-form-label ">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="values_headline"
                                               id="values_headline"
                                               value="{{ isset($data) ? $data->values_headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="values_subheadline" class="col-sm-2 col-form-label ">
                                        Подзаголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="values_subheadline"
                                               id="values_subheadline"
                                               value="{{ isset($data) ? $data->values_subheadline : '' }}">
                                    </div>
                                </div>
                                <p class="h2">Блок "Портфолио"</p>
                                <div class="form-group row border-bottom py-3">
                                    <label for="portfolio_headline" class="col-sm-2 col-form-label ">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="portfolio_headline"
                                               id="portfolio_headline"
                                               value="{{ isset($data) ? $data->portfolio_headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="portfolio_subheadline" class="col-sm-2 col-form-label ">
                                        Подзаголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="portfolio_subheadline"
                                               id="portfolio_subheadline"
                                               value="{{ isset($data) ? $data->portfolio_subheadline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="portfolio_link" class="col-sm-2 col-form-label ">
                                        Текст ссылки
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="portfolio_link"
                                               id="portfolio_link"
                                               value="{{ isset($data) ? $data->portfolio_link : '' }}">
                                    </div>
                                </div>
                                <p class="h2">Блок "Блог"</p>
                                <div class="form-group row border-bottom py-3">
                                    <label for="blog_headline" class="col-sm-2 col-form-label ">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="blog_headline" id="blog_headline"
                                               value="{{ isset($data) ? $data->blog_headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="blog_subheadline" class="col-sm-2 col-form-label ">
                                        Подзаголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="blog_subheadline"
                                               id="blog_subheadline"
                                               value="{{ isset($data) ? $data->blog_subheadline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="blog_link" class="col-sm-2 col-form-label ">
                                        Текст ссылки
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="blog_link" id="blog_link"
                                               value="{{ isset($data) ? $data->blog_link : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="meta" role="tabpanel" aria-labelledby="meta-tab">
                                <div class="form-group row border-bottom py-3">
                                    <label for="meta-title" class="col-sm-2 col-form-label">
                                        Meta-title
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_title" id="meta-title"
                                               value="{{ isset($data) ? $data->meta_title : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="meta-description" class="col-sm-2 col-form-label">
                                        Meta-description
                                    </label>
                                    <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="meta_description" id="meta-description"
                                          rows="5">{{ isset($data) ? $data->meta_description : '' }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="meta-keywords" class="col-sm-2 col-form-label">
                                        Meta-keywords
                                    </label>
                                    <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="meta_keywords" id="meta-keywords"
                                          rows="5">{{ isset($data) ? $data->meta_keywords : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
