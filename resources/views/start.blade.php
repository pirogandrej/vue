@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <h1 class="text-center pb-4">
        Вывод примера из коробки
    </h1>

    <start-component></start-component>

    @include('layouts.vueMenu')

@endsection