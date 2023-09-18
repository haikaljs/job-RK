@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center">
                
                        <div class="col-lg-5">
                            <div class="card shadow-lg">
                                <div class="pt-5">
                                    <p class="fs-5 text-center mb-0 text-capitalize">Are You Looking for a job?</p>
                                    <div class="text-center mb-4 fs-2 fw-bold">
                                        Register
                                    </div>
                                </div>
                                <div class="card-body px-5 pb-4">
                                  
                                   
                                    <form action="{{ route('store.seeker') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" name="name" class="form-control"  value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                            
                                          </div>
                                        <div class="mb-3">
                                          <label class="form-label">Email address</label>
                                          <input type="text" name="email" class="form-control"  value="{{ old('email') }}">
                                          @if ($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                            @endif
                                          
                                        </div>
                                        <div class="mb-3">
                                          <label  class="form-label" >Password</label>
                                          <input type="password" name="password" class="form-control " >
                                          @if ($errors->has('password'))
                                            <p class="text-danger">{{ $errors->first('password') }}</p>
                                            @endif
                                        </div>
                                      
                                        <button type="submit" class="btn btn-dark w-100 mt-4">Submit</button>
                                      </form>
                                </div>
                            </div>
                           
                        </div>
                   
                 
               
            
           
        </div>
    </div>


@endsection