@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <h1 class="text-center pb-4">
        Chart.js - линейный график
    </h1>

    <chartline-component></chartline-component>
    <socket-component></socket-component>

    @include('layouts.vueMenu')

@endsection