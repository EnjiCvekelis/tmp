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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <span class="bi bi-list-ul"></span>
                    Наши ценности
                </div>
                <div class="card-body">
                    <a href="{{route('admin.values.create')}}" class="btn btn-primary">
                        <span class="bi bi-plus"></span>
                        Добавить
                    </a>
                    <div class="table-wrapper">
                        <table class="table mt-3">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название</th>
                                <th scope="col">Текст</th>
                                <th scope="col">Иконка</th>
                                <th scope="col">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($values as $value)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$value->headline}}</td>
                                    <td>{{$value->description}}</td>
                                    <td><img src="/{{$value->icon}}" alt=""></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="/admin/values/{{$value->id}}/edit" class="btn btn-success">
                                                <span class="bi bi-pencil-fill"></span>
                                            </a>
                                            <form action="{{ URL::route('admin.values.destroy', $value->id) }}" method="POST" class="btn btn-danger">
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
                    {{ $values->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
