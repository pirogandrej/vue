@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <h1 class="text-center pb-4">
        Ajax - получение массива данных <br> Controller -> Blade -> ComponentVue
    </h1>

    <ajax-component></ajax-component>

    @include('layouts.vueMenu')

@endsection