@extends('admin.layouts.base')

@section('content')

    <h1>Категория</h1>
    <nav aria-label="breadcrumb" class="w-100">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin.portfolio.index')}}">Редактирование списка
                    категорий</a></li>
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
                    <form action="{{route('admin.portfolio.store')}}" method="POST" class="form py-4"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row border-bottom py-3">
                            <label for="categoryName" class="col-sm-2 col-form-label">
                                Название категории</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="categoryName">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
