@extends('client._layouts.base')

@section('js')
@endsection

@section('css')
@endsection


@section('content')
    <div class="header-gradient"></div>

    <section class="object">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb__item">
                    <a href="{{route('client.home')}}">Главная</a>
                </li>
                <li class="breadcrumb__item breadcrumb__item_active">
                    <a href="{{route('client.objects')}}">Объекты</a>
                </li>
            </ul>

            <div class="object__content">
                @foreach($objects as $object)
                    <a href="/objects/category/{{$object->id}}" class="object__item">
                        <img src="{{assetImage($object->cover)}}" alt="" class="object__picture">
                        <div class="object__bg"></div>
                        <div class="object__info">
                            <div class="object__title">{{$object->name}}</div>
                            <div class="object__subtitle">{{$object->description}}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
