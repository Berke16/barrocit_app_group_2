
@extends('layouts.master')
@section('location')
    Add user
@endsection
@section('content')
<!-- this is a form that an employee needs to fill to create a customer. this "new" customer can't get a project immediately, a finance employee needs to do a bcr check first to see if the customer is worth to get a project. -->
<div class="container well">

    <form action="{{action('Auth\RegisterController@register')}}" method="post">

        {{csrf_field()}}

        <div class="form-group col-lg-4">
            <label for="name">Name:<span style="color: red">*</span></label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
        </div>

        <div class="form-group col-lg-3">
            <label for="email">Email:<span style="color: red">*</span></label>
            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
        </div>

        <div class="form-group col-lg-2">
            <label for="password">Password:<span style="color: red">*</span></label>
            <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
        </div>

        <div class="form-group col-lg-3">
            <label for="password_confirmation">Password confirmation:<span style="color: red">*</span></label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}">
        </div>

        <div class="form-group col-lg-3">
            <label for="type">Type of department:<span style="color: red">*</span></label>
            <select name="type" id="type" class="form-control">
                <option value="sales">Sales</option>
                <option value="finance">Finance</option>
                <option value="development">Development</option>
            </select>
        </div>
        <div class="form-group pull-right col-lg-2">
            <input type="submit" class="btn btn-primary col-lg-12" value="Add user">
        </div>

    </form>

</div>
@endsection