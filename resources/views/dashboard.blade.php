@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center">
            {{ auth()->user()->name }}
            {{ auth()->user()->email }}
        </div>
    </div>

@endsection