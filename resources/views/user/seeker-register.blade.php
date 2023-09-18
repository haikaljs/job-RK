@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 90px;">
        <div class="row">
          
                <div class="col-md-6 mb-3">
                   
                    <img src="{{ asset('images/register.jpg') }}" class="img-fluid" alt="" style="border-radius: 7px;">
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card pt-3">
                        <div class="text-center">
                            <h5 class="text-muted">Looking for a job?</h5>
                            <h6 class="text-muted">Please create an account</h6>
                        </div>
                        
                        <div class="card m-4">
                            <div class="card-header">
                                Register
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                                <div class="form-group mt-3">
                                    <button class="btn btn-dark" type="submit" style="width: 100%">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
            
           
        </div>
    </div>


@endsection