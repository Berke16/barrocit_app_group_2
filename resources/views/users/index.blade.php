
@extends('layouts.master')
@section('location')
    Add user
@endsection
@section('content')
<!-- this is a form that an employee needs to fill to create a customer. this "new" customer can't get a project immediately, a finance employee needs to do a bcr check first to see if the customer is worth to get a project. -->
<div class="container well">

    <form action="{{action('UsersController@store')}}" method="post">

        {{csrf_field()}}
        {{method_field('PUT')}}

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
<div class="container">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Users</h3>
                <div class="pull-right">
                <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                    <i class="glyphicon glyphicon-filter"></i>
                </span>
                </div>
            </div>
            <div class="panel-body">
                <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#invoices-table" placeholder="Invoces Table" />
            </div>
            <div class="table_style">
                <table class="table table-hover text-center" id="invoices-table">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Department type</th>
                        <th class="text-center">Email</th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        @if($user->id != Auth::User()->id)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->type}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <form action="{{action('UsersController@destroy', $user->id)}}" method="post" style="margin: 0;">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="glyphicon glyphicon-remove btn-xs btn-danger"></button>
                                    </form>
                                </td>
                                <td>
                                    <button data-href="{{action('UsersController@edit', $user->id)}}" class="glyphicon glyphicon-pencil btn-xs btn-warning"></button>
                                </td>
                            </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection