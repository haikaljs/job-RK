@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center">
            Hello, {{ auth()->user()->name }}
            <p>Your trial will expire on {{ auth()->user()->user_trial }}</p>

            <div class="col-md-3">
                <div class="card bg-secondary">
                    <p class="text-center mt-3 lead text-white">User Profile</p>
                    <button class="btn btn-light d-flex align-self-end justify-content-center w-25 text-center">View</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-primary">
                    <p class="text-center mt-3 lead text-white">Post Job</p>
                    <button class="btn btn-light d-flex align-self-end justify-content-center w-25 text-center">View</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning">
                    <p class="text-center mt-3 lead text-white">All Jobs</p>
                    <button class="btn btn-light d-flex align-self-end justify-content-center w-25 text-center">View</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success">
                    <p class="text-center mt-3 lead text-white">Item 4</p>
                    <button class="btn btn-light d-flex align-self-end justify-content-center w-25 text-center">View</button>
                </div>
            </div>
        </div>
    </div>

@endsection