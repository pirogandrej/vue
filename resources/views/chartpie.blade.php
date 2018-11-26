@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <h1 class="text-center pb-4">
        Chart.js - круговая диаграмма
    </h1>

    <chartpie-component></chartpie-component>

    @include('layouts.vueMenu')

@endsection