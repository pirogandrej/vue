@extends('layouts.app')

@section('style')
@endsection

@section('content')

    @include('layouts.vueMenu')

    <socket-chat-component></socket-chat-component>
@endsection