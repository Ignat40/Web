@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <h3>
                    {{$post->user->username}}
                    <p>{{$post->caption}}</p>
                </h3>
            </div>
        </div>
    </div>
</div>

@endsection