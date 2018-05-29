@if (count($errors)>0)
    <ul>
    @foreach ($errors->all() as $error)
        <strong class="text-danger">{{ $error }}</strong>
    @endforeach
    </ul>
@endif

@if(session()->has('message'))
    <p class="alert alert-success">{{ session('message') }}</p>
@endif


{{--@if ($errors->has('profileSurname'))--}}
    {{--<strong>{{ $errors->first('profileSurname') }}</strong>--}}
    {{--@endif--}}