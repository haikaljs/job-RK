<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Haikal | Job</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');

    *{
      font-family: 'Montserrat', sans-serif;
    }
    </style>

    

  <body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body py-3" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              @if (!Auth::check())
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{ route('create.seeker') }}">Job Seeker</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" >Employer</a>
              </li>
              @endif
              @if (Auth::check())
              <li class="nav-item">
                <a class="nav-link" id="logout" href="#">Logout</a>
              </li>
              @endif
              <form id="form-logout" action="{{ route('logout') }}" method="post">@csrf</form>
            </ul>
          </div>
        </div>
      </nav>
      @yield('content')
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
      let logout = document.getElementById('logout')
      let form = document.getElementById('form-logout')
      
      logout.addEventListener('click', () => {
        form.submit()
      })
    </script>
  </body>
</html>