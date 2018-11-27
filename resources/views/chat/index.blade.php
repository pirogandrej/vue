@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <ul class="chat">
                    @foreach($messages as $message)
                        <li>
                            <b>{{$message->author}}</b>
                            <b>{{$message->content}}</b>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection