@extends('admin.layouts.base')

@section('content')
    <h1>Услуги</h1>
    <nav aria-label="breadcrumb" class="w-100">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin.services.index')}}">Услуги</a></li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <span class="bi bi-list-ul"></span>
                    Услуги
                </div>
                <div class="card-body">
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Интерьерная живопись</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="/admin/services/interior" class="btn btn-success">
                                            <span class="bi bi-pencil-fill"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Дизайн интерьеров</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="/admin/services/design" class="btn btn-success">
                                            <span class="bi bi-pencil-fill"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Авторский надзор</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="/admin/services/oversight" class="btn btn-success">
                                            <span class="bi bi-pencil-fill"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Ландшафтное проектирование и дизайн</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="/admin/services/landscape-design" class="btn btn-success">
                                            <span class="bi bi-pencil-fill"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Декор и стиль</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="/admin/services/decor" class="btn btn-success">
                                            <span class="bi bi-pencil-fill"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Комплектация</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="/admin/services/package" class="btn btn-success">
                                            <span class="bi bi-pencil-fill"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Цены</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="/admin/services/prices" class="btn btn-success">
                                            <span class="bi bi-pencil-fill"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
