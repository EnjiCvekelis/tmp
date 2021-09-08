@extends('admin.layouts.base')

@section('content')

    <h1>Категория</h1>
    <nav aria-label="breadcrumb" class="w-100">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin.portfolio.index')}}">Список категорий</a>
            </li>
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
                    Редактировать
                </div>
                <div class="card-body">
                    <form action="{{route('admin.portfolio.update', [$category->id])}}" method="POST"
                          class="form py-4" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" class="form-control" name="id"
                               value="{{$category->id}}">
                        <div class="form-group row border-bottom py-3">
                            <label for="categoryName" class="col-sm-2 col-form-label">Название категории</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="categoryName"
                                       value="{{$category->name}}">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <span class="bi bi-list-ul"></span>
                    Проекты
                </div>
                <div class="card-body">
                    <a href="{{route('admin.project.create', ['portfolio'=>$category->id])}}" class="btn btn-primary">
                        <span class="bi bi-plus"></span>
                        Добавить
                    </a>
                    <div class="table-wrapper">
                        <table class="table mt-3">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название</th>
                                <th scope="col">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$project->headline}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="/admin/portfolio/{{$category->id}}/project/{{$project->id}}/edit" class="btn btn-success">
                                                <span class="bi bi-pencil-fill"></span>
                                            </a>
                                            <form action="{{ URL::route('admin.project.destroy', $project->id) }}" method="POST" class="btn btn-danger">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="delete-button bi bi-trash-fill"></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $projects->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
