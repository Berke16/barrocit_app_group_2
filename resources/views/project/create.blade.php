@extends('layouts.master')
@section('location')
Add project
@endsection
@section('content')
<div class="container well">
    <form action="{{ action('ProjectsController@store')}}" class="" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="customerid" value="{{$customer->id}}">
        <section class="col-md-4">

            <div class="form-group">
                <label for="name">Project name<span style="color: red">*</span></label>
                <input type="text" id="name" class="form-control" name="name" value="{{old('name')}}" required>
            </div>

            <div class="form-group">
                <label for="description">Description<span style="color: red">*</span></label>
                <input type="text" id="description" class="form-control" name="description" value="{{old('description')}}" required>
            </div>

            <div class="form-group">
                <label for="start_date">Start date<span style="color: red">*</span></label>
                <input type="date" id="start_date" class="form-control" name="start_date" value="{{old('start_date')}}" required>
            </div>

            <div class="form-group">
                <label for="deadline">Deadline<span style="color: red">*</span></label>
                <input type="date" id="deadline" class="form-control" name="deadline" value="{{old('deadline')}}" required>
            </div>

            <div class="form-group">
                <label for="maintained_contract">Maintain Contract<span style="color: red">*</span></label>
                <select name="maintained_contract" id="maintained_contract" class="form-control" required>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

        </section>
        <section class="col-md-4">
            <div class="form-group">
                <label for="operating_system">Operating system<span style="color: red">*</span></label>
                <input type="text" id="operating_system" class="form-control" name="operating_system" value="{{old('operating_system')}}" required>
            </div>

            <div class="form-group">
                <label for="applications">Applications<span style="color: red">*</span></label>
                <textarea class="form-control noresize" name="applications" id="applications" rows="3" placeholder="CSV (app,app,...)" required>{{old('applications')}}</textarea>
            </div>

            <div class="form-group">
                <label for="hardware">Hardware<span style="color: red">*</span></label>
                <textarea class="form-control noresize"  name="hardware" id="hardware" rows="3" required>{{old('hardware')}}</textarea>
            </div>

        </section>
        <section class="col-md-4">

            <div class="form-group">
                <label for="price">Total project price<span style="color: red">*</span></label>
                <div class="input-group">
                    <span class="input-group-addon">€</span>
                    <input type="text" class="form-control" id="price" aria-label="amount" name="price" value="{{old('price')}}" min="100" max="50000" required>
                    <span class="input-group-addon">.00</span>
                </div>
            </div>

            <div class="form-group">
                <label for="amount">Amount terms<span style="color: red">*</span></label>
                <input type="number" class="form-control" id="amount" min="1" value="{{old('amount')}}" name="amount"  required>
            </div>

            <div class="form-group">
                <label for="kind_of_terms">Kind of terms<span style="color: red">*</span></label>
                <select name="kind_of_terms" id="kind_of_terms" class="form-control" required>
                    <option value="1">Monthly</option>
                    <option value="2">2 Months</option>
                    <option value="3">Quarters</option>
                </select>
            </div>

            <div class="form-group">
                <label for="first_payday">First pay day<span style="color: red">*</span></label>
                <input type="date" id="first_payday" class="form-control" name="first_payday" value="{{old('first_payday')}}" required>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary pull-right" value="Add project">
            </div>

        </section>
    </form>
</div>
@endsection