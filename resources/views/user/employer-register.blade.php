@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center">
                
                        <div class="col-lg-5">
                            <div id="message"></div>
                            <div class="card shadow-lg" id="card">
                                <div class="pt-5">
                                    <p class="fs-5 text-center mb-1 text-capitalize">Looking for a staff?</p>
                                    <div class="text-center mb-4 fs-2 fw-bold">
                                        Register
                                    </div>
                                </div>
                                <div class="card-body px-5 pb-4">
                                  
                                   
                                    <form action="#" method="POST" id="registrationForm">
                                       
                                        <div class="mb-3">
                                            <label class="form-label">Company Name</label>
                                            <input type="text" name="name" class="form-control"   required>
                                            @if ($errors->has('name'))
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                            
                                          </div>
                                        <div class="mb-3">
                                          <label class="form-label">Email address</label>
                                          <input type="email" name="email" class="form-control"   required>
                                          @if ($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                            @endif
                                          
                                        </div>
                                        <div class="mb-3">
                                          <label  class="form-label" >Password</label>
                                          <input type="password" name="password" class="form-control" required>
                                          @if ($errors->has('password'))
                                            <p class="text-danger">{{ $errors->first('password') }}</p>
                                            @endif
                                        </div>
                                      
                                        <button id="btnRegister" class="btn btn-dark w-100 mt-4">Submit</button>
                                      </form>
                                </div>
                                
                            </div>
                          
                        </div>
                   
                 
               
            
           
        </div>
    </div>

    <script>
        var url = "{{route('store.employer')}}";
        document.getElementById("btnRegister").addEventListener("click", function(event) {
        var form = document.getElementById("registrationForm");
        var card = document.getElementById("card");
        var messageDiv = document.getElementById('message')
        messageDiv.innerHTML = ''
        var formData = new FormData(form)
    
        var button = event.target
        button.disabled = true;
        button.innerHTML = 'Sending email.... '
    
        fetch(url, {
            method: "POST",
            headers:{
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            },
            body: formData
        }).then(response => {
            if(response.ok) {
                return response.json();
            }else{
                throw new Error('Error')
            }
        }).then(data=> {
            button.innerHTML = 'Register'
            button.disabled = false
            messageDiv.innerHTML = '<div class="alert alert-success">Registration was successful.Please check your email to verify it</div>'
            card.style.display = 'none'
        }).catch(error => {
            button.innerHTML = 'Register'
            button.disabled = false
            messageDiv.innerHTML = '<div class="alert alert-danger">Something went wrong. Please try again</div>'
           
        })
    
    
    })
    </script>


@endsection