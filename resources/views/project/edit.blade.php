


@extends('layouts.master')
@section('location')
    Edit project
@endsection
@section('content')
    <div class="container well">
        <form action="{{ action('ProjectsController@update', $project->id)}}" class="" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="customerid" value="{{$customer->id}}">
            <section class="col-md-4">

                <div class="form-group">
                    <label for="name">Project name<span style="color: red">*</span></label>
                    <input type="text" id="name" class="form-control" name="name" value="{{$project->name}}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description<span style="color: red">*</span></label>
                    <input type="text" id="description" class="form-control" name="description" value="{{$project->description}}" required>
                </div>

                <div class="form-group">
                    <label for="start_date">Start date<span style="color: red">*</span></label>
                    <input type="date" id="start_date" class="form-control" name="start_date" value="{{$project->start_date}}" required>
                </div>

                <div class="form-group">
                    <label for="deadline">Deadline<span style="color: red">*</span></label>
                    <input type="date" id="deadline" class="form-control" name="deadline" value="{{$project->deadline}}" required>
                </div>

                <div class="form-group">
                    <label for="maintained_contract">Maintain Contract<span style="color: red">*</span></label>
                    <select name="maintained_contract" id="maintained_contract" class="form-control" required>
                        @if($project->maintained_contract == 0)
                        <option value="1">Yes</option>
                        @else
                        <option value="0">No</option>
                        @endif
                    </select>
                </div>

            </section>
            <section class="col-md-7">
                <div class="form-group">
                    <label for="operating_system">Operating system<span style="color: red">*</span></label>
                    <input type="text" id="operating_system" class="form-control" name="operating_system" value="{{$project->operating_system}}" required>
                </div>

                <div class="form-group">
                    <label for="applications">Applications<span style="color: red">*</span></label>
                    <textarea class="form-control noresize" name="applications" id="applications" rows="3"  required>{{$project->applications}}</textarea>
                </div>

                <div class="form-group">
                    <label for="hardware">Hardware<span style="color: red">*</span></label>
                    <textarea class="form-control noresize"  name="hardware" id="hardware" rows="3" required>{{$project->hardware}}</textarea>
                </div>

            </section>
            <section class="col-md-12">
                <div class="form-group">
                    <input type="submit" class="pull-right" value="edit project">
                </div>
            </section>
        </form>
    </div>
@endsection