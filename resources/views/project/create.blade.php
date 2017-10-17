
@extends('layout.master')
@section('location')
    Add project
@endsection
@section('content')
    <div class="container well">
        <form action="{{ action('projectsController@store')}}" class="" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="customerid" value="{{$customer->id}}">
            <section class="col-md-4">
                <div class="form-group">
                    <label for="name">*Project name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="description">*Description</label>
                    <input type="text" class="form-control" name="description">
                </div>
                <div class="form-group">
                    <label for="start_date">*Start date</label>
                    <input type="date" class="form-control" name="start_date">
                </div>
                <div class="form-group">
                    <label for="deadline">*Deadline</label>
                    <input type="date" class="form-control" name="deadline">
                </div>
                <div class="form-group">
                    <label for="maintained_contract">*Maintain Contract</label>
                    <select name="maintained_contract" class="form-control" required>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
            </section>
            <section class="col-md-4">
                <div class="form-group">
                    <label for="operating_system">*Operating system</label>
                    <input type="text" class="form-control" name="operating_system">
                </div>
                <div class="form-group">
                    <label for="applications">*Applications</label>
                    <textarea class="form-control noresize" name="applications" id="" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="hardware">*Hardware</label>
                    <textarea class="form-control noresize" name="hardware" id="" rows="3" required></textarea>
                </div>
            </section>
            <section class="col-md-4">
                <div class="form-group">
                    <label for="price">*Total project price</label>
                    <div class="input-group">
                        <span class="input-group-addon">€</span>
                        <input type="text" class="form-control" aria-label="amount" name="price">
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="amount">*Amount terms</label>
                    <input type="number"class="form-control" min="1" value="1" name="amount">
                </div>
                <div class="form-group">
                    <label for="kind_of_terms">*Kind of terms</label>
                    <select name="kind_of_terms" class="form-control" required>
                        <option value="1">Monthly</option>
                        <option value="2">2 Months</option>
                        <option value="3">Quarters</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="first_payday">*First pay day</label>
                    <input type="date" class="form-control" name="first_payday" required>
                </div>
                <input type="submit" class="pull-right" value="Add project">
            </section>
        </form>
    </div>
@endsection