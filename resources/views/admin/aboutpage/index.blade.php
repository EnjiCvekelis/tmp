@extends('admin.layouts.base')

@section('content')
    <h1>Главная страница</h1>
    <nav aria-label="breadcrumb" class="w-100">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin.aboutpage.index')}}">Редактирование страницы "О бюро"</a></li>
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
                    <form action="{{route('admin.aboutpage.update')}}" method="POST" class="form py-4">
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
                                <p class="h2 mt-5">Блок "О Бюро"</p>
                                <div class="form-group row border-bottom py-3">
                                    <label for="buro_headline" class="col-sm-2 col-form-label">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="buro_headline" id="buro_headline"
                                               value="{{ isset($data) ? $data->buro_headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="buro_text" class="col-sm-2 col-form-label">
                                        Текст
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="buro_text" id="buro_text"
                                               value="{{ isset($data) ? $data->buro_text : '' }}">
                                    </div>
                                </div>
                                <p class="h2">Блок "Наш подход"</p>
                                <div class="form-group row border-bottom py-3">
                                    <label for="approach_headline" class="col-sm-2 col-form-label ">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="approach_headline" id="approach_headline"
                                               value="{{ isset($data) ? $data->approach_headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="approach_text" class="col-sm-2 col-form-label ">
                                        Описание
                                    </label>
                                    <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="approach_text" id="approach_text"
                                          rows="5">{{ isset($data) ? $data->approach_text : '' }}</textarea>
                                    </div>
                                </div>
                                <p class="h2">Блок "Проекты"</p>
                                <div class="form-group row border-bottom py-3">
                                    <label for="project_headline" class="col-sm-2 col-form-label ">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="project_headline" id="project_headline"
                                               value="{{ isset($data) ? $data->project_headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="project_text" class="col-sm-2 col-form-label ">
                                        Описание
                                    </label>
                                    <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="project_text" id="project_text"
                                          rows="5">{{ isset($data) ? $data->project_text : '' }}</textarea>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between bd-highlight">
                                    <p class="h2">Блок "Наша философия"</p>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="philosophy_headline" class="col-sm-2 col-form-label ">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="philosophy_headline" id="philosophy_headline"
                                               value="{{ isset($data) ? $data->philosophy_headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="philosophy_text" class="col-sm-2 col-form-label ">
                                        Описание
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="philosophy_text" id="philosophy_text"
                                               value="{{ isset($data) ? $data->philosophy_text : '' }}">
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
