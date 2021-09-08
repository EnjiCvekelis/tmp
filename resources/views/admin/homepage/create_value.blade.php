@extends('admin.layouts.base')

@section('content')

    <h1>Наши ценности</h1>
    <nav aria-label="breadcrumb" class="w-100">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.homepage.index')}}">Редактирование главной страницы</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin.values.index')}}">Редактирование списка
                    ценностей</a></li>
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
                    <span class="bi bi-pencil-fill"></span>
                    Добавить
                </div>
                <div class="card-body">
                    <form action="{{route('admin.values.store')}}" method="POST" class="form py-4"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row border-bottom py-3">
                            <label for="valueHeadline" class="col-sm-2 col-form-label">
                                Заголовок</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="headline" id="valueHeadline">
                            </div>
                        </div>
                        <div class="form-group row border-bottom py-3">
                            <label for="valueDescription" class="col-sm-2 col-form-label">Описание</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" rows="5"
                                          id="valueDescription"></textarea>
                            </div>
                        </div>
                        <div class="form-group row border-bottom py-3">
                            <label class="col-sm-2 col-form-label">Иконка</label>
                            <div class="image-upload-container" style="max-width:600px;">
                                <div class="image-edit">
                                    <input class="image-upload" name="icon" type='file'
                                           accept=".png, .jpg, .jpeg, .gif, .svg"/>
                                    <label class="btn-image-upload"> <span class="bi bi-card-image"></span></label>
                                </div>
                                <div class="image-preview-container"
                                     style="width: 300px; height: 150px; position: relative;">
                                    <div class="image-preview" data-init-image="">
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
