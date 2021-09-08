@extends('admin.layouts.base')

@section('content')
    <h1>Главная страница</h1>
    <nav aria-label="breadcrumb" class="w-100">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.services.index')}}">Редактирование страниц услуг</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin.services.landscape')}}">Редактирование страницы "Ландшафтный дизайн"</a></li>
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
                    <form action="{{isset($data) ? route('admin.services.landscape.update') : route('admin.services.landscape.create')}}" method="POST" class="form py-4"   enctype="multipart/form-data" >
                        @csrf
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Контент страницы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Карточка на главной странице</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="meta-tab" data-toggle="tab" href="#meta" role="tab" aria-controls="meta" aria-selected="false">Meta</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <input type="hidden" class="form-control" name="id" value="{{ isset($data) ? $data->id : '' }}">
                                <p class="h2 mt-4">Первый блок</p>
                                <div class="form-group row border-bottom py-3">
                                    <label for="first_headline" class="col-sm-2 col-form-label ">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="first_headline" id="first_headline"
                                               value="{{ isset($data) ? $data->first_headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="first_text" class="col-sm-2 col-form-label ">
                                        Текст
                                    </label>
                                    <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="first_text" id="first_text"
                                          rows="5">{{ isset($data) ? $data->first_text : '' }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label class="col-sm-2 col-form-label">Изображение</label>
                                    <div class="image-upload-container" style="max-width:600px;">
                                        <div class="image-edit">
                                            <input class="image-upload" name="first_image" type='file'
                                                   accept=".png, .jpg, .jpeg, .gif, .svg"/>
                                            <label class="btn-image-upload"> <span class="bi bi-card-image"></span></label>
                                        </div>
                                        <div class="image-preview-container"
                                             style="width: 300px; height: 150px; position: relative;">
                                            <div class="image-preview" data-init-image="{{ isset($data) ? assetImage($data->first_image) : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="h2">Второй блок</p>
                                <div class="form-group row border-bottom py-3">
                                    <label for="second_headline" class="col-sm-2 col-form-label ">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="second_headline" id="second_headline"
                                               value="{{ isset($data) ? $data->second_headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="second_subheadline" class="col-sm-2 col-form-label ">
                                        Подзаголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="second_subheadline" id="second_subheadline"
                                               value="{{ isset($data) ? $data->second_subheadline : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="form-group row border-bottom py-3">
                                    <label for="headline" class="col-sm-2 col-form-label">
                                        Заголовок
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="headline" id="headline"
                                               value="{{ isset($data) ? $data->headline : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="description" class="col-sm-2 col-form-label">
                                        Описание
                                    </label>
                                    <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="description" id="description"
                                          rows="5">{{ isset($data) ? $data->description : '' }}</textarea>
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
