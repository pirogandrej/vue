@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <h1 class="text-center pb-4">
        Получение массива данных <br> Controller -> Blade -> ComponentVue
    </h1>

    <data-component :urldata="{{ json_encode($url_data) }}"></data-component>

    @include('layouts.vueMenu')

@endsection