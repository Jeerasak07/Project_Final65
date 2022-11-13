@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--{{ __('You are logged in!') }}-->

                </div>
                <div class="card-body">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <img src="https://img.icons8.com/fluency/512/marvel.png" title="Flaticon logo" width="200" height="200" class="block"></a>
                    <ul>
                        <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/download-2022-07-25t142658-439-1658755625.png?crop=1.00xw:1.00xh;0,0&resize=980:*" width="1200" height="900"></ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
