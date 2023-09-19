@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Account verification
                </div>
                <div class="card-body">
                    <h5 class="card-title">Your account is not verified.</h5>
                    <p class="card-text">Please verify your account first. You may resend the verification email</p>
                    <a href="{{ route('resend.email') }}" class="btn btn-dark">Resend verification email</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection