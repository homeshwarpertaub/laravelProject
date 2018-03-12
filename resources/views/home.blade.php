@extends('applicant/app')
@section('title','Welcome')
@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <!--Panel-->
                    <div class="card text-center" style="width: 22rem;">
                        <div class="card-header success-color white-text">
                            Dashboard
                        </div>
                        <div class="card-body">
                            <h4>Welcome</h4>
                            @if (session('status'))
                            <h4 class="card-title">Special title treatment</h4>
                            <p>{{ session('status') }}
                            </p>
                            @endif
                        </div>
                        <div class="card-footer text-muted success-color white-text">
                            <p class="mb-0">You are logged in!</p>
                        </div>
                    </div>
                    <!--/.Panel-->


                </div>
            </div>
        </div>
    </main>
@endsection
