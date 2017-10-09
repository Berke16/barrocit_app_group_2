
@extends('layout.master')
@section('location')
    Home: Development
@endsection
@section('content')

    <div class="container">
        <div class="col-md-9">
            @include('templets.customerstabel')
        </div>
        <div class="col-md-3">
            @include('templets.projecttabel')
        </div>
    </div>

@endsection