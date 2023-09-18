@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <div class="row">
                
                        <div class="col-lg-6 mx-auto">
                            <div class="card shadow-lg">
                                <div class="card-header bg-dark text-white p-5">
                                    
                                    <div class="text-center">
                                        <h5>Looking for a job?</h5>
                                        <h6 >Please create an account</h6>
                                    </div>
                                   
                                  
                                </div>
                                <div class="card-body p-5">
                                    <form action="{{ route('store.seeker') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" name="name" class="form-control "  >
                                            
                                          </div>
                                        <div class="mb-3">
                                          <label class="form-label">Email address</label>
                                          <input type="email" name="email" class="form-control "  >
                                          
                                        </div>
                                        <div class="mb-3">
                                          <label  class="form-label" >Password</label>
                                          <input type="password" name="password" class="form-control " >
                                        </div>
                                      
                                        <button type="submit" class="btn btn-dark w-100 mt-4">Submit</button>
                                      </form>
                                </div>
                            </div>
                           
                        </div>
                   
                 
               
            
           
        </div>
    </div>


@endsection