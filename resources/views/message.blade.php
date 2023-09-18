@if(Session::has('successMessage'))
<div class="alert alert-success text-center">{{ Session::get('successMessage') }}</div>
@endif

@if(Session::has('errorMessage'))
<div class="alert alert-danger text-center">{{ Session::get('errorMessage') }}</div>
@endif