@if (count($errors)>0)
    <ul>
    @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
    @endforeach
    </ul>
@endif

@if(session()->has('message'))
    <p class="alert alert-success">{{ session('message') }}</p>
@endif